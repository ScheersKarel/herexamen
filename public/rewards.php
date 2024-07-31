<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rewards</title>
    <link rel="stylesheet" href="./resources/css/main.css">
</head>

<body>
    <div class="header">
        <img class="header__logo" src="resources/images/logoWhite.png">
        <br>
        <img class="header__pointsImg" src="resources/images/coin.png" alt="">
        <div class="header__collectPoints">
            <p>375 Punten</p>
        </div>
        <div class="header__buttons">
            <a class="header__buttons__text__active" href="">Beloningen</a>
            <a class="header__buttons__text" href="">Badges</a>
        </div>
    </div>
    <div class="container">

        <!-- Bier kaart  -->
        <div class="reward__card">
            <img class="reward__card__image" src="resources/images/beer.png" alt="">
            <div class="reward__card__content">
                <p class="reward__card__content__name">Bier 33cl</p>
                <p class="reward__card__content__points"><span class="reward__card__content__points__bold">100%</span>
                </p>
            </div>
            <div class="reward__card__progressbar"></div>
            <div class="reward__card__progressbarFilledBier"></div>
        </div>
        <div class="reward__extra">
            <hr class="reward__extra__line">
            <div class="reward__extra__container">
                <p><span class="reward__card__content__points__bold">200</span> van de <span class="reward__card__content__points__bold">200</span> punten</p>
                <button class="reward__extra__button__active">Claimen</button>
            </div>
        </div>

        <!-- mojito kaart  -->
        <div class="reward__card">
            <img class="reward__card__image" src="resources/images/mojito.png" alt="">
            <div class="reward__card__content">
                <p class="reward__card__content__name">Mojito</p>
                <p class="reward__card__content__points"><span class="reward__card__content__points__bold">93%</span>
                </p>
            </div>
            <div class="reward__card__progressbar"></div>
            <div class="reward__card__progressbarFilledMojito"></div>
        </div>
        <div class="reward__extra">
            <hr class="reward__extra__line">
            <div class="reward__extra__container">
                <p><span class="reward__card__content__points__bold">375</span> van de <span class="reward__card__content__points__bold">400</span> punten</p>
                <button class="reward__extra__button">Claimen</button>
            </div>
        </div>

        <!-- Frietjes + snack kaart  -->
        <div class="reward__card">
            <img class="reward__card__image" src="resources/images/friet.png" alt="">
            <div class="reward__card__content">
                <p class="reward__card__content__name">Frietjes + snack</p>
                <p class="reward__card__content__points"><span class="reward__card__content__points__bold">19%</span>
                </p>
            </div>
            <div class="reward__card__progressbar"></div>
            <div class="reward__card__progressbarFilledFriet"></div>
        </div>
        <div class="reward__extra">
            <hr class="reward__extra__line">
            <div class="reward__extra__container">
                <p><span class="reward__card__content__points__bold">375</span> van de <span class="reward__card__content__points__bold">2000</span> punten</p>
                <button class="reward__extra__button">Claimen</button>
            </div>
        </div>




    </div>
    <?php
    include('./components/footer.php');
    ?>
</body>

</html>