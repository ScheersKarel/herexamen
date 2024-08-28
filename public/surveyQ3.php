<?php
    $pageTitle = 'Vraag 3';
    include('./components/header.php');
?>
    <div class="container">
        <a href="surveyQ2.php"><img class="backArrow" src="resources/images/backArrow.png" alt="back arrow"></a>

        <img src="resources/images/progressbarSurvey3.png" alt="Progress bar of survey (3/3)" class="surveyProgres">

        <div class="surveyContent">
            <p class="surveyContent__number">Vraag <span>3</span>/3</p>

            <!-- question 1 -->
            <h3 class="surveyContent__question">Hoe voel je je op dit moment?</h3>

            <div class="surveyContent__slider">
                <div class="surveyContent__slider__left"><img src="resources/images/sleepy.png" alt="sleepy emoji"></div>
                <div class="surveyContent__slider__right"><img src="resources/images/klaarwakker.png" alt="awake emoji"></div>
                <!-- slider 1 -->
                <input type="range" min="0" max="10" value="5" class="surveyContent__slider__slider">
                
                <div class="surveyContent__slider__left">Slaperig</div>
                <div class="surveyContent__slider__right">Klaarwakker</div>
            </div>


            <div class="surveyContent__slider">
                <div class="surveyContent__slider__left"><img src="resources/images/verdrietig.png" alt="sad emoji"></div>
                <div class="surveyContent__slider__right"><img src="resources/images/Grinning Face With Smiling Eyes.png" alt="happy emoji"></div>
                <!-- slider 2 -->
                <input type="range" min="0" max="10" value="5" class="surveyContent__slider__slider">

                <div class="surveyContent__slider__left">verdrietig</div>
                <div class="surveyContent__slider__right">Blij</div>
            </div>

            <a href="collectPoints.php"><button class="surveyContent__button">Antwoorden verzenden</button></a>
        </div>


    </div>
    <?php
    include('./components/footer.php');
    ?>
