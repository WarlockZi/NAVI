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

            <?php $projects = CONSTANTS['getProject']();
            //            $projectsImgs = CONSTANTS['getProjectImages']($route->id);

//            include ROOT . '/process.php';
            foreach ($projects as $index => $project) {
                $data = CONSTANTS['projects'][$index];

                $img      = "/public/img/projects/{$index}/" . $projects[$index][0];
                $category = $data['category'];
                $area     = $data['area'];
                $title    = $data['title'];
                include ROOT . '/pages/portfolio/portfolio-img.php';
            }
            ?>


            <a href="portfolio/project/index.html@id=31.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(../public/img/projects/30/prefix_664213aeb21e79.40205653.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>69 м<sup>2</sup></span>
                </div>
                <h5>Апартаменты </h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=23.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(../public/img/projects/21/prefix_663b1d754354a2.02517305.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>240 м<sup>2</sup></span>
                </div>
                <h5>Дом в охотугодьях</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=24.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(../public/img/projects/222/prefix_663b1f851aab27.45661609.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>82 м<sup>2</sup></span>
                </div>
                <h5>Элегантная квартира с нотками изысканности</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=25.html" class="portfolio__item js-filterable"
               data-category="land"
               style="background-image: url(../public/img/projects/8/prefix_663b231a8270d0.61914394.jpg);">
                <div class="portfolio__label">
                    <span>Ландшафтный дизайн</span>
                    <span>5000 м<sup>2</sup></span>
                </div>
                <h5>Дивный сад</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=26.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(../public/img/projects/222/prefix_663b249c9f5325.23437613.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>64 м<sup>2</sup></span>
                </div>
                <h5>Квартира в современном стиле</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=27.html" class="portfolio__item js-filterable"
               data-category="commerce"
               style="background-image: url(../public/img/projects/20/prefix_663b25925aea85.06719067.jpg);">
                <div class="portfolio__label">
                    <span>Коммерческие интерьеры</span>
                    <span>96 м<sup>2</sup></span>
                </div>
                <h5>Магазин фермерских продуктов</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=28.html" class="portfolio__item js-filterable"
               data-category="arch"
               style="background-image: url(../public/img/projects/10/prefix_663b2750365b64.18909952.jpg);">
                <div class="portfolio__label">
                    <span>Архитектурное проектирование</span>
                    <span>2000 м<sup>2</sup></span>
                </div>
                <h5>Семейный комплекс отдыха</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=30.html" class="portfolio__item js-filterable"
               data-category="arch"
               style="background-image: url(../public/img/projects/11/prefix_663b2874ea8785.16861508.jpg);">
                <div class="portfolio__label">
                    <span>Архитектурное проектирование</span>
                    <span>1500 м<sup>2</sup></span>
                </div>
                <h5>Небольшая база отдыха на берегу реки</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=3.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(../public/img/projects/233/projects-3-1.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>480 м<sup>2</sup></span>
                </div>
                <h5>Дом для молодой семьи</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=4.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(../public/img/projects/334/projects-4-1.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>560 м<sup>2</sup></span>
                </div>
                <h5>Частный дом в Санкт-Петербурге</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=17.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(../public/img/projects/4/1710599940-2799840196.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>78 м<sup>2</sup></span>
                </div>
                <h5>Бильярдная в частном доме</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=16.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(../public/img/projects/222/prefix_663b217b697de0.24989667.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>112 м<sup>2</sup></span>
                </div>
                <h5>Квартира для счастливой семьи</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=19.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(../public/img/projects/4/1710604246-2577373942.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>62 м<sup>2</sup></span>
                </div>
                <h5>Квартира в Санкт- Петербурге</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=18.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(../public/img/projects/4/1710603923-9810598715.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>49 м<sup>2</sup></span>
                </div>
                <h5>Квартира для молодого мужчины</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=2.html" class="portfolio__item js-filterable"
               data-category="commerce"
               style="background-image: url(../public/img/projects/224/projects-2-1.jpg);">
                <div class="portfolio__label">
                    <span>Коммерческие интерьеры</span>
                    <span>420 м<sup>2</sup></span>
                </div>
                <h5>SPA-салон</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=6.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(../public/img/projects/336/projects-6-1.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>82 м<sup>2</sup></span>
                </div>
                <h5>Элегантная квартира с нотками роскоши</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=22.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(../public/img/projects/222/prefix_65f9773f4c0848.95880712.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>52 м<sup>2</sup></span>
                </div>
                <h5>Квартира в Москве</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=5.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(../public/img/projects/335/projects-5-1.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>30 м<sup>2</sup></span>
                </div>
                <h5>Студия в Санкт-Петербурге</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=1.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(../public/img/projects/223/projects-1-1.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>140 м<sup>2</sup></span>
                </div>
                <h5>Родительский дом рядом с мегаполисом</h5>
                <div class="portfolio__shadow"></div>
            </a>
            <a href="portfolio/project/index.html@id=7.html" class="portfolio__item js-filterable"
               data-category="life"
               style="background-image: url(../public/img/projects/337/projects-7-1.jpg);">
                <div class="portfolio__label">
                    <span>Жилые интерьеры</span>
                    <span>65 м<sup>2</sup></span>
                </div>
                <h5>Гостевая квартира. Комфорт временного размещения</h5>
                <div class="portfolio__shadow"></div>
            </a>
        </div>
    </div>
</section>

<?php include CONSTANTS['contact-block'] ?>
