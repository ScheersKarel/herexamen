<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey question 3</title>
    <link rel="stylesheet" href="./resources/css/main.css">
</head>

<body>
    <div class="container">
        <a href="surveyQ2.php"><img class="backArrow" src="resources/images/backArrow.png" alt=""></a>

        <img src="resources/images/progressbarSurvey3.png" alt="" class="surveyProgres">

        <div class="surveyContent">
            <p class="surveyContent__number">Vraag <span>3</span>/3</p>

            <!-- question 1 -->
            <h3 class="surveyContent__question">Hoe voel je je op dit moment?</h3>

            <div class="surveyContent__slider">
                <div class="surveyContent__slider__left"><img src="resources/images/sleepy.png" alt=""></div>
                <div class="surveyContent__slider__right"><img src="resources/images/klaarwakker.png" alt=""></div>
                <!-- slider 1 -->
                <input type="range" min="0" max="10" value="5" class="surveyContent__slider__slider">
                
                <div class="surveyContent__slider__left">Slaperig</div>
                <div class="surveyContent__slider__right">Klaarwakker</div>
            </div>


            <div class="surveyContent__slider">
                <div class="surveyContent__slider__left"><img src="resources/images/verdrietig.png" alt=""></div>
                <div class="surveyContent__slider__right"><img src="resources/images/Grinning Face With Smiling Eyes.png" alt=""></div>
                <!-- slider 2 -->
                <input type="range" min="0" max="10" value="5" class="surveyContent__slider__slider">

                <div class="surveyContent__slider__left">verdrietig</div>
                <div class="surveyContent__slider__right">Blij</div>
            </div>

            <a href="collectPoints.html"><button class="surveyContent__button">Antwoorden verzenden</button></a>
        </div>


    </div>
    <?php
    include('./components/footer.php');
    ?>
</body>

</html>