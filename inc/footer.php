<footer>
    <div class="container">
        <div class="footer">
            <div class="footer__main">
                <div class="footer__main-center">
                    <ul>
                        <li><a href="/">Главная</a></li>
                        <li><a href="/portfolio">Портфолио</a></li>
                        <li><a href="/services">Услуги</a></li>
                        <li><a href="/about">О студии</a></li>
                        <li><a href="/contact">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer__main-left">
                    <img src="<?= CONSTANTS['logo'] ?>" alt="NAVI" class="logo">
                    <span>Дизайн интерьера <br>и архитектурное проектирование</span>
                </div>
                <div class="footer__main-right">
                    <a href="tel:<?=CONSTANTS['tel']?>"><?=CONSTANTS['telephone']?></a>
                    <span><?=CONSTANTS['city']?></span>
                    <span><?=CONSTANTS['address']?></span>
                    <div class="social">
                        <div style="animation-delay: 0.65s;">
                            <div class="social">
                                <?include INC.'/telegram.php'?>
                                <?include INC.'/vk.php'?>
                                <?include INC.'/watsapp.php'?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <span>© 2021-2024, NAVI</span>
                <a href="/privacy">Политика конфиденциальности</a>
                <a href="https://vitexopt.ru">
                    VORONIKLAB
                    <img src="<?= CONSTANTS['avatar'];?>" class="avatar">
                </a>
            </div>
        </div>
    </div>

</footer>
<script src="<?=CONSTANTS['js'][0];?>"></script>
<script src="<?=CONSTANTS['js'][1];?>"></script>
<script async src="<?=CONSTANTS['js'][2];?>"></script>
<script type="module" src="<?=CONSTANTS['js'][3];?>"></script>
