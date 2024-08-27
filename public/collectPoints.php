<?php
    $pageTitle = 'Punten verzamelen';
    include('./components/header.php');
?>
        <div class="container">
            <div class="collect">
                <img
                    class="collect__image"
                    src="resources/images/coin.png"
                    alt="Big blue coin with star in the middle"
                />

                <h1 class="collect__title">Bedankt!</h1>
                <p class="collect__paraf">
                    Door het voltooien van deze enquête heb je 250 punten
                    verdiend. Doe zo verder!
                </p>

                <div class="collect__points">
                    <img src="resources/images/points.png" alt="small blue coin with star in the middle" />
                    <p>+250</p>
                </div>

                <button
                    class="collect__button"
                    onclick="location.href='./rewards.php';"
                >
                    <img src="resources/images/check.png" alt="check icon" />Verzamelen
                </button>
            </div>
        </div>
    <?php
    include('./components/footer.php');
    ?>
