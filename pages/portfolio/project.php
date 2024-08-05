
<?php
$id            = $route->id;
$projects      = CONSTANTS['getProject']();
$projectImages = CONSTANTS['getProjectImages']($id);

$img = '/public/img/projects/' . $id . '/' . $projectImages[0];

$data     = CONSTANTS['projects'][$id];
$type     = $data['type'];
$h1       = $data['h1'];
$category = $data['category'];
$area     = $data['area'];
$title    = $data['title'];
 ?>

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
                        <? include ICONS."glide-arrow.svg"; ?>
                    </button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                        <? include ICONS."glide-arrow.svg"; ?>
                    </button>
                </div>
                <h2>Другие проекты</h2>
            </div>
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">

                    <?php
                    foreach ($projects as $id=>$project) {

                        $projectImages = CONSTANTS['getProjectImages']($id);

                        $image = $projectImages[0];
                        $img = '/public/img/projects/' . $id . '/' . $image;
                        $href = '/portfolio/project/' . $id;
                        $type = CONSTANTS['projects'][$id]['type'];
                        $area = CONSTANTS['projects'][$id]['area'];
                        $title = CONSTANTS['projects'][$id]['title'];
                        include ROOT . '/inc/other-projects.php';
                    }
                    ?>


                </ul>

            </div>

        </div>
    </div>
</section>


<div class="container">
    <div class="separate"></div>
</div>


<?php include CONSTANTS['contact-block'] ?>

<script type="module">
   import PhotoSwipeLightbox from '../../public/node_modules/photoswipe/dist/photoswipe-lightbox.esm.js';

   const lightbox = new PhotoSwipeLightbox({
      gallery: '#gallery',
      children: 'a',
      pswpModule: () => import('../../public/node_modules/photoswipe/dist/photoswipe.esm.js')
   });
   lightbox.init();
</script>

<script src="/public/js/glide.js"></script>

<script>
   new Glide('.glide', {
      bound: 'checkbox.checked',
      type: 'carousel',
      gap: '20',
      swipeThreshold: 10,
      dragThreshold: 5,
      startAt: 1,
      perView: 3,
      animationTimingFunc:'ease-in-out',
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