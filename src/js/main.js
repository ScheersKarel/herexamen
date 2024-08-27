const toggleSwitch = document.getElementById("toggle");
const modeImage = document.getElementById("modeImage");
const toggleSwitchContainer = document.querySelector(".toggle-switch");
const logo = document.querySelector(".logo");
const settings = document.querySelector(".footerSettings");

// Function to apply dark mode
function applyDarkMode() {
    document.body.classList.add("dark-mode");
    modeImage.src = "./resources/images/lightMode.png";
    toggleSwitchContainer.style.backgroundColor = "#75F4F4";
    logo.src = "./resources/images/logoWhite.png";
    settings.src = "./resources/images/settingsBlue.png";
    toggleSwitch.checked = true; // Ensure the toggle is checked
}

// Function to apply light mode
function applyLightMode() {
    document.body.classList.remove("dark-mode");
    modeImage.src = "./resources/images/darkMode.png";
    toggleSwitchContainer.style.backgroundColor = "#e0b3ff";
    logo.src = "./resources/images/logo.png";
    settings.src = "./resources/images/settingsIsActive.png";
    toggleSwitch.checked = false; // Ensure the toggle is unchecked
}

// Check the dark mode state on page load
if (localStorage.getItem("darkMode") === "enabled") {
    applyDarkMode();
} else {
    applyLightMode();
}

// Listen for the toggle switch change event
toggleSwitch.addEventListener("change", function () {
    if (toggleSwitch.checked) {
        applyDarkMode();
        localStorage.setItem("darkMode", "enabled"); // Save the state in localStorage
    } else {
        applyLightMode();
        localStorage.setItem("darkMode", "disabled"); // Save the state in localStorage
    }
});
