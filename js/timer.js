var startTimer = function startTimer(duration, minuteDisplay, secondDisplay) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        minuteDisplay.textContent = minutes;
        secondDisplay.textContent = seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

function increase(){
  alert("asdf")
  clearInterval(startTimer);
}

window.onload = function () {
    var oneMinute = 60,
        minuteDisplay = document.querySelector('#minutes'),
        secondDisplay = document.querySelector('#seconds');
    startTimer(oneMinute, minuteDisplay, secondDisplay);
};