<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey question 1</title>
    <link rel="stylesheet" href="./resources/css/main.css">
</head>

<body>
    <div class="container">
        <img class="backArrow" src="resources/images/backArrow.png" alt="">

        <img src="resources/images/progressbarSurvey1.png" alt="" class="surveyProgres">

        <div class="surveyContent">
            <p class="surveyContent__number">Vraag <span>1</span>/3</p>
            <h1 class="surveyContent__question">Hoe druk is het aan het podium waar jij staat?</h1>
            <img class="surveyContent__image" src="resources/images/drukte bollen.png" alt="">
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
</body>

</html>