<?php include './constants.php' ?>
<!DOCTYPE html>
<html lang="ru">

<? include './inc/head.php' ?>

<body class="page-porfolio">

<section class="main">

    <? include './inc/header.php'; ?>


    <div class="main__wrap">
        <div class="container" style="height: 100%;">
            <div class="main__wrapper">
                <h1>Портфолио</h1>
                <div class="portfolio-category">
                    <button class="js-filter" data-category="life">Жилые интерьеры</button>
                    <button class="js-filter" data-category="commerce">Коммерческие интерьеры</button>
                    <button class="js-filter" data-category="arch">Архитектурное проектирование</button>
                    <button class="js-filter" data-category="land">Ландшафтный дизайн</button>
                </div>
            </div>
        </div>
    </div>
    <div class="gray"></div>
    <div class="main__imgs">
        <img src="img/bg1.jpg" alt="">
        <img src="img/bg2.jpg" alt="" class="hidden">
        <img src="img/bg3.jpg" alt="" class="hidden">
    </div>

</section>

<section class="portfolio">
    <div class="container">
        <div class="select-category">
            <bottom class="select-category__btn">
                <span class="select-category__btn-text">Выбрать категорию</span>
                <svg width="22" height="22" viewBox="0 0 24 24" class="select-category__arrow" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 9L12 15L18 9" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </bottom>
            <div class="category-items">
                <bottom class="category-items__btn js-filter" data-category="life">Жилые интерьеры</bottom>
                <bottom class="category-items__btn js-filter" data-category="commerce">Коммерческие интерьеры
                </bottom>
                <bottom class="category-items__btn js-filter" data-category="arch">Архитектурное проектирование
                </bottom>
            </div>
        </div>
        <div class="portfolio__wrapper" style="padding-top: 60px; padding-bottom: 60px;">

            <a href="portfolio/project/index.html@id=31.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(img/projects/prefix_664213aeb21e79.40205653.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>69 м<sup>2</sup></span>
                </div>
                <h5>Апартаменты </h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=23.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(img/projects/prefix_663b1d754354a2.02517305.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>240 м<sup>2</sup></span>
                </div>
                <h5>Дом в охотугодьях</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=24.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(img/projects/prefix_663b1f851aab27.45661609.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>82 м<sup>2</sup></span>
                </div>
                <h5>Элегантная квартира с нотками изысканности</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=25.html" class="portfolio__item js-filterable"
               data-category="land"
               style="background-image: url(img/projects/prefix_663b231a8270d0.61914394.jpg);">
                <div class="portfolio__label">
                    <span>Ландшафтный дизайн</span>
                    <span>5000 м<sup>2</sup></span>
                </div>
                <h5>Дивный сад</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=26.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(img/projects/prefix_663b249c9f5325.23437613.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>64 м<sup>2</sup></span>
                </div>
                <h5>Квартира в современном стиле</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=27.html" class="portfolio__item js-filterable"
               data-category="commerce"
               style="background-image: url(img/projects/prefix_663b25925aea85.06719067.jpg);">
                <div class="portfolio__label">
                    <span>Коммерческие интерьеры</span>
                    <span>96 м<sup>2</sup></span>
                </div>
                <h5>Магазин фермерских продуктов</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=28.html" class="portfolio__item js-filterable"
               data-category="arch"
               style="background-image: url(img/projects/prefix_663b2750365b64.18909952.jpg);">
                <div class="portfolio__label">
                    <span>Архитектурное проектирование</span>
                    <span>2000 м<sup>2</sup></span>
                </div>
                <h5>Семейный комплекс отдыха</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=30.html" class="portfolio__item js-filterable"
               data-category="arch"
               style="background-image: url(img/projects/prefix_663b2874ea8785.16861508.jpg);">
                <div class="portfolio__label">
                    <span>Архитектурное проектирование</span>
                    <span>1500 м<sup>2</sup></span>
                </div>
                <h5>Небольшая база отдыха на берегу реки</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=3.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(img/projects/projects-3-1.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>480 м<sup>2</sup></span>
                </div>
                <h5>Дом для молодой семьи</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=4.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(img/projects/projects-4-1.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>560 м<sup>2</sup></span>
                </div>
                <h5>Частный дом в Санкт-Петербурге</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=17.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(img/projects/1710599940-2799840196.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>78 м<sup>2</sup></span>
                </div>
                <h5>Бильярдная в частном доме</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=16.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(img/projects/prefix_663b217b697de0.24989667.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>112 м<sup>2</sup></span>
                </div>
                <h5>Квартира для счастливой семьи</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=19.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(img/projects/1710604246-2577373942.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>62 м<sup>2</sup></span>
                </div>
                <h5>Квартира в Санкт- Петербурге</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=18.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(img/projects/1710603923-9810598715.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>49 м<sup>2</sup></span>
                </div>
                <h5>Квартира для молодого мужчины</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=2.html" class="portfolio__item js-filterable"
               data-category="commerce"
               style="background-image: url(img/projects/projects-2-1.jpg);">
                <div class="portfolio__label">
                    <span>Коммерческие интерьеры</span>
                    <span>420 м<sup>2</sup></span>
                </div>
                <h5>SPA-салон</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=6.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(img/projects/projects-6-1.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>82 м<sup>2</sup></span>
                </div>
                <h5>Элегантная квартира с нотками роскоши</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=22.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(img/projects/prefix_65f9773f4c0848.95880712.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>52 м<sup>2</sup></span>
                </div>
                <h5>Квартира в Москве</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=5.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(img/projects/projects-5-1.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>30 м<sup>2</sup></span>
                </div>
                <h5>Студия в Санкт-Петербурге</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=1.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(img/projects/projects-1-1.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>140 м<sup>2</sup></span>
                </div>
                <h5>Родительский дом рядом с мегаполисом</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=7.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(img/projects/projects-7-1.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>65 м<sup>2</sup></span>
                </div>
                <h5>Гостевая квартира. Комфорт временного размещения</h5>
                <div class="portfolio__shadow"></div>
            </a>
        </div>
    </div>
</section>
<section class="contact">
    <div class="container">
        <div class="contact__wrapper">
            <div class="contact__text">
                <h5>Расскажем о возможностях реализации вашего проекта в актуальных условиях</h5>
                <div class="contact__text-items">
                    <div class="contact__text-item">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#ffdfbd" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>каких производителей и фабрики использовать</span>
                    </div>
                    <div class="contact__text-item">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#ffdfbd" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>консультация по организации ремонта и воплощению интерьера</span>
                    </div>
                    <div class="contact__text-item">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#ffdfbd" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>какой бюджет реализации премиального интерьера сейчас</span>
                    </div>
                    <div class="contact__text-item">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#ffdfbd" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>рекомендации по вашему планировочному решению</span>
                    </div>
                </div>
            </div>
            <div class="contact__us">
                <form class="contact-form">
                    <div class="contact-form__row">
                        <input type="text" name="name" id="name" placeholder="Ваше имя" required>
                        <input type="tel" name="phone" id="phone" placeholder="+7 (999) 999-99-99" required>
                    </div>
                    <div class="contact-form__row">
                        <input type="text" name="square" id="square" placeholder="Площадь">
                        <input type="text" name="city" id="city" placeholder="Город">
                    </div>
                    <div class="contact-form__radio">
                        <input type="radio" id="1" value="Жилые интерьеры" name="option">
                        <label for="1">Жилой <br>интерьер</label>
                        <input type="radio" id="2" value="Коммерческие интерьеры" name="option">
                        <label for="2">Коммерческий <br>интерьер</label>
                        <input type="radio" id="3" value="Архитектурное проектирование" name="option">
                        <label for="3">Архитектурное <br>проектирование</label>
                        <input type="radio" id="4" value="Ландшафтный дизайн" name="option">
                        <label for="4">Ландшафтный <br>дизайн</label>
                    </div>
                    <div id="alert"></div>
                    <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                    <button type="submit">Отправить</button>
                </form>
                <span>Нажимая кнопку, вы автоматически соглашаетесь
                        с <a href="privacy.php">политикой конфиденциальности</a></span>
            </div>
        </div>
    </div>
</section>

<?php include './inc/footer.php' ?>
</body>

</html>