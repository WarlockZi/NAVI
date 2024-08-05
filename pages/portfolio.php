<body page-porfolio>

<section class="main">

    <?php include CONSTANTS['header']; ?>

    <div class="main__wrap">
        <div class="container" style="height: 100%;">
            <div class="main__wrapper">
                <h1>Портфолио</h1>
                <div class="portfolio-category">
                    <button class="js-filter" data-category="life">Жилые интерьеры</button>
                    <button class="js-filter" data-category="commerce">Коммерческие интерьеры</button>
                    <button class="js-filter" data-category="arch">Архитектурное проектирование</button>
                    <button class="js-filter" data-category="land">Ландшафтный дизайн</button>
                </div>
            </div>
        </div>
    </div>
    <div class="gray"></div>
    <div class="main__imgs">
        <img src="/public/img/bg1.jpg" alt="">
        <img src="/public/img/bg2.jpg" alt="" class="hidden">
        <img src="/public/img/bg3.jpg" alt="" class="hidden">
    </div>

</section>

<section class="portfolio">
    <div class="container">
        <div class="select-category">
            <bottom class="select-category__btn">
                <span class="select-category__btn-text">Выбрать категорию</span>
                <?= CONSTANTS['chevron']; ?>
            </bottom>
            <div class="category-items">
                <bottom class="category-items__btn js-filter" data-category="life">Жилые интерьеры</bottom>
                <bottom class="category-items__btn js-filter" data-category="commerce">Коммерческие интерьеры
                </bottom>
                <bottom class="category-items__btn js-filter" data-category="arch">Архитектурное проектирование
                </bottom>
            </div>
        </div>

        <div class="portfolio__wrapper" style="padding-top: 60px; padding-bottom: 60px;">

            <?php
            $projects = CONSTANTS['getProject']();
            foreach ($projects as $index => $project) {
                $data = CONSTANTS['projects'][$index];

                $img      = "/public/img/projects/{$index}/" . $projects[$index][0];
                $category = $data['category'];
                $area     = $data['area'];
                $title    = $data['title'];
                $filter    = $data['filter'];
                include INC . '/portfolio-img.php';
            }
            ?>


        </div>
    </div>
</section>

<?php include CONSTANTS['contact-block'] ?>
