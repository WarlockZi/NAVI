<section class="main">

    <?php include CONSTANTS['header']; ?>

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
        <img src="../public/img/bg.jpg" alt="">
        <img src="../public/img/bg2.jpg" alt="" class="hidden">
        <img src="../public/img/bg3.jpg" alt="" class="hidden">
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
                    <img src="../public/img/about-us-2.jpg" alt="Интерьер">
                </div>
                <img src="../public/img/about-us-1.jpg" alt="Интерьер">
            </div>
            <div class="about-us__photo">
                <img src="../public/img/about-us-3.webp" alt="Интерьер">
                <div class="about-us__photo-row">
                    <img src="../public/img/about-us-4.jpg" alt="Интерьер">
                    <img src="../public/img/about-us-5.jpg" alt="Интерьер">
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
        <a href="/services" class="services__item">
            <div class="services__item-heading">
                <h3>Жилые <br>интерьеры</h3>
                <svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </div>
        </a>
        <a href="/services" class="services__item">
            <div class="services__item-heading">
                <h3>Коммерческие <br>интерьеры</h3>
                <svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </div>
        </a>
        <a href="/services" class="services__item">
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

            <?php
            $projects = CONSTANTS['getProject']();
            $i=0;
            foreach ($projects as $index=>$project) //                ($projects as $index => $project)
            {
                if ($i>3)continue;
                $data = CONSTANTS['projects'][$index];

                $img      = "/public/img/projects/{$index}/" . $projects[$index][0];
                $category = $data['category'];
                $area     = $data['area'];
                $title    = $data['title'];
                $filter = $data['filter'];
                include INC . '/portfolio-img.php';
                $i++;
            }
            ?>

        </div>


        <a href="/portfolio" class="more__portfolio">
            Посмотреть все проекты
            <?= CONSTANTS['arrow'] ?>
        </a>
    </div>
</section>

<?php include CONSTANTS['contact-block'] ?>
