<?php ob_start(); ?>

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
<?php $content = ob_get_clean(); ?>

<?php
if ($_POST) {

    $name   = \core\Clean::str($_POST['name']);
    $phone  = \core\Clean::str($_POST['phone']);
    $square = \core\Clean::int($_POST['square']);
    $city   = \core\Clean::str($_POST['city']);
    $option = \core\Clean::str($_POST['option']);

    http_response_code(200);
    header("Content-Type: application/json");
    $data = json_encode(['success' => $content]);
    exit($data);
}
?>