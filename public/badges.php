<?php
    $pageTitle = 'Badges';
    include('./components/header.php');
?>
    <div class="header">
        <div class="header__images">
            <img class="header__logo" src="resources/images/logoWhite.png" alt="KDG logo">
            <div class="header__level">Level 2</div>
        </div>

        <!-- header images -->
        <div class="header__badges">
            <img src="./resources/images/badge1.png" alt="colorfull girl partying badge">
            <img class="header__badges__mainBadge" src="./resources/images/badge2.png" alt="colorfull compass badge">
            <img src="./resources/images/badgeLock.png" alt="Lock badge">
            <p class="header__badges__subtitle">Enquête ontdekker</p>
        </div>

        <!-- header buttons -->
        <div class="header__buttons">
            <a class="header__buttons__text" href="./rewards.php">Beloningen</a>
            <a class="header__buttons__text__active" href="">Badges</a>
        </div>
    </div>
    <div class="container">

        <!-- achievementCard 1 -->
        <div class="achievementCard">
            <div class="achievementCard__image">
                <img class="achievementCard__image__img" src="./resources/images/badge1.png" alt="colorfull girl partying badge">
                <p class="achievementCard__image__text">Level 1</p>
            </div>
            <div class="achievementCard__content">
                <p class="achievementCard__content__title">Festival groentje</p>
                <p class="achievementCard__content__description">Vul 1 enquête in <span class="achievementCard__content__description__number"><b>1</b>/1</span></p>
                <div class="achievementCard__content__progressbar"></div>
                <div class="achievementCard__content__progressbarFilled"></div>
            </div>
        </div>

        <!-- achievementCard 2 -->
        <div class="achievementCard">
            <div class="achievementCard__image">
                <img class="achievementCard__image__img" src="./resources/images/badge2small.png" alt="colorfull compass badge">
                <p class="achievementCard__image__text">Level 2</p>
            </div>
            <div class="achievementCard__content">
                <p class="achievementCard__content__title">Enquête ontdekker</p>
                <p class="achievementCard__content__description">Vul in totaal 3 enquête in <span class="achievementCard__content__description__number"><b>3</b>/3</span></p>
                <div class="achievementCard__content__progressbar"></div>
                <div class="achievementCard__content__progressbarFilled"></div>
            </div>
        </div>

        <!-- achievementCard 3 -->
        <div class="achievementCard">
            <div class="achievementCard__image">
                <img class="achievementCard__image__img__lock" src="./resources/images/badgeLock.png" alt="Lock badge">
                <p class="achievementCard__image__text">Level 3</p>
            </div>
            <div class="achievementCard__content">
                <p class="achievementCard__content__title">Menigte bijdrager</p>
                <p class="achievementCard__content__description">Vul een reeks van 5 enquête in <span class="achievementCard__content__description__number"><b>2</b>/5</span></p>
                <div class="achievementCard__content__progressbar"></div>
                <div class="achievementCard__content__progressbar25"></div>
            </div>
        </div>

        <!-- achievementCard 4 -->
        <div class="achievementCard">
            <div class="achievementCard__image">
                <img class="achievementCard__image__img__lock" src="./resources/images/badgeLock.png" alt="Lock badge">
                <p class="achievementCard__image__text">Level 4</p>
            </div>
            <div class="achievementCard__content">
                <p class="achievementCard__content__title">Podium specialist</p>
                <p class="achievementCard__content__description">Vul in totaal 10 enquête in <span class="achievementCard__content__description__number"><b>3</b>/10</span></p>
                <div class="achievementCard__content__progressbar"></div>
                <div class="achievementCard__content__progressbar310"></div>
            </div>
        </div>

        <!-- achievementCard 5 -->
        <div class="achievementCard">
            <div class="achievementCard__image">
                <img class="achievementCard__image__img__lock" src="./resources/images/badgeLock.png" alt="Lock badge">
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
