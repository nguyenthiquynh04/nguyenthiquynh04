function guessNumber() {
    var randomNumber;
    var userInput;

    while (true) {
        if (!randomNumber) {
            randomNumber = Math.floor(Math.random() * 2);
        }

        userInput = parseInt(prompt("Hãy đoán xem số 0 hoặc 1:"));

        if (userInput === randomNumber) {
            alert("Chúc mừng! Bạn đã đoán đúng số.");
            break;
        } else {
            alert("Số " + userInput + " không chính xác. Hãy đoán lại!");
        }
    }
}

guessNumber();