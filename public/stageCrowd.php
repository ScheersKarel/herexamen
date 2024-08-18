<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podiumdrukte</title>
    <link rel="stylesheet" href="./resources/css/main.css">
</head>

<body>
    <div class="container">
        <img class="logo" src="resources/images/logo.png">

        <h4>Live drukte aan podia</h4>

        <div class="dropdown">
            <button class="dropdown__button">Mainstage</button>
            <img class="dropdown__arrow" src="./resources/images/downArrow.png" alt="">
        </div>

        <!-- bar graff -->
        <div class="crowd">
            <div class="crowd__amount">
                <div class="crowd__amount__1"></div>
                <div class="crowd__amount__2"></div>
                <div class="crowd__amount__3"></div>
                <div class="crowd__amount__4"></div>
                <div class="crowd__amount__5"></div>
                <div class="crowd__amount__6"></div>
                <div class="crowd__amount__7"></div>
                <div class="crowd__amount__8"></div>
                <div class="crowd__amount__9"></div>
                <div class="crowd__amount__10"></div>
                <div class="crowd__amount__11"></div>
                <div class="crowd__amount__12"></div>
                <div class="crowd__amount__13"></div>
                <div class="crowd__amount__14"></div>
                <div class="crowd__amount__15"></div>
                <div class="crowd__amount__16"></div>

            </div>
            <!-- graff time stamps + progressbar -->
            <div class="crowd__time">
                <div class="crowd__time__18u">
                    <div class="crowd__time__progressbarFull"></div>
                    <p>18u</p>
                </div>
                <div class="crowd__time__19u">
                    <div class="crowd__time__progressbarFull"></div>
                    <p>19u</p>
                </div>
                <div class="crowd__time__20u">
                    <div class="crowd__time__progressbarFull"></div>
                    <p>20u</p>
                </div>
                <div class="crowd__time__now">
                    <div class="crowd__time__progressbar"></div>
                    <div class="crowd__time__progressbar80"></div>
                    <p>Nu</p>
                </div>
            </div>
        </div>

        <!-- wrong info card -->
        <div class="wrongInfo">
            <h6 class="wrongInfo__title">Klopt deze informatie niet?</h6>
            <p class="wrongInfo__content">Je kan de drukte aan dit podium handmatig ingeven zodat onze grafiek weer klopt.</p>
            <a class="wrongInfo__link" href="./changeCrowd.php">Ga erheen >></a>
        </div>
    </div>
    <?php
    include('./components/footer.php');
    ?>
</body>

</html>