<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/css/main.css">
    <title>Home</title>
</head>

<body>
    <div class="container">
        <img class="logo" src="resources/images/logo.png">
        <div class="points">
            <img src="resources/images/points.png" alt="">
            <p>375 punten</p>
        </div>

        <h1>Actieve enquêtes</h1>

        <div class="enquete">
            <div class="enquete__left">
                <p class="enquete__normalText">Nog</p>
                <p class="enquete__time">00:02:<span class="enquete__time__seconds">45</span></p>
                <p class="enquete__normalText">om punten te verdienen</p>
            </div>
            <a href="surveyQ1.php"><button class="enquete__button">Start</button></a>
        </div>

        <div class="enquete">
            <div class="enquete__left">
                <p class="enquete__normalText">Nog</p>
                <p class="enquete__time">00:10:<span class="enquete__time__seconds">32</span></p>
                <p class="enquete__normalText">om punten te verdienen</p>
            </div>
            <a href="surveyQ1.php"><button class="enquete__button">Start</button></a>
        </div>


        <h2 class="reward">Beloningen</h2>

        <div class="reward__card">
            <img class="reward__card__image" src="resources/images/mojito.png" alt="">
            <div class="reward__card__content">
                <p class="reward__card__content__name">mojito</p>
                <p class="reward__card__content__points">nog <span class="reward__card__content__points__bold">25</span>
                    punten</p>
            </div>
            <div class="reward__card__progressbar"></div>
            <div class="reward__card__progressbarFilledMojito"></div>
        </div>

        <div class="reward__card">
            <img class="reward__card__image" src="resources/images/cheeseburger.png" alt="">
            <div class="reward__card__content">
                <p class="reward__card__content__name">Cheeseburger</p>
                <p class="reward__card__content__points">nog <span class="reward__card__content__points__bold">750</span> punten</p>
            </div>
            <div class="reward__card__progressbar"></div>
            <div class="reward__card__progressbarFilledCheeseburger"></div>
        </div>

    </div>
    <?php
    include('./components/footer.php');
    ?>

</body>

</html>