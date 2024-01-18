 // Map


initMap();

async function initMap() {
    await ymaps3.ready;
    const {YMap, YMapDefaultSchemeLayer} = ymaps3;
    const map = new YMap(
        document.getElementById('map-wrapper'),
        {
            location: {
                // Координаты центра карты
                center: [37.518183, 55.682747],

                // Уровень масштабирования
                zoom: 15
            }
            
        }
    );

    // Добавляем слой для отображения схематической карты
    map.addChild(new YMapDefaultSchemeLayer(
        
    ));
}


// Sticky Header

$(window).on('scroll', function () {
    var scroll = $(window).scrollTop();
    if (scroll < 50) {
      $(".header-sticky").removeClass("sticky-bar");
      $(".header-sticky").addClass("header-wrapper");
      
    } else {
      $(".header-sticky").addClass("sticky-bar");
      $(".header-sticky").removeClass("header-wrapper");
    }
});

// Modal Header

$('.menu__phone-button').on('click', function () {
  $('.wrapper-modal').addClass('wrapper-modal_active');
  $('.ymaps3x0--map-container').addClass('ymaps3x0--map-container_active');
})
$('.modal-window__close-btn').on('click', function () {
  $('.wrapper-modal').removeClass('wrapper-modal_active');
  $('.ymaps3x0--map-container').removeClass('ymaps3x0--map-container_active');
})
$('.overlay-modal').on('click', function () {
  $('.wrapper-modal').removeClass('wrapper-modal_active');
  $('.ymaps3x0--map-container').removeClass('ymaps3x0--map-container_active');
})
$('.header-modal__success-close').on('click', function () {
  $('.wrapper-modal').removeClass('wrapper-modal_active');
  $('.ymaps3x0--map-container').removeClass('ymaps3x0--map-container_active');
})

//Валидация и отправка формы

//Валидация и отправка формы

$(document).ready(function() {
  $('[data-submit]').on('click', function(e) {
      e.preventDefault();
      $(this).parent('form').submit();
  })
  $.validator.addMethod(
      "regex",
      function(value, element, regexp) {
          var re = new RegExp(regexp);
          return this.optional(element) || re.test(value);
      },
      "Please check your input."
  );

  // Функция валидации и вывода сообщений
  function valEl(el) {
    el.validate({
        rules: {
            tel: {
                required: true,
                regex: '^([\+]+)*[0-9\x20\x28\x29\-]{5,20}$'
            },
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            text: {
              required: true
          },
        },
        messages: {
            tel: {
                required: 'Поле обязательно для заполнения',
                regex: 'Телефон может содержать символы + - ()'
            },
            name: {
                required: 'Поле обязательно для заполнения',
            },
            email: {
                required: 'Поле обязательно для заполнения',
                email: 'Неверный формат E-mail'
            },
            text: {
              required: 'Поле обязательно для заполнения',
          },
        },

          submitHandler: function(form) {
              var $form = $(form);
              var $formId = $(form).attr('id');
              switch ($formId) {
                  // Если у формы id="popupResult" - делаем:
                  case 'formHeader':
                      $.ajax({
                              type: 'POST',
                              url: $form.attr('action'),
                              data: $form.serialize()
                          })
                          .done(function() {
                              console.log('Success');
                          })
                          .fail(function() {
                              console.log('Fail');
                          })
                          .always(function() {
                              console.log('Always');
                              setTimeout(function() {
                                  $('#formSuccess').fadeIn();
                                  $('#formHeader').fadeOut();
                                  $form.trigger('reset');
                                  //строки для остлеживания целей в Я.Метрике и Google Analytics
                              }, 1100);
                              $('#formSuccess').on('click', function(e) {
                                  $(this).fadeOut();
                                  $('#formHeader').fadeIn();
                              });

                          });
                      break;
                    case 'formFooter':
                      $.ajax({
                            type: 'POST',
                            url: $form.attr('action'),
                            data: $form.serialize(),
                      })
                        .always(function() {
                          console.log('Always');
                          setTimeout(function() {
                              $('.map__form_success').fadeIn();
                              $form.trigger('reset');
                              //строки для остлеживания целей в Я.Метрике и Google Analytics
                          }, 1100);
                          $('.map__form_success').on('click', function(e) {
                              $(this).fadeOut();
                          });
                        });
                    break;
              }
              return false;
          }
      })
  }

  $('.form').each(function() {
      valEl($(this));
  });
  
});
