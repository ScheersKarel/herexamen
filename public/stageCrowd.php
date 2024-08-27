<?php
    $pageTitle = 'Podia drukte';
    include('./components/header.php');
?>
    <div class="container">
        <img class="logo" src="resources/images/logo.png" alt="KDG logo">

        <h4>Live drukte aan podia</h4>

        <div class="dropdown">
            <button class="dropdown__button">Mainstage</button>
            <img class="dropdown__arrow" src="./resources/images/downArrow.png" alt="Arrow">
        </div>

        <!-- bar graff -->
        <div class="crowd">
            <div class="crowd__amount">
                <div class="crowd__amount__bar1"></div>
                <div class="crowd__amount__bar2"></div>
                <div class="crowd__amount__bar3"></div>
                <div class="crowd__amount__bar4"></div>
                <div class="crowd__amount__bar5"></div>
                <div class="crowd__amount__bar6"></div>
                <div class="crowd__amount__bar7"></div>
                <div class="crowd__amount__bar8"></div>
                <div class="crowd__amount__bar9"></div>
                <div class="crowd__amount__bar10"></div>
                <div class="crowd__amount__bar11"></div>
                <div class="crowd__amount__bar12"></div>
                <div class="crowd__amount__bar13"></div>
                <div class="crowd__amount__bar14"></div>
                <div class="crowd__amount__bar15"></div>
                <div class="crowd__amount__bar16"></div>

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
