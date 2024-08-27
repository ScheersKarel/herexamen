<?php
    $pageTitle = 'Drukte invullen';
    include('./components/header.php');
?>
    <div class="container">
        <img class="logo" src="resources/images/logo.png"><br>
        <a href="podiumdrukte.php"><img class="backArrowSmallMargin" src="resources/images/backArrow.png" alt=""></a>

        <div class="surveyContent">
            <h1 class="surveyContent__question">Hoe druk is het aan het podium waar jij staat?</h1>

            <img class="surveyContent__image" src="resources/images/drukte bollen.png" alt="">

            <div class="surveyContent__slider">
                <div class="surveyContent__slider__left">helemaal niet druk</div>
                <div class="surveyContent__slider__right">ontzettend druk</div>
                <input type="range" min="0" max="10" value="5" class="surveyContent__slider__slider">
            </div>

            <button class="changeCrowdButton" onclick="location.href='./stageCrowd.php'">Verzenden</button>
        </div>
    </div>
    <?php
    include('./components/footer.php');
    ?>
