<?php
$s = DIRECTORY_SEPARATOR;
define('ROOT', dirname(__DIR__, 1) . $s);
define('IMG', dirname(__DIR__, 1) . "{$s}public{$s}img{$s}");
define('ICONS', dirname(__DIR__, 1) . "{$s}public{$s}img{$s}icons{$s}");
define('INC', dirname(__DIR__, 1) . $s . "inc");

define('CONSTANTS', [
        'css' => [
            '/public/css/reset.css',
            '/public/css/style.css',
            '/public/node_modules/photoswipe/dist/photoswipe.css',
        ],
        'js' => [
            'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js',
            'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js',
            'https://www.google.com/recaptcha/api.js?render=6LdJAJUpAAAAAOLzQcRYt4rw-oBJi00uckalA2H5',
            '/public/js/main.js',
        ],

        'site' => "NAVI",
        'url' => "https://navi.net.ru",
        'designer-name' => "Наталья Давыдова",

        'tel' => +79814239892,
        'telephone' => "+7 (981) 423-98-92",

        'city' => "г. Москва",
        'address' => 'Пресненская наб, 12',
        'email' => 'navi@yandex.ru',

        "telgramm" => "https://t.me/Natalish",
        "vk" => "https://vk.com/natalirem",
        "watsapp" => "https://wa.me/79814239892",

        'logo'=>'/public/img/logo.png',
        'avatar'=>'/public/img/avatar.jpg',

        "arrow" => file_get_contents(ICONS . "arrow.svg"),
        "small-arrow" => file_get_contents(ICONS . "small-arrow.svg"),
        "chevron" => file_get_contents(ICONS . "chevron.svg"),


        'header' => INC . '/header.php',
        'head' => INC . '/head.php',
        'footer' => INC . '/footer.php',
        'contact-block' => INC . '/contact-block.php',
        'contact-form' => INC . '/contact-form.php',

        "projects" => [
            1 => ['filter'=>'life','type' => 'Квартира', "h1" => "Уютная квартира", "category" => 'Жилые интерьеры', "area" => 60, "title" => "Апартаменты",],
            4 => ['filter'=>'commerce','type' => 'Коммерция', "h1" => "Атмосферное пространство для продажи и дегустаций мяса и мясопродуктов фермерского хозяйства", 'category' => 'Жилые интерьеры', 'area' => 69, 'title' => 'Апартаменты '],
            8 => ['filter'=>'land','type' => 'Дом', "h1" => "Уютный дом из бруса, в котором приятно отдохнуть после удачной охоты или рыбалки", 'category' => 'Ландшафтный дизайн', 'area' => 240, 'title' => 'Дом в охотугодьях'],
            9 => ['filter'=>'land','type' => 'Дом', "h1" => "Элегантная квартира с нотками роскоши в Ярославле", 'category' => 'Ландшафтный дизайн', 'area' => 82, 'title' => 'Элегантный загородный дом'],
            10 => ['filter'=>'land','type' => 'Ландшафт', "h1" => "Изысканный сад на небольшом участке", 'category' => 'Ландшафтный дизайн', 'area' => 5000, 'title' => 'Дивный сад'],
            11 => ['filter'=>'life','type' => 'Дом', "h1" => "Уютное креативное пространство для молодой семьи", 'category' => 'Жилые интерьеры', 'area' => 64, 'title' => 'Квартира в современном стиле'],
            20 => ['filter'=>'commerce','type' => 'Салон', "h1" => "SPA-салон в исторической части в одном из областных центров Северо-Запада России. Комфорт и уют, наслаждение и респектабельность повседневной жизни", 'category' => 'Коммерческие интерьеры', 'area' => 96, 'title' => 'Магазин фермерских продуктов'],
            21 => ['filter'=>'arch','type' => 'Коммерция', "h1" => "Уютный комфортный комплекс на берегу реки Сухоны рядом с Вотчиной Деда Мороза", 'category' => 'Архитектурное проектирование', 'area' => 2000, 'title' => 'Семейный комплекс отдыха'],
            22 => ['filter'=>'life','type' => 'Квартира', "h1" => "Гостевая квартира. Комфорт временного размещения", 'category' => 'Жилые интерьеры', 'area' => 65, 'title' => 'Гостевая квартира'],
            30 => ['filter'=>'arch','type' => 'Коммерция', "h1" => "Легкие комфортные домики для душевного отдыха недалеко от областной столицы", 'category' => 'Архитектурное проектирование', 'area' => 1500, 'title' => 'Небольшая база отдыха на берегу реки'],
            222 => ['filter'=>'life','type' => 'Дом', "h1" => "Дом для молодой семьи, современный стиль, сочетающий уют и комфорт", 'category' => 'Жилые интерьеры', 'area' => 480, 'title' => 'Дом для молодой семьи'],
            223 => ['filter'=>'life','type' => 'Дом', "h1" => "Частный дом в С-Петербурге. Небольшой родительский дом, в котором можно насладится экологичностью отдыха и вспомнить ауру счастья", 'category' => 'Жилые интерьеры', 'area' => 560, 'title' => 'Частный дом в Санкт'],
            224 => ['filter'=>'life','type' => 'Зона отдыха', "h1" => "Бильярдная в частном доме", 'category' => 'Жилые интерьеры', 'area' => 78, 'title' => 'Бильярдная в частном доме'],
            233 => ['filter'=>'life','type' => 'Кватрира', "h1" => "Студия в Санкт-Петербурге, неограниченный стиль и комфорт в ограниченных метрах", 'category' => 'Жилые интерьеры', 'area' => 30, 'title' => 'Студия в Санкт'],
            333 => ['filter'=>'life','type' => 'Квартира', "h1" => "Квартира для счастливой семьи", 'category' => 'Жилые интерьеры', 'area' => 112, 'title' => 'Квартира для счастливой семьи'],
            334 => ['filter'=>'life','type' => 'Квартира', "h1" => "Квартира в Санкт- Петербурге", 'category' => 'Жилые интерьеры', 'area' => 62, 'title' => 'Квартира в Санкт'],
            335 => ['filter'=>'life','type' => 'Квартира', "h1" => "Квартира для молодого мужчиныКвартира для молодого мужчины", 'category' => 'Жилые интерьеры', 'area' => 49, 'title' => 'Квартира для молодого мужчины'],
            336 => ['filter'=>'life','type' => 'Квартира', "h1" => "Комфорт, элегантность, свежесть и воздушность - все это для Жизни", 'category' => 'Жилые интерьеры', 'area' => 82, 'title' => 'Элегантная квартира с нотками роскоши'],
            337 => ['filter'=>'life','type' => 'Квартира', "h1" => "Квартира в Москве", 'category' => 'Жилые интерьеры', 'area' => 52, 'title' => 'Квартира в Москве'],
            338 => ['filter'=>'life','type' => 'Дом', "h1" => "Родительский дом рядом с мегаполисом. Уют провинции согревает душу", 'category' => 'Жилые интерьеры', 'area' => 140, 'title' => 'Родительский дом рядом с мегаполисом'],

        ],
        "getProject" => function (): array {
            $folders  = array();
            $projects = ROOT . '/public/img/projects';
            $paths    = scandir($projects);
            foreach ($paths as $path) {
                if ($path == '.' || $path == '..') continue;
                if (is_dir($projects . '/' . $path)) {
                    $imgs = scandir($projects . '/' . $path);
                    foreach ($imgs as $img) {
                        if ($img == '.' || $img == '..') continue;
                        if (is_file($projects . '/' . $path . '/' . $img)) {
                            $folders[$path][] = $img;
                        }
                    };
                }
            }
            return $folders;
        },

        "getProjectImages" => function (int $id): array {
            $images = array();
            $path   = ROOT . '/public/img/projects/' . $id;
            $files  = scandir($path);
            foreach ($files as $file) {
                if ($file == '.' || $file == '..') continue;
                if (is_file($path . '/' . $file)) {
                    $images[] = $file;
                }
            };
            return $images;
        },

    ]
);