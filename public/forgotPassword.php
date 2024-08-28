<?php
    $pageTitle = 'Wachtworod veranderen';
    include('./components/header.php');
?>
        <div class="container">
            <img class="cornerR" src="resources/images/cornerR.png" alt="colorful triangle shape in top right corner" />

            <img class="logo" src="resources/images/logo.png" alt="KDG logo" />

            <div class="inlogForm">
                <h2 class="inlogForm__title">Verander je wachtwoord</h2>
                <p class="inlogForm__subTitle">
                    Je nieuw wachtwoord mag niet hetzelfde zijn als je oud
                    wachtwoord
                </p>

                <form action="login.php" method="post">
                    <!-- input field 'nieuw wachtwoord' -->
                    <input
                        class="inlogForm__username"
                        type="password"
                        name="username"
                        placeholder="Nieuw wachtwoord"
                        required
                    />

                    <!-- input field 'bevestig wachtwoord' -->
                    <input
                        class="inlogForm__password"
                        type="password"
                        name="password"
                        placeholder="Wachtwoord bevestigen"
                        required
                    />

                    <!-- button 'bevestigen' -->
                    <button
                        class="inlogForm__button"
                        type="submit"
                        onclick="location.href='./home.php';"
                    >
                        Bevestigen
                    </button>
                </form>

                <a class="inlogForm__withoutPassword" href="./login.php">
                    Doorgaan zonder wachtwoord te veranderen</a
                >
            </div>
            <img class="cornerL" src="resources/images/cornerL.png" alt="colorful triangle shape in bottom left corner" />
        </div>
 </body>
 </html>