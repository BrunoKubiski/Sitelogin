
const hourHand = document.querySelector(".clock-hour");
const minuteHand = document.querySelector(".clock-minute");
const secondHand = document.querySelector(".clock-second");

function updateClock() {
    const now = new Date();
    const hours = now.getHours() % 12;
    const minutes = now.getMinutes();
    const seconds = now.getSeconds();

    const hourDeg = (hours * 30) + (0.5 * minutes);
    const minuteDeg = (minutes * 6) + (0.1 * seconds);
    const secondDeg = seconds * 6;

    hourHand.style.transform = `rotate(${hourDeg}deg)`;
    minuteHand.style.transform = `rotate(${minuteDeg}deg)`;
    secondHand.style.transform = `rotate(${secondDeg}deg)`;
}

updateClock();
setInterval(updateClock, 1000);

// ... código anterior ...



// Login form submission
const emailInput = document.getElementById("email");
const emailError = document.getElementById("email-error");

emailInput.addEventListener("input", function () {
    if (isValidEmail(emailInput.value)) {
        emailError.textContent = "";
    } else {
        emailError.textContent = "Enter a valid email address.";
    }
});

function isValidEmail(email) {
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailPattern.test(email);
}

