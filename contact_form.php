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
            <div class="contactform">
                <form class="contactform__container container form" action="scripts/contact_to_email.php" method="post">
                    <input class="form__field" type="email" name="email" required=true placeholder="Введите ваш e-mail">
                    <input class="form__field" type="text" name="message" required=true placeholder="Введите ваше сообщение">
                    <button class="form__button button" type="submit" value="send">Отправить</button>
                </form>
            </div>
        </main>
        <?php require "blocks/footer.php" ?>
    </div>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>