const hamb = document.querySelector("#hamb");
const popup = document.querySelector("#popup-menu");
const body = document.body;

const menu = document.querySelector("#menu").cloneNode(1);

hamb.addEventListener("click", hambHandler);

function hambHandler(e) {
   e.preventDefault();
   // Переключаем стили элементов при клике
   popup.classList.toggle("open");
   hamb.classList.toggle("active");
   body.classList.toggle("noscroll");
   renderPopup();
}

function renderPopup() {
   popup.appendChild(menu);
}


const links = Array.from(menu.children);

links.forEach((link) => {
   link.addEventListener("click", closeOnClick);
});

//hamb
function closeOnClick() {
   popup.classList.remove("open");
   hamb.classList.remove("active");
   body.classList.remove("noscroll");
}

//tel validate
$(function () {
   $('input[type="tel"]').on('input', function () {
      let val = $('input[type="tel"]').val();
      if (val[0] == 8 || val[0] == 7) {
         $('input[type="tel"]').val(val.slice(1));
      }
   });
   $('input[type="tel"]').mask('+7 (000) 000-00-00');
});

//header show up
$(document).scroll(function (e) {
   $(window).scrollTop() > 50 ? $('header').addClass('fixed') : $('header').removeClass('fixed');
   $(window).scrollTop() > 50 ? $('.top').addClass('top-active') : $('.top').removeClass('top-active');
});

//category filter
$(function () {
   if ($('body').is('[page-porfolio]')) {
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

$('.js-filter').on('click', function () {

   var $category = $(this).attr('data-category');

   $('.js-filterable').css({
      "opacity": "0",
      "visibility": "hidden",
   });
   setTimeout(function () {
      $('.js-filterable').css({
         "display": "none",
      });
   }, 200);
   setTimeout(function () {
      $('.js-filterable[data-category=' + $category + ']').css({
         "display": "flex",
      });
   }, 200);
   setTimeout(function () {
      $('.js-filterable[data-category=' + $category + ']').css({
         "opacity": "4",
         "visibility": "visible",
      });
   }, 500);
});

if (document.querySelectorAll(".main__imgs img").length) {
   const images = document.querySelectorAll('.main__imgs img');
   let index = 0;

   function changeImage() {
      images[index].classList.add('hidden');
      setTimeout(function () {
         index = (index + 1) % images.length;
         images[index].classList.remove('hidden');
      }, 1200);
   }

   setInterval(changeImage, 4000);
}


$('.contact-form').submit(function (event) {
   event.preventDefault(); // Prevent direct form submission
   $('#alert').text('Отправка...').fadeIn(0); // Display "Processing" to let the user know that the form is being submitted
   grecaptcha.ready(function () {
      grecaptcha.execute('6LdJAJUpAAAAAOLzQcRYt4rw-oBJi00uckalA2H5', {action: 'contact'}).then(function (token) {
         var recaptchaResponse = document.getElementById('recaptchaResponse');
         recaptchaResponse.value = token;
         async function sendMessage(text)
         {
            const tg = {
               token:'6674932414:AAGyg42Rntkd-MqGJWQS6sA-mUMyMMTXA4w',
               chat_id: '315610444'
            }
            const url = `https://api.telegram.org/bot${tg.token}/sendMessage` // The url to request
            const obj = {
               chat_id: tg.chat_id, // Telegram chat id
               text: text // The text to send
            };
            await fetch(url, {
               method: "POST",
               headers: {
                  "Content-Type": "application/json"
               },
               body: JSON.stringify(obj)
            });
         }

         $.ajax({
            url: '/contact',
            type: 'post',
            data: $('.contact-form').serialize(),
            dataType: 'json',
            success: async function (_response) {
               debugger
               const res = await sendMessage('dd')
               var error = _response.error;
               var success = _response.success;
               if (error !== "" && error !== undefined) {

               } else {

               }
               window.location.href = '/contact'
            },
            error: function (jqXhr, json, errorThrown) {
               debugger

               var error = jqXhr.responseText;
               $('#alert').html(error);
            }
         });
      });
   });
});