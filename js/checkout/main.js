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
    $('.checkout__order-wrapper').css({'z-index':'-1'});
  })
  $('.modal-window__close-btn').on('click', function () {
    $('.wrapper-modal').removeClass('wrapper-modal_active');
    $('.checkout__order-wrapper').css({'z-index':'0'});
  })
  $('.overlay-modal').on('click', function () {
    $('.wrapper-modal').removeClass('wrapper-modal_active');
    $('.checkout__order-wrapper').css({'z-index':'0'});
  })
  $('.header-modal__success-close').on('click', function () {
    $('.wrapper-modal').removeClass('wrapper-modal_active');
    $('.checkout__order-wrapper').css({'z-index':'0'});
  })


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
              }
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
              }
          },

          submitHandler: function(form) {
              var $form = $(form);
              var $formId = $(form).attr('id');
              switch ($formId) {
                  
                  case 'goToNewPage':
                      $.ajax({
                              type: 'POST',
                              url: $form.attr('action'),
                              data: $form.serialize(),
                          })
                          .always(function() {
                              console.log('Form One is done');
                          });
                      break;
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
              }
              return false;
          }
      })
  }

  $('.form').each(function() {
      valEl($(this));
  });
  
});