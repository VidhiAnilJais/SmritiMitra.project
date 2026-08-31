<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Memory Journey | SmritiMitra</title>

    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<div class="app-layout">

    <!-- SIDEBAR -->
    <?php include "../includes/sidebar.php"; ?>


    <!-- MAIN CONTENT -->
    <main class="main-content">

        <!-- HEADER -->
        <?php include "../includes/header.php"; ?>


        <!-- PAGE HEADER -->

        <section class="memory-header">

            <div>
                <p class="section-tag">PERSONAL MEMORIES</p>

                <h1>❤️ My Memory Journey</h1>

                <p>
                    Explore and cherish the beautiful moments of your life.
                </p>
            </div>

            <button class="add-memory-btn">
                + Add Memory
            </button>

        </section>


        <!-- MEMORY SUMMARY -->

        <section class="memory-summary-grid">

            <div class="memory-summary-card">
                <div class="summary-icon">📸</div>

                <div>
                    <span>Total Memories</span>
                    <strong>24</strong>
                </div>
            </div>


            <div class="memory-summary-card">
                <div class="summary-icon">❤️</div>

                <div>
                    <span>Favorite Moments</span>
                    <strong>8</strong>
                </div>
            </div>


            <div class="memory-summary-card">
                <div class="summary-icon">👨‍👩‍👧</div>

                <div>
                    <span>Family Memories</span>
                    <strong>12</strong>
                </div>
            </div>

        </section>


        <!-- MEMORY TIMELINE -->

        <section class="memory-section">

            <div class="section-title">

                <div>
                    <h2>Your Life Journey</h2>

                    <p>
                        Every memory tells a beautiful story.
                    </p>
                </div>

            </div>


            <div class="memory-timeline">


                <!-- MEMORY 1 -->

                <div class="timeline-memory">

                    <div class="timeline-dot">
                        👧
                    </div>

                    <div class="timeline-card">

                        <div class="timeline-year">
                            Childhood
                        </div>

                        <h3>Growing Up</h3>

                        <p>
                            Beautiful memories from childhood,
                            family, friends and school days.
                        </p>

                        <div class="memory-tags">
                            <span>❤️ Family</span>
                            <span>🏡 Home</span>
                        </div>

                    </div>

                </div>


                <!-- MEMORY 2 -->

                <div class="timeline-memory">

                    <div class="timeline-dot">
                        🎓
                    </div>

                    <div class="timeline-card">

                        <div class="timeline-year">
                            Education
                        </div>

                        <h3>School & Learning</h3>

                        <p>
                            Remembering teachers, friends,
                            achievements and special moments.
                        </p>

                        <div class="memory-tags">
                            <span>📚 School</span>
                            <span>👭 Friends</span>
                        </div>

                    </div>

                </div>


                <!-- MEMORY 3 -->

                <div class="timeline-memory">

                    <div class="timeline-dot">
                        💍
                    </div>

                    <div class="timeline-card">

                        <div class="timeline-year">
                            Family Life
                        </div>

                        <h3>Love & Family</h3>

                        <p>
                            Precious memories shared with
                            loved ones and family.
                        </p>

                        <div class="memory-tags">
                            <span>❤️ Love</span>
                            <span>👨‍👩‍👧 Family</span>
                        </div>

                    </div>

                </div>


                <!-- MEMORY 4 -->

                <div class="timeline-memory">

                    <div class="timeline-dot">
                        🎉
                    </div>

                    <div class="timeline-card">

                        <div class="timeline-year">
                            Celebrations
                        </div>

                        <h3>Festivals & Traditions</h3>

                        <p>
                            Remembering joyful festivals,
                            traditions and celebrations.
                        </p>

                        <div class="memory-tags">
                            <span>🎊 Celebration</span>
                            <span>🌏 Culture</span>
                        </div>

                    </div>

                </div>


            </div>

        </section>


        <!-- MEMORY PROMPT -->

        <section class="memory-prompt-card">

            <div class="prompt-icon">
                💭
            </div>

            <div>

                <h2>Would you like to remember something today?</h2>

                <p>
                    Share a photo, story, or special moment with your family.
                </p>

            </div>

            <button class="remember-btn">
                Remember a Moment ❤️
            </button>

        </section>


    </main>

</div>

</body>

</html>