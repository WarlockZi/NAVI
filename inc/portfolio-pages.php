<a href="/portfolio/project/<?= $id ?>" class="portfolio__item js-filterable"
   data-category="<?=$filter;?>"
   style="background-image: url(<?=$img;?>);">
    <div class="portfolio__label">
        <span><?= $category ?></span>
        <span><?= $area ?> м<sup>2</sup></span>
    </div>
    <h5><?= $title ?></h5>
    <div class="portfolio__shadow"></div>
</a>
