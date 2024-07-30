const hamb = document.querySelector("#hamb");
const popup = document.querySelector("#popup-menu");
const body = document.body;

// Клонируем меню, чтобы задать свои стили для мобильной версии
const menu = document.querySelector("#menu").cloneNode(1);


// При клике на иконку hamb вызываем ф-ию hambHandler
hamb.addEventListener("click", hambHandler);

// Выполняем действия при клике ..
function hambHandler(e) {
  e.preventDefault();
  // Переключаем стили элементов при клике
  popup.classList.toggle("open");
  hamb.classList.toggle("active");
  body.classList.toggle("noscroll");
  renderPopup();
}

// Здесь мы рендерим элементы в наш попап
function renderPopup() {
  popup.appendChild(menu);
}

// Код для закрытия меню при нажатии на ссылку
const links = Array.from(menu.children);

// Для каждого элемента меню при клике вызываем ф-ию
links.forEach((link) => {
  link.addEventListener("click", closeOnClick);
});

// Закрытие попапа при клике на меню
function closeOnClick() {
  popup.classList.remove("open");
  hamb.classList.remove("active");
  body.classList.remove("noscroll");
}


// Маска телефона
$(function(){
  $('input[type="tel"]').on('input', function () {
      let val = $('input[type="tel"').val();
      if (val[0] == 8 || val[0] == 7){
          $('input[type="tel"]').val(val.slice(1));
      }
  });
  $('input[type="tel"]').mask('+7 (000) 000-00-00');
});


// Меню в закрепе
$(document).scroll(function(e) {
  $(window).scrollTop() > 1000 ? $('header').addClass('fixed') : $('header').removeClass('fixed');
  $(window).scrollTop() > 1000 ? $('.top').addClass('top-active') : $('.top').removeClass('top-active');
});
/*
// Смена bg в main на главной
$(document).ready(function(){
  var images = ['../img/bg.jpg', '../img/bg2.jpg', '../img/bg3.jpg']; // Список изображений для смены
  var currentIndex = 1; // Индекс текущего изображения

  function changeBackground() {
      currentIndex = (currentIndex + 1) % images.length; // Переход к следующему изображению
      $('.main').css('background-image', 'url(' + images[currentIndex] + ')'); // Установка нового изображения
  }
  // Запуск функции смены фона каждые 5 секунд
  setInterval(changeBackground, 3000);

});
*/

// Выбор категорий в портфолио
$(function(){
  if($('body').is('.page-porfolio')){
    const categoryBtn = document.querySelector(".select-category__btn");
    const categoryBtnText = document.querySelector(".select-category__btn-text");
    const categoryArrow = document.querySelector(".select-category__arrow");
    const catygoryMenu = document.querySelector(".category-items");
    const categoryLinks = Array.from(catygoryMenu.children);

    categoryBtn.addEventListener("click", categoryBtnHandler);

    function categoryBtnHandler(e) {
      e.preventDefault();
      catygoryMenu.classList.toggle("open");
      categoryArrow.classList.toggle("open");
    }

    categoryLinks.forEach((categoryLink, i) => {
      categoryLink.addEventListener("click", () => closeOnClick(i));
    });

    function closeOnClick(i) {
      catygoryMenu.classList.remove("open");
      categoryArrow.classList.remove("open");
      var categoryName = categoryLinks[i].textContent;
      categoryBtnText.innerHTML = categoryName;

    }
  }
});

// Фильтрация
$('.js-filter').on( 'click', function() {
  
  var $category = $(this).attr('data-category');

  $('.js-filterable').css({
    "opacity": "0",
    "visibility": "hidden",
  });
  setTimeout(function() {
    $('.js-filterable').css({
      "display": "none",
    });
  }, 200);  
  setTimeout(function() {
    $('.js-filterable[data-category=' + $category + ']').css({
      "display": "flex",
    });
  }, 200);
  setTimeout(function() {
    $('.js-filterable[data-category=' + $category + ']').css({
      "opacity": "1",
      "visibility": "visible",
    });
  }, 500);
});  


// Смена bg в main на главной
if ( document.querySelectorAll(".main__imgs img").length ) {
  const images = document.querySelectorAll('.main__imgs img');
  let index = 0;

function changeImage() {
  images[index].classList.add('hidden');
  setTimeout(function() {
    index = (index + 1) % images.length;
    images[index].classList.remove('hidden');
  }, 1200);
}
setInterval(changeImage, 4000);
}





$('.contact-form').submit(function(event) {
  event.preventDefault(); // Prevent direct form submission
  $('#alert').text('Отправка...').fadeIn(0); // Display "Processing" to let the user know that the form is being submitted
  grecaptcha.ready(function () {
      grecaptcha.execute('6LdJAJUpAAAAAOLzQcRYt4rw-oBJi00uckalA2H5', { action: 'contact' }).then(function (token) {
          var recaptchaResponse = document.getElementById('recaptchaResponse');
          recaptchaResponse.value = token;
          // Make the Ajax call here
          $.ajax({
              url: 'https://akanto-design.ru/includes/contact.php',
              type: 'post',
              data: $('.contact-form').serialize(),
              dataType: 'json',
              success: function( _response ){
                  // The Ajax request is a success. _response is a JSON object
                  var error = _response.error;
                  var success = _response.success;
                  if(error != "") {
                      // In case of error, display it to user
                      $('#alert').html(error);
                  }
                  else {
                      // In case of success, display it to user and remove the submit button
                      $('#alert').html(success);
                      $(".contact-form")[0].reset();
                  }
              },
              error: function(jqXhr, json, errorThrown){
                  // In case of Ajax error too, display the result
                  var error = jqXhr.responseText;
                  $('#alert').html(error);
              }
          });
      });
  });
});