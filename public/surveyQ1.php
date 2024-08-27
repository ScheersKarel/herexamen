<?php
    $pageTitle = 'Vraag 1 ';
    include('./components/header.php');
?>
    <div class="container">
        <a href="home.php"><img class="backArrow" src="resources/images/backArrow.png" alt="Back arrow"></a>

        <img src="resources/images/progressbarSurvey1.png" alt="Progress bar of survey (1/3)" class="surveyProgres">

        <div class="surveyContent">
            <p class="surveyContent__number">Vraag <span>1</span>/3</p>
            <h3 class="surveyContent__question">Hoe druk is het aan het podium waar jij staat?</h3>

            <img class="surveyContent__image" src="resources/images/drukte bollen.png" alt="circles to indicate crowd">
            
            <div class="surveyContent__slider">
                <div class="surveyContent__slider__left">helemaal niet druk</div>
                <div class="surveyContent__slider__right">ontzettend druk</div>
                <input type="range" min="0" max="10" value="5" class="surveyContent__slider__slider">
            </div>

            <a href="surveyQ2.php"><button class="surveyContent__button">Naar vraag 2</button></a>
        </div>
    </div>
    <?php
    include('./components/footer.php');
    ?>
