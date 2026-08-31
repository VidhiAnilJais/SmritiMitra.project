<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cognitive Games | SmritiMitra</title>

    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<div class="app-layout">

    <?php include "../includes/sidebar.php"; ?>

    <main class="main-content">

        <?php include "../includes/header.php"; ?>


        <!-- PAGE HEADING -->

        <div class="page-heading">

            <div>
                <p class="page-label">COGNITIVE TRAINING</p>

                <h1>Cognitive Games 🧠</h1>

                <p>
                    Fun activities designed to exercise memory,
                    attention and recognition.
                </p>
            </div>

            <div class="medicine-date">
                🎯 Daily Goal: 3 Activities
            </div>

        </div>


        <!-- GAME PROGRESS -->

        <section class="game-progress-overview">

            <div class="game-progress-text">

                <p class="summary-label">TODAY'S PROGRESS</p>

                <h2>1 of 3 Activities</h2>

                <p>
                    Complete today's activities to keep your mind engaged.
                </p>

            </div>

            <div class="game-progress-bar">

                <div class="game-progress-fill"></div>

            </div>

            <span>33% Complete</span>

        </section>


        <!-- GAME LIBRARY -->

        <section>

            <div class="section-title">

                <h2>Choose an Activity</h2>

                <p>
                    Select a game and enjoy your cognitive training.
                </p>

            </div>


            <div class="games-grid">


                <!-- GAME 1 -->
                 <a href="memory-match.php" class="game-card">
                

                    <div class="game-card-top">

                        <div class="game-icon purple">
                            🧠
                        </div>

                        <span class="difficulty easy">
                            Easy
                        </span>

                    </div>

                    <h3>Memory Match</h3>

                    <p>
                        Find matching pairs and strengthen your memory.
                    </p>

                    <div class="game-card-footer">

                        <span>⏱ 5 mins</span>

                        <strong>
    Play →

</strong>

                    </div>

                </a>


                <!-- GAME 2 -->

                <a href="number-sequence.php" class="game-card">

                    <div class="game-card-top">

                        <div class="game-icon blue">
                            🔢
                        </div>

                        <span class="difficulty medium">
                            Medium
                        </span>

                    </div>

                    <h3>Number Sequence</h3>

                    <p>
                        Remember numbers and repeat the sequence.
                    </p>

                    <div class="game-card-footer">

                        <span>⏱ 3 mins</span>

                        <strong>Play →</strong>

                    </div>

                </a>


                <!-- GAME 3 -->

                <a href="pattern-recognition.php" class="game-card">

                    <div class="game-card-top">

                        <div class="game-icon orange">
                            👁️
                        </div>

                        <span class="difficulty medium">
                            Medium
                        </span>

                    </div>

                    <h3>Pattern Recognition</h3>

                    <p>
                        Identify patterns and find what comes next.
                    </p>

                    <div class="game-card-footer">

                        <span>⏱ 5 mins</span>

                        <strong>Play →</strong>

                    </div>

                </a>


                <!-- GAME 4 -->

                <a href="routine-challenge.php" class="game-card">
                    
                    <div class="game-card-top">

                        <div class="game-icon green">
                            🖼️
                        </div>

                        <span class="difficulty easy">
                            Easy
                        </span>

                    </div>

                    <h3>Object Recognition</h3>

                    <p>
                        Recognize familiar objects and everyday items.
                    </p>

                    <div class="game-card-footer">

                        <span>⏱ 4 mins</span>

                        <strong>Play →</strong>

                    </div>

                </a>


            </div>

        </section>


        <!-- AI PERFORMANCE -->

        <section class="ai-performance">

            <div class="ai-performance-heading">

                <div>

                    <p class="page-label">
                        AI PERFORMANCE INSIGHTS
                    </p>

                    <h2>Your Cognitive Performance</h2>

                    <p>
                        Your progress is tracked across different abilities.
                    </p>

                </div>

                <div class="ai-icon">
                    🤖
                </div>

            </div>


            <div class="performance-grid">

                <div class="performance-item">

                    <div class="performance-label">
                        <span>Memory</span>
                        <strong>72%</strong>
                    </div>

                    <div class="performance-bar">
                        <div class="performance-fill fill-memory"></div>
                    </div>

                </div>


                <div class="performance-item">

                    <div class="performance-label">
                        <span>Attention</span>
                        <strong>81%</strong>
                    </div>

                    <div class="performance-bar">
                        <div class="performance-fill fill-attention"></div>
                    </div>

                </div>


                <div class="performance-item">

                    <div class="performance-label">
                        <span>Recognition</span>
                        <strong>65%</strong>
                    </div>

                    <div class="performance-bar">
                        <div class="performance-fill fill-recognition"></div>
                    </div>

                </div>

            </div>


            <div class="ai-game-insight">

                🤖 <strong>AI Insight:</strong>
                Your attention performance is strong. Try a Memory Match
                activity today to strengthen memory recall.

            </div>

        </section>

    </main>

</div>

</body>
</html>