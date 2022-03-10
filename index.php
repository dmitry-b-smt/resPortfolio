<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/style.css" />

    <title>portfolio</title>
</head>

<body>
    <div class="wrapper">
        <?php require "blocks/header.php" ?>
        <main class="main">
            <section class="person">
                <div class="person__row container">
                    <div class="person__column meta">
                        <div class="meta__first-name">dmitry</div>
                        <div class="meta__last-name">bogachyov</div>
                        <div class="meta__photo">
                            <img src="img/gallery/meta-photo.png" alt="meta-photo">
                        </div>
                    </div>
                    <div class="person__column skills">
                        <div class="skills__title">skills</div>
                        <div class="skills__row">
                            <div class="skills__column">
                                <div class="skills__name skills__html">html</div>
                                <div class="skills__description">try to use BAM methodology if it is acceptable</div>
                            </div>
                            <div class="skills__column">
                                <div class="skills__name skills__css">css</div>
                                <div class="skills__description">adjusting styles with the SASS preprocessor to speed up
                                    my work</div>
                            </div>
                            <div class="skills__column">
                                <div class="skills__name skills__js">js</div>
                                <div class="skills__description">using vanilla JS to configure some logic</div>
                            </div>
                            <div class="skills__column">
                                <div class="skills__name skills__python">python</div>
                                <div class="skills__description">can use Django Web Framework in my projects if required
                                </div>
                            </div>
                            <div class="skills__column">
                                <div class="skills__name skills__php">PHP</div>
                                <div class="skills__description">my basic knowledge of PHP can help me to improve my code
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section class="about">
                <div class="about__row about__title section-title container">about</div>
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
                <div class="works__row works__title section-title container">works</div>
                <div class="works__slider container slider swiper">
                    <div class="slider__button slider__button-previous">&#12296</div>
                    <div class="slider__button slider__button-next">&#12297</div>
                    <div class="slider__tape swiper-wrapper">
                        <div class="slider__item slide swiper-slide">
                            <div class="slide__image">
                                <img src="img/products/slide-image-1.png" alt="slide-image-1">
                            </div>
                            <div class="slide__info">
                                <div class="slide__name">studio landing</div>
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
                                            <div class="slide__skill-value">35%</div>
                                        </div>
                                        <div class="slide__skill">
                                            <div class="slide__skill-name slide__skill-js">js</div>
                                            <div class="slide__skill-value">40%</div>
                                        </div>
                                    </div>
                                    <div class="slide__links">
                                        <a href="#" class="slide__link">ViewPage</a>
                                        <a href="https://github.com/" class="slide__link">GitHub</a>
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
                                        <a href="#" class="slide__link swiper-no-swiping">ViewPage</a>
                                        <a href="#" class="slide__link swiper-no-swiping">GitHub</a>
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
                                        <a href="#" class="slide__link">ViewPage</a>
                                        <a href="#" class="slide__link">GitHub</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__pagination swiper-pagination"></div>
                </div>
            </section>
            <section class="blog">
                <div class="blog__title section-title container">blog</div>
                <div class="blog__description container">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Adipisci in nostrum dolorum sint voluptas quisquam animi, pariatur placeat obcaecati ex eligendi
                    aspernatur ab quaerat odit laborum nobis illo explicabo tenetur.</div>
                <div class="blog__articles container">Work still in progress. Here will be posts from the deepest depths
                    of my shattered mind very soon...</div>

                <?php
                try {
                    $conn = new PDO("mysql:host=localhost;dbname=portfolio", "user", "password");
                    $sql = "SELECT * FROM articles";
                    $result = $conn->query($sql);
                } catch (PDOException $e) {
                    echo "<div class='blog__articles container'><b>Вывод статей по какой-то причине невозможен</b></div>";
                    echo "<div class='blog__articles container'>Database error: " . $e->getMessage() . "</div>";
                }
                ?>
            </section>
            <section class="contact-form">
                <div class="contact-form__title section-title container">contact form</div>
                <form class="contact-form__container container form" action="scripts/contact_to_email.php" method="post">
                    <input class="form__field" type="email" name="email" required=true placeholder="Введите ваш e-mail">
                    <textarea class="form__field form__field-area" type="textarea" rows="10" name="message" required=true placeholder="Введите ваше сообщение"></textarea>
                    <button class="form__button button" type="submit" value="send">send</button>
                </form>
            </section>
        </main>
        <?php require "blocks/footer.php" ?>
    </div>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>