<!--/*<footer class="footer">
    <a href="#">
        <img class="footer__home" src="resources/images/Home.png" alt="">
    </a>
    <a href="#">
        <img class="footer__rush" src="resources/images/Drukte.png" alt="">
    </a>
    <a href="#">
        <img class="footer__reward" src="resources/images/Beloningen.png" alt="">
    </a>
    <a href="#">
        <img class="footer__settings" src="resources/images/Settings.png" alt="">
    </a>
</footer>
*/ -->
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

    <?php if ($currentPage == 'rush.php') : ?>
        <a href="rush.php" class="active">
            <img class="footer__rush" src="resources/images/DrukteIsActive.png" alt="">
        </a>
    <?php else : ?>
        <a href="rush.php" class="active">
            <img class="footer__rush" src="resources/images/Drukte.png" alt="">
        </a>
    <?php endif; ?>

    <?php if ($currentPage == 'reward.php') : ?>
        <a href="reward.php" class="active">
            <img class="footer__reward" src="resources/images/BeloningenIsActive.png" alt="">
        </a>
    <?php else : ?>
        <a href="reward.php" class="active">
            <img class="footer__reward" src="resources/images/Beloningen.png" alt="">
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