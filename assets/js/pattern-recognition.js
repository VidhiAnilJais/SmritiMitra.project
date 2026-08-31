let patternLevel = 1;
let patternScore = 0;

let correctAnswer = "";
let gameStarted = false;


// Different patterns
const patterns = [
    {
        sequence: ["🔵", "🔴", "🔵", "🔴", "?"],
        answer: "🔵",
        options: ["🔵", "🔴", "🟢"]
    },
    {
        sequence: ["⭐", "❤️", "⭐", "❤️", "?"],
        answer: "⭐",
        options: ["❤️", "⭐", "🌸"]
    },
    {
        sequence: ["🔺", "🔺", "🔵", "🔺", "🔺", "🔵", "?"],
        answer: "🔺",
        options: ["🔵", "🔺", "🟢"]
    },
    {
        sequence: ["🌸", "🌼", "🌻", "🌸", "🌼", "?"],
        answer: "🌻",
        options: ["🌸", "🌻", "🌼"]
    }
];


function startPatternGame() {

    gameStarted = true;

    const patternIndex =
        (patternLevel - 1) % patterns.length;

    const currentPattern = patterns[patternIndex];

    correctAnswer = currentPattern.answer;


    // Show pattern
    document.getElementById("patternDisplay").textContent =
        currentPattern.sequence.join("   ");


    document.getElementById("patternInstruction").textContent =
        "Look carefully and choose what comes next.";


    // Create options
    const optionsContainer =
        document.getElementById("patternOptions");

    optionsContainer.innerHTML = "";


    currentPattern.options.forEach((option) => {

        const button = document.createElement("button");

        button.classList.add("pattern-option");

        button.textContent = option;

        button.onclick = function () {
            checkPatternAnswer(option);
        };

        optionsContainer.appendChild(button);

    });
}


function checkPatternAnswer(selectedAnswer) {

    if (!gameStarted) return;

    gameStarted = false;


    const instruction =
        document.getElementById("patternInstruction");


    if (selectedAnswer === correctAnswer) {

        patternScore += 10;

        patternLevel++;

        document.getElementById("patternScore").textContent =
            patternScore;

        document.getElementById("patternLevel").textContent =
            patternLevel;

        instruction.textContent =
            "🎉 Excellent! Correct answer.";

    } else {

        instruction.textContent =
            `❌ Not quite! The correct answer was ${correctAnswer}.`;
    }


    // Next pattern after 1.5 seconds
    setTimeout(() => {

        startPatternGame();

    }, 1500);
}