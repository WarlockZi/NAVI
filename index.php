<?php include './constants.php' ?>

<!DOCTYPE html>
<html lang="ru">

<? include './inc/head.php' ?>

<body>

<section class="main">

    <? include './inc/header.php'; ?>

    <div class="main__wrap">
        <div class="container" style="height: 100%;">
            <div class="main__wrapper">
                <h1><span>Дизайн интерьера </span> жилых и коммерческих пространств <span>от студии NAVI</span></h1>
                <p>Создаем современные интерьеры, <br>в которых комфортно жить и работать</p>
            </div>
        </div>
    </div>
    <div class="gray"></div>
    <div class="main__imgs">
        <img src="img/bg.jpg" alt="">
        <img src="img/bg2.jpg" alt="" class="hidden">
        <img src="img/bg3.jpg" alt="" class="hidden">
    </div>


    <svg xmlns="http://www.w3.org/2000/svg" width="694" height="256" viewBox="0 0 694 256" class="triangle">
        <defs>
            <style>
                .cls-1 {
                    fill: #171717;
                    fill-rule: evenodd;
                }
            </style>
        </defs>
        <path id="Прямоугольник_2" data-name="Прямоугольник 2" class="cls-1" d="M694,0V256H0Z"/>
    </svg>
</section>

<section class="about-us">
    <div class="container">
        <div class="about-us__wrapper">
            <div class="about-us__info">
                <div class="about-us__info-row">
                    <div class="about-us__info-col">
                        <h2 class="section-title">О студии</h2>
                        <p>
                            Занимаемся проектированием жилых и общественных помещений, а также ландшафтным дизайном с
                            2021года
                            ✅ Грамотно проработаем зонирование
                        </p>

                        <p>
                            ✅Проекты разработаны профессиональными дизайнерами
                            с архитектурным образованием и опытом
                        </p>

                        <p>
                            ✅Подберем подходящие планировки под ваш образ жизни и состав семьи
                        </p>

                        <p>
                            ✅Проведем авторский надзор, реализация дизайн-проекта до мельчайших деталей
                        </p>

                        ✅Поможем с материалом, подберем материалы в соответствии с дизайн-проектом
                        </p>
                        <div class="about-us__info-items">
                            <div class="info-item">
                                <span>3</span>
                                <p>года на рынке</p>
                            </div>
                            <div class="info-item">
                                <span>12</span>
                                <p>проектов в год</p>
                            </div>
                        </div>
                    </div>
                    <img src="img/about-us-2.jpg" alt="Интерьер">
                </div>
                <img src="img/about-us-1.jpg" alt="Интерьер">
            </div>
            <div class="about-us__photo">
                <img src="img/about-us-3.webp" alt="Интерьер">
                <div class="about-us__photo-row">
                    <img src="img/about-us-4.jpg" alt="Интерьер">
                    <img src="img/about-us-5.jpg" alt="Интерьер">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services">
    <div class="container">
        <h2 class="section-title">Наши услуги</h2>
    </div>
    <div class="services__wrapper">
        <a href="services.php" class="services__item">
            <div class="services__item-heading">
                <h3>Жилые <br>интерьеры</h3>
                <svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </div>
        </a>
        <a href="services.php" class="services__item">
            <div class="services__item-heading">
                <h3>Коммерческие <br>интерьеры</h3>
                <svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </div>
        </a>
        <a href="services.php" class="services__item">
            <div class="services__item-heading">
                <h3>Архитектурное <br>проектирование</h3>
                <svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </div>
        </a>
    </div>
    <div class="container">
        <div class="services__second">
            <div class="services__second-item">
                <h4>Полный дизайн проект</h4>
                <div class="services__second-price">
                    от <span>7 500</span> за м<sup>2</sup>
                </div>
            </div>
            <div class="services__second-item">
                <h4>Проект Эскиз-идея</h4>
                <div class="services__second-price">
                    от <span>4 500</span> за м<sup>2</sup>
                </div>
            </div>
            <div class="services__second-item">
                <h4>Архитектурное проектирование</h4>
                <div class="services__second-price">
                    от <span>1 000</span> за м<sup>2</sup>
                </div>
            </div>
            <div class="services__second-item">
                <h4>Ландшафтный дизайн</h4>
                <div class="services__second-price">
                    от <span>20 000</span> руб/сотка
                </div>
            </div>
        </div>
    </div>
</section>
<section class="portfolio">
    <div class="container">
        <div class="portfolio__heading">
            <h2 class="section-title">Наше портфолио</h2>
            <span>Найдите вдохновение среди наших проектов</span>
        </div>
        <div class="portfolio__wrapper">
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
        </div>
        <a href="portfolio.php" class="more__portfolio">
            Посмотреть все проекты
            <svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#ffdfbd" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round"/>
            </svg>
        </a>
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