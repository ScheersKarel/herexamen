
<?php
    $pageTitle = 'Home';
    include('./components/header.php');
?>

 <div class="container">

        <img class="logo" src="resources/images/logo.png">

        <!-- point amount right top -->
        <div class="points">
            <img src="resources/images/points.png" alt="">
            <p>375 punten</p>
        </div>

        <h2>Actieve enquêtes</h2>

        <!-- first enquete card -->
        <div class="enquete">
            <div class="enquete__left">
                <p class="enquete__normalText">Nog</p>
                <p class="enquete__time">00:02:<span class="enquete__time__seconds">45</span></p>
                <p class="enquete__normalText">om punten te verdienen</p>
            </div>
            <a href="surveyQ1.php"><button class="enquete__button">Start</button></a>
        </div>

        <!-- second enquete card -->
        <div class="enquete">
            <div class="enquete__left">
                <p class="enquete__normalText">Nog</p>
                <p class="enquete__time">00:10:<span class="enquete__time__seconds">32</span></p>
                <p class="enquete__normalText">om punten te verdienen</p>
            </div>
            <a href="surveyQ1.php"><button class="enquete__button">Start</button></a>
        </div>


        <h4 class="reward">Beloningen</h4>

        <!-- first reward card -->
        <div class="reward__card">
            <img class="reward__card__image" src="resources/images/mojito.png" alt="">
            <div class="reward__card__content">
                <p class="reward__card__content__name">Mojito</p>
                <p class="reward__card__content__points">nog <span class="reward__card__content__points__bold">25</span>
                    punten</p>
            </div>
            <div class="reward__card__progressbar"></div>
            <div class="reward__card__progressbarFilledMojito"></div>
        </div>

        <!-- second reward card -->
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

