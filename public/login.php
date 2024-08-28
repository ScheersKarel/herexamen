<?php
    $pageTitle = 'Login';
    include('./components/header.php');
?>
        <div class="container">
            <img class="cornerR" src="resources/images/cornerR.png" alt="colorful triangle shape in top right corner" />

            <img class="logo" src="resources/images/logo.png" alt="KDG logo" />

            <div class="inlogForm">
                <h2 class="inlogForm__title">Welkom!</h2>
                <p class="inlogForm__subTitle">Log in om verder te gaan</p>

                <!-- input field 'gebruikersnaam' -->
                <form action="login.php" method="post">
                    <input
                        class="inlogForm__username"
                        type="text"
                        name="username"
                        placeholder="Gebruikersnaam"
                        required
                    />

                    <!-- input field 'wachtwoord' -->
                    <input
                        class="inlogForm__password"
                        type="password"
                        name="password"
                        placeholder="Wachtwoord"
                        required
                    />

                    <!-- checkbox 'onthouden' -->
                    <input class="inlogForm__checkbox" type="checkbox" />
                    <label class="inlogForm__remember">Onthouden</label>

                    <!-- link 'wachtwoord vergeten' -->
                    <a
                        href="./forgotPassword.php"
                        class="inlogForm__forgotPassword"
                        ><u>Wachtwoord vergeten?</u>
                    </a>

                    <!-- button 'inloggen' -->
                    <button
                        class="inlogForm__button"
                        type="button"
                        onclick="location.href='./home.php';"
                    >
                        Inloggen
                    </button>
                </form>

                <hr class="inlogForm__line" />

                <!-- alternatieve inlog mogelijkheden -->
                <p class="inlogForm__otherlogin">of log in met</p>
                <div class="inlogForm__socials">
                    <img src="resources/images/facebook.png" alt="Facebook logo" />
                    <img src="resources/images/google.png" alt="Google logo" />
                    <img src="resources/images/apple.png" alt="Apple logo" />
                </div>
            </div>
            <img class="cornerL" src="resources/images/cornerL.png" alt="colorful triangle shape in bottom left corner" />
        </div>
  </body>
  </html