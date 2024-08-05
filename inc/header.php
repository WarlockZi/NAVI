<div class="top"></div>
<header>
    <div class="container">
        <div class="header">
            <a href="/">
                <img src="<?= CONSTANTS['logo'] ?>" alt="Нави" class="logo">
            </a>
            <div class="hamb">
                <div class="hamb__field" id="hamb">
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
            <nav id="menu">
                <ul>
                    <li style="animation-delay: 0s;"><a href="/">Главная</a></li>
                    <li style="animation-delay: 0.15s;"><a href="/portfolio">Портфолио</a></li>
                    <li style="animation-delay: 0.25s;"><a href="/services">Услуги</a></li>
                    <li style="animation-delay: 0.35s;"><a href="/about">О студии</a></li>
                    <li style="animation-delay: 0.45s;"><a href="/contact">Контакты</a></li>
                    <li style="animation-delay: 0.55s;"><a href="tel:<?= CONSTANTS['tel'] ?>"
                                                           class="header-tel"><?= CONSTANTS['telephone'] ?></a>
                    </li>
                    <li style="animation-delay: 0.65s;">
                        <div class="social">
                            <a href="<?= CONSTANTS['telgramm'] ?>" target="_blank">
                                <img src="/public/img/icons/telegram.svg">
                            </a>
                            <a href="<?= CONSTANTS['vk'] ?>" target="_blank">
                                <img src="/public/img/icons/vk.svg">
                            </a>
                            <a href="<?= CONSTANTS['watsapp'] ?>" target="_blank">
                                <img src="/public/img/icons/watsapp.svg">
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
