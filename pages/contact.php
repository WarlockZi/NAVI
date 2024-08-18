<?php include CONSTANTS['header']; ?>

    <section class="contact-page">
        <div class="contact-page__wrappper">
            <div class="contact-page__info">
                <h1>Мы свяжемся с вами, ответим на вопросы и предоставим информацию о том, как помочь вам решить ваши
                    задачи</h1>
                <p>
                    Обсуждение проекта не обременяет вас обязательствами: мы представим себя, предложим варианты
                    воплощения ваших идей, а решение о сотрудничестве останется за вами.
                </p>

                <?php include CONSTANTS['contact-form']; ?>


            </div>


            <div class="contact-img"></div>

        </div>
    </section>


<?php
if ($_POST) {
    new \service\Telegram($_POST);

    $content = "<h1>ff</h1>";
    http_response_code(200);
    header("Content-Type: application/json");
    $data = json_encode(['success' => $content]);
    exit($data);
}
?>