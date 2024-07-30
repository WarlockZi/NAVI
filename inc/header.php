<div class="top"></div>
<header>
    <div class="container">
        <div class="header">
            <a href="/index.php">
                <img src="/img/logo-mainThin.svg" alt="Нави" class="logo">
            </a>
            <div class="hamb">
                <div class="hamb__field" id="hamb">
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
            <nav id="menu">
                <ul>
                    <li style="animation-delay: 0s;"><a href="/index.php">Главная</a></li>
                    <li style="animation-delay: 0.15s;"><a href="/portfolio.php">Портфолио</a></li>
                    <li style="animation-delay: 0.25s;"><a href="/services.php">Услуги</a></li>
                    <li style="animation-delay: 0.35s;"><a href="/about.php">О студии</a></li>
                    <li style="animation-delay: 0.45s;"><a href="/contact.php">Контакты</a></li>
                    <li style="animation-delay: 0.55s;"><a href="tel:<?= $constants['tel'] ?>"
                                                           class="header-tel"><?= $constants['telephone'] ?></a>
                    </li>
                    <li style="animation-delay: 0.65s;">
                        <div class="social">
                            <a href="<?= $constants['telgramm'] ?>" target="_blank">
                                <img src="/img/icons/telegram.svg">
                            </a>
                            <a href="<?= $constants['vk'] ?>" target="_blank">
                                <img src="/img/icons/vk.svg">
                            </a>
                            <a href="<?= $constants['watsapp'] ?>" target="_blank">
                                <img src="/img/icons/watsapp.svg">
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="popup-menu" id="popup-menu">
    </div>
</header>
