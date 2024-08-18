<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instellingen</title>
    <link rel="stylesheet" href="./resources/css/main.css">
</head>

<body>
    <div class="container">
        <img class="logo" src="resources/images/logo.png">

        <h2>Instellingen</h2>

        <!-- darkmode veld -->
        <div class="settings">
            <p>Dark mode</p>
            <!-- slider for darkmode activation -->
            <div class="toggle-switch">
                <input type="checkbox" id="toggle" class="toggle-switch__checkbox">
                <label for="toggle" class="toggle-switch__label">
                    <span class="toggle-switch__circle">
                        <img src="./resources/images/darkMode.png" alt="">
                    </span>
                </label>
            </div>
        </div>

        <!-- uitloggen veld -->
        <div class="settings">
            <p>Uitloggen</p>
        </div>
    </div>
    <?php
    include('./components/footer.php');
    ?>
</body>

</html>