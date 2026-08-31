const cardValues = [
    "🍎", "🍎",
    "🐶", "🐶",
    "🌸", "🌸",
    "🚗", "🚗"
];

let cards = [];
let firstCard = null;
let secondCard = null;
let moves = 0;
let matches = 0;
let locked = false;


function startGame() {

    // Shuffle cards
    cards = [...cardValues].sort(() => Math.random() - 0.5);

    firstCard = null;
    secondCard = null;
    moves = 0;
    matches = 0;
    locked = false;

    document.getElementById("moves").textContent = moves;
    document.getElementById("matches").textContent = "0 / 4";

    document.getElementById("gameResult").classList.add("hidden");

    createBoard();
}


function createBoard() {

    const board = document.getElementById("memoryBoard");

    board.innerHTML = "";

    cards.forEach((value, index) => {

        const card = document.createElement("div");

        card.classList.add("memory-card");

        card.dataset.value = value;
        card.dataset.index = index;

        card.innerHTML = "❓";

        card.addEventListener("click", () => flipCard(card));

        board.appendChild(card);
    });
}


function flipCard(card) {

    if (
        locked ||
        card.classList.contains("flipped") ||
        card.classList.contains("matched")
    ) {
        return;
    }


    card.classList.add("flipped");
    card.textContent = card.dataset.value;


    if (firstCard === null) {

        firstCard = card;

    } else {

        secondCard = card;

        moves++;

        document.getElementById("moves").textContent = moves;

        checkMatch();
    }
}


function checkMatch() {

    locked = true;

    const isMatch =
        firstCard.dataset.value === secondCard.dataset.value;


    if (isMatch) {

        firstCard.classList.add("matched");
        secondCard.classList.add("matched");

        matches++;

        document.getElementById("matches").textContent =
            `${matches} / 4`;

        resetTurn();

        if (matches === 4) {

            setTimeout(() => {

                document
                    .getElementById("gameResult")
                    .classList.remove("hidden");

                document.getElementById("resultText").textContent =
                    `You completed the game in ${moves} moves!`;

            }, 500);
        }

    } else {

        setTimeout(() => {

            firstCard.classList.remove("flipped");
            secondCard.classList.remove("flipped");

            firstCard.textContent = "❓";
            secondCard.textContent = "❓";

            resetTurn();

        }, 800);
    }
}


function resetTurn() {

    firstCard = null;
    secondCard = null;

    locked = false;
}


// Start game automatically
startGame();