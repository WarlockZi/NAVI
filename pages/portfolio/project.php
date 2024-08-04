<!DOCTYPE html>
<html lang="ru">

<? include CONSTANTS['head'] ?>


<body>

<?php
$id = $route->id;
$projects      = CONSTANTS['getProject']();
$projectImages = CONSTANTS['getProjectImages']($id);

$img = '/public/img/projects/'.  $id.'/'. $projectImages[0];

$data     = CONSTANTS['projects'][$id];
$type     = $data['type'];
$h1       = $data['h1'];
$category = $data['category'];
$area     = $data['area'];
$title    = $data['title'];
//include ROOT . '/pages/portfolio/portfolio-img.php'; ?>

<!--<section class="project-page" style="background-image: url(/public/img/projects/10/prefix_663b27502bc113.27133745.jpg);">-->
<section class="project-page" style="background-image: url(<?= $img ?>);">

    <? include CONSTANTS['header']; ?>


    <div class="container">
        <div class="project-page__wrappper">

            <h1><?= $h1; ?></h1>
            <div class="project-page__info">
                <span>Тип объекта: <?= $type; ?></span>
                <span>Площадь: <?= $area; ?> м<sup>2</sup></span>
            </div>
        </div>
    </div>
    <div class="gray"></div>
</section>

<section class="project">
    <div class="container">
        <div class="project__wrapper" id="gallery">


            <?
            foreach ($projectImages as $image) {
                $img = '/public/img/projects/' . $id . '/' . $image;
                include ROOT . '/inc/project-images.php';
            }
            ?>


        </div>
</section>

<section class="project-more">
    <div class="container">
        <div class="glide">
            <div class="project-more__heading">
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                        <svg width="27" height="27" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="black" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                        <svg width="27" height="27" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="black" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <h2>Другие проекты</h2>
            </div>
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide">
                        <a href="../../public/index.php" class="portfolio__item"
                           style="background-image: url(../../img/projects/projects-1-1.jpg);">
                            <div class="portfolio__label">
                                <span>Жилые интерьеры</span>
                                <span>140 м<sup>2</sup></span>
                            </div>
                            <h5>Родительский дом рядом с мегаполисом</h5>
                            <div class="portfolio__shadow"></div>
                        </a>
                    </li>
                    <li class="glide__slide">
                        <a href="../../public/index.php" class="portfolio__item"
                           style="background-image: url(../../img/projects/projects-2-1.jpg);">
                            <div class="portfolio__label">
                                <span>Коммерческие интерьеры</span>
                                <span>420 м<sup>2</sup></span>
                            </div>
                            <h5>SPA-салон</h5>
                            <div class="portfolio__shadow"></div>
                        </a>
                    </li>
                    <li class="glide__slide">
                        <a href="../../public/index.php" class="portfolio__item"
                           style="background-image: url(../../img/projects/projects-3-1.jpg);">
                            <div class="portfolio__label">
                                <span>Жилые интерьеры</span>
                                <span>480 м<sup>2</sup></span>
                            </div>
                            <h5>Дом для молодой семьи</h5>
                            <div class="portfolio__shadow"></div>
                        </a>
                    </li>
                    <li class="glide__slide">
                        <a href="../../public/index.php" class="portfolio__item"
                           style="background-image: url(../../img/projects/projects-4-1.jpg);">
                            <div class="portfolio__label">
                                <span>Жилые интерьеры</span>
                                <span>560 м<sup>2</sup></span>
                            </div>
                            <h5>Частный дом в Санкт-Петербурге</h5>
                            <div class="portfolio__shadow"></div>
                        </a>
                    </li>
                    <li class="glide__slide">
                        <a href="../../public/index.php" class="portfolio__item"
                           style="background-image: url(../../img/projects/projects-5-1.jpg);">
                            <div class="portfolio__label">
                                <span>Жилые интерьеры</span>
                                <span>30 м<sup>2</sup></span>
                            </div>
                            <h5>Студия в Санкт-Петербурге</h5>
                            <div class="portfolio__shadow"></div>
                        </a>
                    </li>
                    <li class="glide__slide">
                        <a href="../../public/index.php" class="portfolio__item"
                           style="background-image: url(../../img/projects/projects-6-1.jpg);">
                            <div class="portfolio__label">
                                <span>Жилые интерьеры</span>
                                <span>82 м<sup>2</sup></span>
                            </div>
                            <h5>Элегантная квартира с нотками роскоши</h5>
                            <div class="portfolio__shadow"></div>
                        </a>
                    </li>
                    <li class="glide__slide">
                        <a href="../../public/index.php" class="portfolio__item"
                           style="background-image: url(../../img/projects/projects-7-1.jpg);">
                            <div class="portfolio__label">
                                <span>Жилые интерьеры</span>
                                <span>65 м<sup>2</sup></span>
                            </div>
                            <h5>Гостевая квартира. Комфорт временного размещения</h5>
                            <div class="portfolio__shadow"></div>
                        </a>
                    </li>
                    <li class="glide__slide">
                        <a href="../../public/index.php" class="portfolio__item"
                           style="background-image: url(../../img/projects/prefix_663b217b697de0.24989667.jpg);">
                            <div class="portfolio__label">
                                <span>Жилые интерьеры</span>
                                <span>112 м<sup>2</sup></span>
                            </div>
                            <h5>Квартира для счастливой семьи</h5>
                            <div class="portfolio__shadow"></div>
                        </a>
                    </li>
                    <li class="glide__slide">
                        <a href="../../public/index.php" class="portfolio__item"
                           style="background-image: url(../../img/projects/1710599940-2799840196.jpg);">
                            <div class="portfolio__label">
                                <span>Жилые интерьеры</span>
                                <span>78 м<sup>2</sup></span>
                            </div>
                            <h5>Бильярдная в частном доме</h5>
                            <div class="portfolio__shadow"></div>
                        </a>
                    </li>
                    <li class="glide__slide">
                        <a href="../../public/index.php" class="portfolio__item"
                           style="background-image: url(../../img/projects/1710603923-9810598715.jpg);">
                            <div class="portfolio__label">
                                <span>Жилые интерьеры</span>
                                <span>49 м<sup>2</sup></span>
                            </div>
                            <h5>Квартира для молодого мужчины</h5>
                            <div class="portfolio__shadow"></div>
                        </a>
                    </li>
                    <li class="glide__slide">
                        <a href="../../public/index.php" class="portfolio__item"
                           style="background-image: url(../../img/projects/1710604246-2577373942.jpg);">
                            <div class="portfolio__label">
                                <span>Жилые интерьеры</span>
                                <span>62 м<sup>2</sup></span>
                            </div>
                            <h5>Квартира в Санкт- Петербурге</h5>
                            <div class="portfolio__shadow"></div>
                        </a>
                    </li>
                    <li class="glide__slide">
                        <a href="../../public/index.php" class="portfolio__item"
                           style="background-image: url(../../img/projects/prefix_65f9773f4c0848.95880712.jpg);">
                            <div class="portfolio__label">
                                <span>Жилые интерьеры</span>
                                <span>52 м<sup>2</sup></span>
                            </div>
                            <h5>Квартира в Москве</h5>
                            <div class="portfolio__shadow"></div>
                        </a>
                    </li>
                    <li class="glide__slide">
                        <a href="../../public/index.php" class="portfolio__item"
                           style="background-image: url(../../img/projects/prefix_663b1d754354a2.02517305.jpg);">
                            <div class="portfolio__label">
                                <span>Жилые интерьеры</span>
                                <span>240 м<sup>2</sup></span>
                            </div>
                            <h5>Дом в охотугодьях</h5>
                            <div class="portfolio__shadow"></div>
                        </a>
                    </li>
                    <li class="glide__slide">
                        <a href="../../public/index.php" class="portfolio__item"
                           style="background-image: url(../../img/projects/prefix_663b1f851aab27.45661609.jpg);">
                            <div class="portfolio__label">
                                <span>Жилые интерьеры</span>
                                <span>82 м<sup>2</sup></span>
                            </div>
                            <h5>Элегантная квартира с нотками изысканности</h5>
                            <div class="portfolio__shadow"></div>
                        </a>
                    </li>
                    <li class="glide__slide">
                        <a href="../../public/index.php" class="portfolio__item"
                           style="background-image: url(../../img/projects/prefix_663b231a8270d0.61914394.jpg);">
                            <div class="portfolio__label">
                                <span>Ландшафтный дизайн</span>
                                <span>5000 м<sup>2</sup></span>
                            </div>
                            <h5>Дивный сад</h5>
                            <div class="portfolio__shadow"></div>
                        </a>
                    </li>
                    <li class="glide__slide">
                        <a href="../../public/index.php" class="portfolio__item"
                           style="background-image: url(../../img/projects/prefix_663b249c9f5325.23437613.jpg);">
                            <div class="portfolio__label">
                                <span>Жилые интерьеры</span>
                                <span>64 м<sup>2</sup></span>
                            </div>
                            <h5>Квартира в современном стиле</h5>
                            <div class="portfolio__shadow"></div>
                        </a>
                    </li>
                    <li class="glide__slide">
                        <a href="../../public/index.php" class="portfolio__item"
                           style="background-image: url(../../img/projects/prefix_663b25925aea85.06719067.jpg);">
                            <div class="portfolio__label">
                                <span>Коммерческие интерьеры</span>
                                <span>96 м<sup>2</sup></span>
                            </div>
                            <h5>Магазин фермерских продуктов</h5>
                            <div class="portfolio__shadow"></div>
                        </a>
                    </li>
                    <li class="glide__slide">
                        <a href="../../public/index.php" class="portfolio__item"
                           style="background-image: url(../../img/projects/prefix_663b2750365b64.18909952.jpg);">
                            <div class="portfolio__label">
                                <span>Архитектурное проектирование</span>
                                <span>2000 м<sup>2</sup></span>
                            </div>
                            <h5>Семейный комплекс отдыха</h5>
                            <div class="portfolio__shadow"></div>
                        </a>
                    </li>
                    <li class="glide__slide">
                        <a href="../../public/index.php" class="portfolio__item"
                           style="background-image: url(../../img/projects/prefix_663b282ac19c87.85525779.jpg);">
                            <div class="portfolio__label">
                                <span>Жилые интерьеры</span>
                                <span>0 м<sup>2</sup></span>
                            </div>
                            <h5></h5>
                            <div class="portfolio__shadow"></div>
                        </a>
                    </li>
                    <li class="glide__slide">
                        <a href="../../public/index.php" class="portfolio__item"
                           style="background-image: url(../../img/projects/prefix_663b2874ea8785.16861508.jpg);">
                            <div class="portfolio__label">
                                <span>Архитектурное проектирование</span>
                                <span>1500 м<sup>2</sup></span>
                            </div>
                            <h5>Небольшая база отдыха на берегу реки</h5>
                            <div class="portfolio__shadow"></div>
                        </a>
                    </li>
                    <li class="glide__slide">
                        <a href="../../public/index.php" class="portfolio__item"
                           style="background-image: url(../../img/projects/prefix_664213aeb21e79.40205653.jpg);">
                            <div class="portfolio__label">
                                <span>Жилые интерьеры</span>
                                <span>69 м<sup>2</sup></span>
                            </div>
                            <h5>Апартаменты </h5>
                            <div class="portfolio__shadow"></div>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>


<div class="container">
    <div class="separate"></div>
</div>


<?php include CONSTANTS['contact-block'] ?>

<?php include CONSTANTS['footer'] ?>

<script type="module">
   import PhotoSwipeLightbox from '../../node_modules/photoswipe/dist/photoswipe-lightbox.esm.js';

   const lightbox = new PhotoSwipeLightbox({
      gallery: '#gallery',
      children: 'a',
      pswpModule: () => import('../../node_modules/photoswipe/dist/photoswipe.esm.js')
   });
   lightbox.init();
</script>

<script src="/public/js/glide.js"></script>

<script>
   new Glide('.glide', {
      bound: 'checkbox.checked',
      type: 'slider',
      gap: '20',
      swipeThreshold: 40,
      dragThreshold: 20,
      startAt: 0,
      perView: 3,
      breakpoints: {
         1024: {
            perView: 2
         },
         600: {
            perView: 1,
            peek: {
               before: 0,
               after: 50
            }
         }
      }
   }).mount()
</script>


</body>

</html>