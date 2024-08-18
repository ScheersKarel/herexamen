<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badges</title>
    <link rel="stylesheet" href="./resources/css/main.css">
</head>

<body>
    <div class="header">
        <div class="header__images">
            <img class="header__logo" src="resources/images/logoWhite.png">
            <div class="header__level">Level 2</div>
        </div>

        <div class="header__badges">
            <img src="./resources/images/badge1.png" alt="">
            <img class="header__badges__mainBadge" src="./resources/images/badge2.png" alt="">
            <img src="./resources/images/badgeLock.png" alt="">
            <p class="header__badges__subtitle">Enquête ontdekker</p>
        </div>
        <div class="header__buttons">
            <a class="header__buttons__text" href="./rewards.php">Beloningen</a>
            <a class="header__buttons__text__active" href="">Badges</a>
        </div>
    </div>
    <div class="container">

        <div class="achievementCard">
            <div class="achievementCard__image">
                <img class="achievementCard__image__img" src="./resources/images/badge1.png" alt="">
                <p class="achievementCard__image__text">Level 1</p>
            </div>
            <div class="achievementCard__content">
                <p class="achievementCard__content__title">Festival groentje</p>
                <p class="achievementCard__content__description">Vul 1 enquête in <span class="achievementCard__content__description__number"><b>1</b>/1</span></p>
                <div class="achievementCard__content__progressbar"></div>
                <div class="achievementCard__content__progressbarFilled"></div>
            </div>
        </div>

        <div class="achievementCard">
            <div class="achievementCard__image">
                <img class="achievementCard__image__img" src="./resources/images/badge2small.png" alt="">
                <p class="achievementCard__image__text">Level 2</p>
            </div>
            <div class="achievementCard__content">
                <p class="achievementCard__content__title">Enquête ontdekker</p>
                <p class="achievementCard__content__description">Vul in totaal 3 enquête in <span class="achievementCard__content__description__number"><b>3</b>/3</span></p>
                <div class="achievementCard__content__progressbar"></div>
                <div class="achievementCard__content__progressbarFilled"></div>
            </div>
        </div>

        <div class="achievementCard">
            <div class="achievementCard__image">
                <img class="achievementCard__image__img__lock" src="./resources/images/badgeLock.png" alt="">
                <p class="achievementCard__image__text">Level 3</p>
            </div>
            <div class="achievementCard__content">
                <p class="achievementCard__content__title">Menigte bijdrager</p>
                <p class="achievementCard__content__description">Vul een reeks van 5 enquête in <span class="achievementCard__content__description__number"><b>2</b>/5</span></p>
                <div class="achievementCard__content__progressbar"></div>
                <div class="achievementCard__content__progressbar25"></div>
            </div>
        </div>

        <div class="achievementCard">
            <div class="achievementCard__image">
                <img class="achievementCard__image__img__lock" src="./resources/images/badgeLock.png" alt="">
                <p class="achievementCard__image__text">Level 4</p>
            </div>
            <div class="achievementCard__content">
                <p class="achievementCard__content__title">Podium specialist</p>
                <p class="achievementCard__content__description">Vul in totaal 10 enquête in <span class="achievementCard__content__description__number"><b>3</b>/10</span></p>
                <div class="achievementCard__content__progressbar"></div>
                <div class="achievementCard__content__progressbar310"></div>
            </div>
        </div>

        <div class="achievementCard">
            <div class="achievementCard__image">
                <img class="achievementCard__image__img__lock" src="./resources/images/badgeLock.png" alt="">
                <p class="achievementCard__image__text">Level 5</p>
            </div>
            <div class="achievementCard__content">
                <p class="achievementCard__content__title">Streak meester</p>
                <p class="achievementCard__content__description">Vul een reeks van 10 enquête in <span class="achievementCard__content__description__number"><b>2</b>/10</span></p>
                <div class="achievementCard__content__progressbar"></div>
                <div class="achievementCard__content__progressbar15"></div>
            </div>
        </div>

    </div>
    <?php
    include('./components/footer.php');
    ?>
</body>

</html>