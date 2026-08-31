let sequence = [];
let userAnswer = [];

let level = 1;
let score = 0;
let gameActive = false;


// START GAME
function startSequence() {

    sequence = [];
    userAnswer = [];

    gameActive = false;

    updateAnswer();

    document.getElementById("gameInstruction").textContent =
        "Remember the numbers carefully...";

    // Level 1 = 3 numbers
    // Level 2 = 4 numbers
    // Level 3 = 5 numbers
    const sequenceLength = level + 2;

    for (let i = 0; i < sequenceLength; i++) {
        sequence.push(Math.floor(Math.random() * 9) + 1);
    }

    const display = document.getElementById("sequenceDisplay");

    display.textContent = sequence.join("  ");

    document.getElementById("startButton").disabled = true;


    // Hide sequence after 3 seconds
    setTimeout(() => {

        display.textContent = "?";

        gameActive = true;

        document.getElementById("gameInstruction").textContent =
            "Now repeat the sequence using the number buttons.";

        document.getElementById("startButton").disabled = false;

    }, 3000);
}


// ADD NUMBER
function addNumber(number) {

    if (!gameActive) {
        return;
    }

    userAnswer.push(number);

    updateAnswer();


    // Automatically check when enough numbers entered
    if (userAnswer.length === sequence.length) {
        checkAnswer();
    }
}


// UPDATE ANSWER DISPLAY
function updateAnswer() {

    const answerDisplay =
        document.getElementById("userSequence");

    answerDisplay.textContent =
        userAnswer.length > 0
            ? userAnswer.join("  ")
            : "-";
}


// CLEAR ANSWER
function clearAnswer() {

    if (!gameActive) {
        return;
    }

    userAnswer = [];

    updateAnswer();
}


// CHECK ANSWER
function checkAnswer() {

    gameActive = false;

    const correct =
        JSON.stringify(sequence) === JSON.stringify(userAnswer);

    const display =
        document.getElementById("sequenceDisplay");


    if (correct) {

        score += 10;

        document.getElementById("score").textContent = score;

        document.getElementById("gameInstruction").textContent =
            "🎉 Excellent! Correct sequence.";

        display.textContent = "✓ Correct!";

        level++;

        document.getElementById("level").textContent = level;

        // Automatically start next level
        setTimeout(() => {

            startSequence();

        }, 1500);

    } else {

        document.getElementById("gameInstruction").textContent =
            "Try again! The correct sequence was:";

        display.textContent = sequence.join("  ");

        setTimeout(() => {

            startSequence();

        }, 2500);
    }
}