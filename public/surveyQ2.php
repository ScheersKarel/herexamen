<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey question 2</title>
    <link rel="stylesheet" href="./resources/css/main.css">
</head>

<body>
    <div class="container">
        <a href="surveyQ1.php"><img class="backArrow" src="resources/images/backArrow.png" alt=""></a>

        <img src="resources/images/progressbarSurvey2.png" alt="" class="surveyProgres">

        <div class="surveyContent">
            <p class="surveyContent__number">Vraag <span>2</span>/3</p>

            <!-- question 1 -->
            <h3 class="surveyContent__question">Hoe druk is het op dit moment?</h3>

            <div class="surveyContent__slider">
                <div class="surveyContent__slider__left">helemaal niet druk</div>
                <div class="surveyContent__slider__right">ontzettend druk</div>
                <input type="range" min="0" max="10" value="5" class="surveyContent__slider__slider">
            </div>

            <!-- question 2 -->
            <h3 class="surveyContent__question">Ervaar je deze drukte als iets positief of iets negatiefs?</h3>

            <div class="surveyContent__slider">
                <div class="surveyContent__slider__left">Heel negatief</div>
                <div class="surveyContent__slider__right">Heel positief</div>
                <input type="range" min="0" max="10" value="5" class="surveyContent__slider__slider">
            </div>

            <a href="surveyQ3.php"><button class="surveyContent__button">Naar vraag 3</button></a>
        </div>


    </div>
    <?php
    include('./components/footer.php');
    ?>
</body>

</html>