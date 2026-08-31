const routineActivities = [
    { id: 1, icon: "🌅", name: "Wake Up", order: 1 },
    { id: 2, icon: "🪥", name: "Brush Teeth", order: 2 },
    { id: 3, icon: "🍳", name: "Breakfast", order: 3 },
    { id: 4, icon: "💊", name: "Take Medicine", order: 4 },
    { id: 5, icon: "🚶", name: "Morning Walk", order: 5 }
];

let selectedActivities = [];
let routineScore = 0;
let routineStarted = false;


// START GAME
function startRoutineGame() {

    selectedActivities = [];
    routineStarted = true;

    document.getElementById("routineInstruction").textContent =
        "Select the activities in the correct daily order.";

    document.getElementById("selectedRoutine").textContent =
        "Choose activities in the correct order.";

    document.getElementById("routineProgress").textContent =
        "0 / 5";

    const routineItems = document.getElementById("routineItems");

    routineItems.innerHTML = "";

    // Shuffle activities
    const shuffledActivities = [...routineActivities]
        .sort(() => Math.random() - 0.5);


    shuffledActivities.forEach((activity) => {

        const button = document.createElement("button");

        button.classList.add("routine-item");

        button.innerHTML = `
            <span class="routine-icon">${activity.icon}</span>
            <span>${activity.name}</span>
        `;

        button.onclick = () => selectActivity(activity, button);

        routineItems.appendChild(button);

    });
}


// SELECT ACTIVITY
function selectActivity(activity, button) {

    if (!routineStarted) return;

    // Prevent selecting the same activity twice
    if (
        selectedActivities.some(
            item => item.id === activity.id
        )
    ) {
        return;
    }

    selectedActivities.push(activity);

    button.classList.add("selected");

    button.disabled = true;

    updateSelectedRoutine();


    document.getElementById("routineProgress").textContent =
        `${selectedActivities.length} / 5`;


    // Check when all activities are selected
    if (
        selectedActivities.length ===
        routineActivities.length
    ) {
        checkRoutine();
    }
}


// UPDATE USER SELECTION
function updateSelectedRoutine() {

    const selectedRoutine =
        document.getElementById("selectedRoutine");

    selectedRoutine.innerHTML =
        selectedActivities
            .map((activity, index) => `
                <div class="selected-routine-item">
                    <span>${index + 1}</span>
                    ${activity.icon} ${activity.name}
                </div>
            `)
            .join("");
}


// CLEAR
function clearRoutine() {

    if (!routineStarted) return;

    selectedActivities = [];

    document.getElementById("selectedRoutine").textContent =
        "Choose activities in the correct order.";

    document.getElementById("routineProgress").textContent =
        "0 / 5";


    document.querySelectorAll(".routine-item")
        .forEach((button) => {

            button.classList.remove("selected");

            button.disabled = false;

        });
}


// CHECK ROUTINE
function checkRoutine() {

    routineStarted = false;

    let correctCount = 0;

    selectedActivities.forEach((activity, index) => {

        if (activity.order === index + 1) {
            correctCount++;
        }

    });


    routineScore += correctCount * 10;

    document.getElementById("routineScore").textContent =
        routineScore;


    const instruction =
        document.getElementById("routineInstruction");


    if (correctCount === 5) {

        instruction.textContent =
            "🎉 Excellent! You remembered the complete routine correctly!";

    } else {

        instruction.textContent =
            `You placed ${correctCount} out of 5 activities correctly. Try again!`;
    }
}