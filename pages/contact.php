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
    $token  = CONSTANTS['TELEGRAM_TOKEN'];
    $NatashaId = 6243120828;
    $VitaliyId = CONSTANTS['TELEGRAM_CHATID'];


    $name   = \core\Clean::str($_POST['name']);
    $phone  = \core\Clean::str($_POST['phone']);
    $square = \core\Clean::int($_POST['square']);
    $city   = \core\Clean::str($_POST['city']);
    $option = \core\Clean::str($_POST['option']);
    $newLine = "%0A";
    $text   =
        "Наталиша, возьмешь еще заказ?$newLine" .
        "Имя - $name$newLine" .
        "тел - $phone$newLine" .
        "площадь - $square$newLine" .
        "город - $city$newLine" .
        "тип - $option$newLine";

    $url = "https://api.telegram.org/bot$token/sendMessage?&chat_id=$VitaliyId&text=$text";

    header("Location:" . $url);
    exit('success');
//    new \service\Telegram($_POST);
//    $content = "<h1>ff</h1>";
//    http_response_code(200);
//    header("Content-Type: application/json");
//    $data = json_encode(['success' => $content]);
//    exit($data);
}
?>