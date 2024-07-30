<?php include './constants.php' ?>
<!DOCTYPE html>
<html lang="ru">

<? include './inc/head.php' ?>

<body>

<? include './inc/header.php'; ?>

<section class="contact-page">
    <div class="contact-page__wrappper">
        <div class="contact-page__info">
            <h1>Мы свяжемся с вами, ответим на вопросы и предоставим информацию о том, как помочь вам решить ваши
                задачи</h1>
            <p>
                Обсуждение проекта не обременяет вас обязательствами: мы представим себя, предложим варианты
                воплощения ваших идей, а решение о сотрудничестве останется за вами.
            </p>
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
        <div class="contact-img">

        </div>

    </div>
</section>


<?php include './inc/footer.php' ?>

</body>

</html>