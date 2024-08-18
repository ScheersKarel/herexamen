<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<footer class="footer">
    <?php if ($currentPage == 'home.php') : ?>
        <a href="home.php" class="active">
            <img class="footer__home" src="resources/images/HomeIsActive.png" alt="">
        </a>
    <?php else : ?>
        <a href="home.php">
            <img class="footer__home" src="resources/images/Home.png" alt="">
        </a>
    <?php endif; ?>

    <?php if ($currentPage == 'stageCrowd.php' || $currentPage == 'changeCrowd.php') : ?>
        <a href="stageCrowd.php" class="active">
            <img class="footer__stageCrowd" src="resources/images/DrukteIsActive.png" alt="">
        </a>
    <?php else : ?>
        <a href="stageCrowd.php" class="active">
            <img class="footer__stageCrowd" src="resources/images/Drukte.png" alt="">
        </a>
    <?php endif; ?>

    <?php if ($currentPage == 'rewards.php' || $currentPage == 'badges.php') : ?>
        <a href="rewards.php" class="active">
            <img class="footer__rewards" src="resources/images/BeloningenIsActive.png" alt="">
        </a>
    <?php else : ?>
        <a href="rewards.php" class="active">
            <img class="footer__rewards" src="resources/images/Beloningen.png" alt="">
        </a>
    <?php endif; ?>

    <?php if ($currentPage == 'settings.php') : ?>
        <a href="settings.php" class="active">
            <img class="footer__settings" src="resources/images/SettingsIsActive.png" alt="">
        </a>
    <?php else : ?>
        <a href="settings.php" class="active">
            <img class="footer__settings" src="resources/images/Settings.png" alt="">
        </a>
    <?php endif; ?>

</footer>