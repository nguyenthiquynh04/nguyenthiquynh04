function guessNumber() {
    var randomNumber;
    var userInput;

    while (true) {
        if (!randomNumber) {
            randomNumber = Math.floor(Math.random() * 10) + 1; // Số ngẫu nhiên từ 1 đến 10
        }

        userInput = parseInt(prompt("Hãy đoán xem số là từ 1 đến 10:"));

        if (userInput === randomNumber) {
            alert("Chúc mừng! Bạn đã đoán đúng số.");
            break; // Thoát khỏi vòng lặp while khi đoán đúng số
        } else {
            alert("Số " + userInput + " không chính xác. Hãy đoán lại!");
        }
    }
}

guessNumber();