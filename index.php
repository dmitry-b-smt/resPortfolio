<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/style.css" />

    <title>Dmitry B. portfolio</title>
</head>

<body>
    <div class="wrapper">
        <?php require "blocks/header.php" ?>
        <main class="main">
            <section class="person">
                <div class="person__row container">
                    <div class="person__column meta">
                        <div class="meta__first-name text-en">dmitry</div>
                        <div class="meta__first-name text-ru">богачёв</div>
                        <div class="meta__last-name text-en">bogachyov</div>
                        <div class="meta__last-name text-ru">дмитрий</div>
                        <div class="meta__photo">
                            <img src="img/gallery/meta-photo.png" alt="meta-photo">
                        </div>
                    </div>
                    <div class="person__column skills">
                        <div class="skills__title text-en">skills</div>
                        <div class="skills__title text-ru">навыки</div>
                        <div class="skills__row">
                            <div class="skills__column">
                                <div class="skills__name skills__html">html</div>
                                <div class="skills__description text-en">try to use BAM methodology if it is acceptable</div>
                                <div class="skills__description text-ru">стараюсь применять методологию БЭМ, если это возможно</div>
                            </div>
                            <div class="skills__column">
                                <div class="skills__name skills__css">css</div>
                                <div class="skills__description text-en">adjusting styles with the SCSS to speed up my work</div>
                                <div class="skills__description text-ru">при настройке стилей использую SCSS, чтобы ускорить работу</div>
                            </div>
                            <div class="skills__column">
                                <div class="skills__name skills__js">js</div>
                                <div class="skills__description text-en">using classic JS to configure some logic</div>
                                <div class="skills__description text-ru">конфигурирую логику на чистом JS</div>
                            </div>
                            <div class="skills__column">
                                <div class="skills__name skills__python">python</div>
                                <div class="skills__description text-en">can use Django Web Framework in my projects if required
                                </div>
                                <div class="skills__description text-ru">при ниобходимости могу применить веб фреймворк Django для построения проекта
                                </div>
                            </div>
                            <div class="skills__column">
                                <div class="skills__name skills__php">PHP</div>
                                <div class="skills__description text-en">my basic knowledge of PHP can help me to improve my code. Language learning still in progress
                                </div>
                                <div class="skills__description text-ru">текущие базовые знания PHP позволяют мне немного улучшить свой код. Продолжаю более детально изучать язык
                                </div>
                            </div>
                            <div class="skills__column">
                                <div class="skills__name skills__mysql">MySQL</div>
                                <div class="skills__description text-en">use MySQL as main DB in my own projects
                                </div>
                                <div class="skills__description text-ru">использую MySQL в качестве основной БД для своих проектов
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section class="about">
                <div class="about__row about__title section-title container text-en">about</div>
                <div class="about__row about__title section-title container text-ru">инфо</div>
                <div class="about__row about__text container">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus dignissimos ratione est sint
                        natus illum. Non nostrum, eos dicta ducimus dignissimos odit pariatur quo voluptatum minima
                        cumque corporis ex recusandae!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum praesentium nihil
                        delectus. Sint illum illo voluptatum eveniet vitae earum fugit! Accusamus nisi totam ab animi
                        cumque accusantium sit ipsam!</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui officiis beatae nesciunt doloremque
                        aspernatur non, omnis, exercitationem deleniti, provident quam quos! Ab illum necessitatibus
                        obcaecati, repudiandae dignissimos libero ducimus voluptas.</p>
                </div>
            </section>
            <section class="works">
                <div class="works__row works__title section-title container text-en">works</div>
                <div class="works__row works__title section-title container text-ru">работы</div>
                <div class="works__slider container slider swiper">
                    <div class="slider__button slider__button-previous">&#12296</div>
                    <div class="slider__button slider__button-next">&#12297</div>
                    <div class="slider__tape swiper-wrapper">
                        <div class="slider__item slide swiper-slide">
                            <div class="slide__image">
                                <img src="img/products/slide-image-1.png" alt="slide-image-1">
                            </div>
                            <div class="slide__info">
                                <div class="slide__name text-en">studio landing</div>
                                <div class="slide__name text-ru">лендинг студии</div>
                                <div class="slide__description text-en">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Eos anesciunt veritatis earum illo impedit qui possimus minus.</div>
                                <div class="slide__description text-ru">Лендинг некоторой творческой студии. Реализована как дестопная,
                                    так и мобильная версии. При помощи JS настроен фильтр услуг, предоставляемых фирмой, система рейтинга, скролл к пунктам меню.</div>
                                <div class="slide__meta">
                                    <div class="slide__skills">
                                        <div class="slide__skill">
                                            <div class="slide__skill-name slide__skill-html">html</div>
                                            <div class="slide__skill-value">25%</div>
                                        </div>
                                        <div class="slide__skill">
                                            <div class="slide__skill-name slide__skill-css">css</div>
                                            <div class="slide__skill-value">35%</div>
                                        </div>
                                        <div class="slide__skill">
                                            <div class="slide__skill-name slide__skill-js">js</div>
                                            <div class="slide__skill-value">40%</div>
                                        </div>
                                    </div>
                                    <div class="slide__links">
                                        <a href="#" class="slide__link text-en">View Page</a>
                                        <a href="#" class="slide__link text-ru">Просмотреть страницу</a>
                                        <a href="https://github.com/" class="slide__link text-en">Go to GitHub</a>
                                        <a href="https://github.com/" class="slide__link text-ru">Перейти к коду на GitHub</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider__item slide swiper-slide">
                            <div class="slide__image">
                                <img src="img/products/slide-image-2.png" alt="slide-image-2">
                            </div>
                            <div class="slide__info">
                                <div class="slide__name">coffee shop start page</div>
                                <div class="slide__description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Eos anesciunt veritatis earum illo impedit qui possimus minus.</div>
                                <div class="slide__meta">
                                    <div class="slide__skills">
                                        <div class="slide__skill">
                                            <div class="slide__skill-name slide__skill-html">html</div>
                                            <div class="slide__skill-value">30%</div>
                                        </div>
                                        <div class="slide__skill">
                                            <div class="slide__skill-name slide__skill-css">css</div>
                                            <div class="slide__skill-value">40%</div>
                                        </div>
                                        <div class="slide__skill">
                                            <div class="slide__skill-name slide__skill-js">js</div>
                                            <div class="slide__skill-value">30%</div>
                                        </div>
                                    </div>
                                    <div class="slide__links">
                                        <a href="#" class="slide__link text-en">View Page</a>
                                        <a href="#" class="slide__link text-ru">Просмотреть страницу</a>
                                        <a href="https://github.com/" class="slide__link text-en">Go to GitHub</a>
                                        <a href="https://github.com/" class="slide__link text-ru">Перейти к коду на GitHub</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider__item slide swiper-slide">
                            <div class="slide__image">
                                <img src="img/products/slide-image-3.png" alt="slide-image-3">
                            </div>
                            <div class="slide__info">
                                <div class="slide__name">medical center page</div>
                                <div class="slide__description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Eos anesciunt veritatis earum illo impedit qui possimus minus.</div>
                                <div class="slide__meta">
                                    <div class="slide__skills">
                                        <div class="slide__skill">
                                            <div class="slide__skill-name slide__skill-html">html</div>
                                            <div class="slide__skill-value">25%</div>
                                        </div>
                                        <div class="slide__skill">
                                            <div class="slide__skill-name slide__skill-css">css</div>
                                            <div class="slide__skill-value">45%</div>
                                        </div>
                                        <div class="slide__skill">
                                            <div class="slide__skill-name slide__skill-js">js</div>
                                            <div class="slide__skill-value">30%</div>
                                        </div>
                                    </div>
                                    <div class="slide__links">
                                        <a href="#" class="slide__link text-en">View Page</a>
                                        <a href="#" class="slide__link text-ru">Просмотреть страницу</a>
                                        <a href="https://github.com/" class="slide__link text-en">Go to GitHub</a>
                                        <a href="https://github.com/" class="slide__link text-ru">Перейти к коду на GitHub</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__pagination swiper-pagination"></div>
                </div>
            </section>
            <section class="blog">
                <div class="blog__title section-title container text-en">blog</div>
                <div class="blog__title section-title container text-ru">блог</div>
                <div class="blog__description container text-en">Welcome, chum. Here will be published posts about my programming diving,
                    learning, practice and may be some work experience. For protection from codehead-mellting and mind losing i let
                    be here several text-constructions about my hobbies also. In other words - i will be trying to share some of my
                    thougts with you.
                </div>
                <div class="blog__description container text-ru">Приветствую, друже. Здесь я буду публиковать посты о своём погружении в программирование
                    и разработку, обучении, практике, может даже о каком-то рабочем опыте. Также, чтобы совсем не потерять берега и связь с внешним миром,
                    наверняка напишу несколько текстов на отвлечённые темы. В общем и целом - как умею, постараюсь поделиться с тобой своими мыслями.
                </div>
                <div class="blog__articles container text-en">Work still in progress. As soon as i've got enough knowledge about PHP, this
                    section will be completed immediately. Here will be posts from the deepest depths
                    of my shattered mind very soon...</div>
                <div class="blog__articles container text-ru">Над блогом ещё ведётся работа. Как только моих знаний PHP будет достаточно,
                    этот раздел будет мгновенно завершён, и здесь появятся посты с мыслями из самых глубочайших глубин моего разума...</div>

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

            </section>
            <section class="contact-form">
                <div class="contact-form__title section-title container text-en">Contact form</div>
                <div class="contact-form__title section-title container text-ru">Форма для связи</div>
                <form class="contact-form__container container form text-en" action="scripts/contact_to_email.php" method="post">
                    <input class="form__field text-en" type="email" name="email" required=true placeholder="Input your e-mail">
                    <textarea class="form__field form__field-area text-en" type="textarea" rows="10" name="message" required=true placeholder="Input your message"></textarea>
                    <button class="form__button button text-en" type="submit" value="send">send</button>
                </form>

                <form class="contact-form__container container form text-ru" action="scripts/contact_to_email.php" method="post">
                    <input class="form__field text-ru" type="email" name="email" required=true placeholder="Введите ваш e-mail">
                    <textarea class="form__field form__field-area text-ru" type="textarea" rows="10" name="message" required=true placeholder="Введите ваше сообщение"></textarea>
                    <button class="form__button button text-ru" type="submit" value="send">отправить</button>
                </form>
            </section>
        </main>
        <?php require "blocks/footer.php" ?>
    </div>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>