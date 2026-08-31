function addMessage(message, sender) {

    const chatMessages =
        document.getElementById("chatMessages");

    const messageDiv =
        document.createElement("div");

    messageDiv.classList.add("chat-message");

    if (sender === "user") {
        messageDiv.classList.add("user-message");
    } else {
        messageDiv.classList.add("ai-message");
    }

    const avatar =
        sender === "user" ? "👤" : "🧠";

    messageDiv.innerHTML = `
        <div class="message-avatar">
            ${avatar}
        </div>

        <div class="message-content">
            ${message}
        </div>
    `;

    chatMessages.appendChild(messageDiv);

    // Automatically scroll to latest message
    chatMessages.scrollTop =
        chatMessages.scrollHeight;
}


function getAIResponse(message) {

    const input = message.toLowerCase();

    if (
        input.includes("medicine") ||
        input.includes("medicine") ||
        input.includes("dawai")
    ) {
        return "💊 Your next medicine is Evening Medicine, scheduled for 8:00 PM.";
    }

    if (
        input.includes("schedule") ||
        input.includes("routine") ||
        input.includes("today")
    ) {
        return "📅 Today you have your medicine routine, cognitive activities, and your evening medicine at 8:00 PM.";
    }

    if (
        input.includes("memory") ||
        input.includes("remember")
    ) {
        return "❤️ You can visit Memory Journey to explore childhood, education, family, and celebration memories.";
    }

    if (
        input.includes("help") ||
        input.includes("sad") ||
        input.includes("lonely")
    ) {
        return "🤝 I am here with you. You can talk to me, explore your memories, play a cognitive game, or contact someone you trust.";
    }

    if (
        input.includes("hello") ||
        input.includes("hi") ||
        input.includes("namaste")
    ) {
        return "Hello! 👋 It is wonderful to talk with you. How can I help you today?";
    }

    return "🧠 I'm here to help you with medicines, daily routines, memories, and cognitive activities. Try asking me something!";
}


function sendMessage() {

    const input =
        document.getElementById("userMessage");

    const message =
        input.value.trim();

    if (message === "") {
        return;
    }

    // Add user message
    addMessage(message, "user");

    input.value = "";

    // Show AI response after a small delay
    setTimeout(() => {

        const response =
            getAIResponse(message);

        addMessage(response, "ai");

    }, 600);
}


function askQuestion(question) {

    const input =
        document.getElementById("userMessage");

    input.value = question;

    sendMessage();
}


function handleEnter(event) {

    if (event.key === "Enter") {
        sendMessage();
    }
}


/* =====================================
   VOICE RECOGNITION
===================================== */

function startVoiceRecognition() {

    const SpeechRecognition =
        window.SpeechRecognition ||
        window.webkitSpeechRecognition;

    if (!SpeechRecognition) {

        addMessage(
            "🎤 Voice recognition is not supported in this browser. Please try Google Chrome.",
            "ai"
        );

        return;
    }

    const recognition =
        new SpeechRecognition();

    recognition.lang = "en-IN";

    recognition.continuous = false;

    recognition.interimResults = false;


    recognition.onstart = function () {

        addMessage(
            "🎤 Listening... Please speak.",
            "ai"
        );
    };


    recognition.onresult = function (event) {

        const speech =
            event.results[0][0].transcript;

        const input =
            document.getElementById("userMessage");

        input.value = speech;

        sendMessage();
    };


    recognition.onerror = function () {

        addMessage(
            "Sorry, I could not hear you. Please try again.",
            "ai"
        );
    };


    recognition.start();
}