<?php include './constants.php' ?>
<!DOCTYPE html>
<html lang="ru">

<? include './inc/head.php' ?>

<body>

<section class="services-page">

    <? include './inc/header.php'; ?>

    <div class="container">
        <div class="services-page__wrappper">
            <h1>Услуги, которые мы предоставляем</h1>
        </div>
    </div>
    <div class="gray"></div>

</section>

<section class="services">
    <div class="container">
        <div class="service__wrapper">
            <div class="service__item">
                <h2>Дизайн интерьера и архитектурное проектирование</h2>
                <p>Уникальные архитектурные решения и дизайн интерьера, в которых объединены наше видение и
                    профессиональный опыт с представлением и желаниями заказчика.</p>
            </div>
            <div class="service__item">
                <h2>Разработка рабочей документации</h2>
                <p>Планировки с расстановкой мебели, дизайн и визуализация, чертежи, спецификация мебели и
                    материалов с указанием количества всех позиций, смета.</p>
            </div>
            <div class="service__item">
                <h2>Комплектация проекта</h2>
                <p>Подбор отделочных материалов, инженерного наполнения, техники, мебели, освещения и декора.</p>
            </div>
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