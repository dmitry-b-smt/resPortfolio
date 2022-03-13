<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">

    <meta name="description" content="Web developer's site-portfolio">
    <meta name="keywords" content="web-developer, skills, portfolio">
    <meta name="robots" content="nofollow">

    <meta name="Author" content="Dmitry Bogachyov">
    <meta name="Copyright" content="Dmitry Bogachyov">
    <meta name="Address" content="Russian Federation, Saint-Petersburg">

    <link rel="shortcut icon" href="../../img/favicon.ico">
    <link rel="stylesheet" href="../../css/style.css">

    <title>Personal blog</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class=" header__row header__menu-container">
                <div class="header__menu container menu">

                    <a href="/index.php"><span class="menu__logo menu__logo-active text-en">Home</span class="menu__logo menu__logo-active text-en"><span class="menu__logo menu__logo-active text-ru">Главная</span></a>
                    <!-- <a href="/index.php" class="menu__logo menu__logo-active text-ru">Главная</a> -->
                    <ul class="menu__list">
                        <li class="menu__item text-en"><a href="#" class="menu__link" data-section="skills"></a></li>
                        <li class="menu__item text-ru"><a href="#" class="menu__link" data-section="skills"></a></li>

                        <li class="menu__item text-en"><a href="#" class="menu__link" data-section="about"></a></li>
                        <li class="menu__item text-ru"><a href="#" class="menu__link" data-section="about"></a></li>

                        <li class="menu__item text-en"><a href="#" class="menu__link" data-section="works"></a></li>
                        <li class="menu__item text-ru"><a href="#" class="menu__link" data-section="works"></a></li>

                        <li class="menu__item text-en"><a href="#" class="menu__link" data-section="blog"></a></li>
                        <li class="menu__item text-ru"><a href="#" class="menu__link" data-section="blog"></a></li>

                        <li class="menu__item text-en"><a href="#" class="menu__link" data-section="contacts">contacts</a></li>
                        <li class="menu__item text-ru"><a href="#" class="menu__link" data-section="contacts">контакты</a></li>

                        <li class="menu__item">
                            <div class="menu__link">
                                <form name="lang-form" class="menu__lang-switcher" method="GET">
                                    <label><input checked class="menu__lang-switcher-button real-radio" name="lang" type="radio" value="en"> en</label>
                                    <span class="custom-radio"></span>
                                    <label><input class="menu__lang-switcher-button" name="lang" type="radio" value="ru"> ru</label>
                                </form>
                            </div>
                        </li>
                    </ul>
                    <div class="menu__burger-button"></div>
                </div>
            </div>
            <div class="header__row header__burger-container">
                <div class="header__burger burger">
                    <div class="burger__close text-en">close &#10217</div>
                    <div class="burger__close text-ru">закрыть &#10217</div>
                    <ul class="burger__list">

                        <li class="burger__item text-en"><a href="" class="menu__link burger__link" data-section="contacts">contacts</a></li>
                        <li class="burger__item text-ru"><a href="" class="menu__link burger__link" data-section="contacts">контакты</a></li>

                        <li class="burger__item text-en"><a href="" class="menu__link burger__link" data-section="skills"></a></li>
                        <li class="burger__item text-ru"><a href="" class="menu__link burger__link" data-section="skills"></a></li>

                        <li class="burger__item text-en"><a href="" class="menu__link burger__link" data-section="about"></a></li>
                        <li class="burger__item text-ru"><a href="" class="menu__link burger__link" data-section="about"></a></li>

                        <li class="burger__item text-en"><a href="" class="menu__link burger__link" data-section="works"></a></li>
                        <li class="burger__item text-ru"><a href="" class="menu__link burger__link" data-section="works"></a></li>

                        <li class="burger__item text-en"><a href="" class="menu__link burger__link" data-section="blog"></a>
                        </li>
                        <li class="burger__item text-ru"><a href="" class="menu__link burger__link" data-section="blog"></a>
                        </li>

                        <li class="burger__item">
                            <div class="menu__link burger__link">
                                <form name="lang-form" class="burger__lang-switcher" method="GET">
                                    <label><input checked class="menu__lang-switcher-button" name="lang" type="radio" value="en"> en</label>
                                    <label><input class="menu__lang-switcher-button" name="lang" type="radio" value="ru"> ru</label>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <main class="main">
            <section class="blog personal-blog">
                <div class="personal-blog__container container">
                    <div class="blog__title section-title personal-blog__title text-en">personal blog</div>
                    <div class="blog__title section-title personal-blog__title text-ru">персональный блог</div>
                    <div class="blog__description personal-blog__subtitle text-en">* Screenshots can be viewed in high resolution on click.
                    </div>
                    <div class="blog__description personal-blog__subtitle text-ru">* Все скриншоты могут быть просмотрены в высоком разрешении по клику.
                    </div>

                    <div class="blog__description personal-blog__description text-en">Simple-constructed main page. Tall header contains navigation bar, slogan and arrow-button for fast move to
                        resent posts section. Sidebars and central sections built on grid layout. Each section reacts on cursor move-on or click event.
                    </div>
                    <div class="blog__description personal-blog__description text-ru">Главная страница имеет простую компановку. Высокий хэдер, содержащий в себе навигационное меню, слоган и кнопку,
                        позволяющую сразу переместиться к разделу с последними статьями. Сайдбары и центральные секции реализованы при помощи grid-сетки. Секции по-своему реагируют на
                        наведение или на клик.
                    </div>
                    <a class="blog__description personal-blog__description" href="/img/gallery/product-photo/borsch/borsch_main_page.png" target="_blank">
                        <div class="blog__image personal-blog__image">
                            <img src="/img/gallery/product-photo/borsch/borsch_main_page.png" alt="blog_main_page">
                        </div>
                    </a>

                    <div class="blog__description personal-blog__description text-en">On the blog page pagination configured.
                    </div>
                    <div class="blog__description personal-blog__description text-ru">На странице блога реализована пагинация.
                    </div>
                    <a class="blog__description personal-blog__description" href="/img/gallery/product-photo/borsch/borsch_all_posts.png" target="_blank">
                        <div class="blog__image personal-blog__image">
                            <img src="/img/gallery/product-photo/borsch/borsch_all_posts.png" alt="blog_all_posts">
                        </div>
                    </a>
                    <div class="blog__description personal-blog__description text-en">The post page contains main article text and comments system. Comments could be published after moderation only.
                    </div>

                    <div class="blog__description personal-blog__description text-ru">На странице конкретного поста размещён основной текст и система комментариев. Комментарий может быть опубликован только после
                        его проверки автором статьи.
                    </div>
                    <div class="blog__images personal-blog__images">
                        <a class="" href="/img/gallery/product-photo/borsch/borsch_post.png" target="_blank">
                            <div class="blog__image personal-blog__image">
                                <img src="/img/gallery/product-photo/borsch/borsch_post.png" alt="blog_post">
                            </div>
                        </a>
                        <a class="" href="/img/gallery/product-photo/borsch/borsch_comments.png" target="_blank">
                            <div class="blog__image personal-blog__image">
                                <img src="/img/gallery/product-photo/borsch/borsch_comments.png" alt="blog_comments">
                            </div>
                        </a>
                    </div>

                    <div class="blog__description personal-blog__description text-en">New users registration system with random password generator.
                    </div>
                    <div class="blog__description personal-blog__description text-ru">Имеется система регистрации новых пользователей с генератором псевдослучайного пароля.
                    </div>
                    <a class="blog__description personal-blog__description" href="/img/gallery/product-photo/borsch/borsch_registration.png" target="_blank">
                        <div class="blog__image personal-blog__image">
                            <img src="/img/gallery/product-photo/borsch/borsch_registration.png" alt="blog_registration">
                        </div>
                    </a>

                    <div class="blog__description personal-blog__description text-en">User's personal card and password change system.
                    </div>
                    <div class="blog__description personal-blog__description text-ru">Личный кабинет пользователя и система смены пароля.
                    </div>
                    <div class="blog__images personal-blog__images">
                        <a class="" href="/img/gallery/product-photo/borsch/borsch_personal_space.png" target="_blank">
                            <div class="blog__image personal-blog__image">
                                <img src="/img/gallery/product-photo/borsch/borsch_personal_space.png" alt="blog_personal_space">
                            </div>
                        </a>
                        <a class="" href="/img/gallery/product-photo/borsch/borsch_password_change.png" target="_blank">
                            <div class="blog__image personal-blog__image">
                                <img src="/img/gallery/product-photo/borsch/borsch_password_change.png" alt="blog_password_change">
                            </div>
                        </a>
                    </div>

                    <?php
                    try {
                        $conn = new PDO("mysql:host=localhost;dbname=portfolio", "user", "password");
                        $sql = "SELECT * FROM articles";
                        $result = $conn->query($sql);
                    } catch (PDOException $e) {
                        // echo "<div class='blog__articles container'><b>Вывод статей по какой-то причине невозможен</b></div>";
                        // echo "<div class='blog__articles container'>Database error: " . $e->getMessage() . "</div>";
                    }
                    ?>
                </div>

            </section>
        </main>
        <?php require "../../blocks/footer.php" ?>
    </div>
    <script src="/js/script_2.js"></script>
</body>

</html>