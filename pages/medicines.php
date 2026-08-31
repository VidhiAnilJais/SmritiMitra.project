<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Medicines | SmritiMitra</title>

    <!-- CSS path is different because this file is inside pages -->
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


        <!-- PAGE TITLE -->
        <div class="page-heading">

            <div>
                <p class="page-label">HEALTH & WELLNESS</p>

                <h1>My Medicines 💊</h1>

                <p>
                    Stay on track with your daily medicine schedule.
                </p>
            </div>

            <div class="medicine-date">
                📅 Today, 30 August
            </div>

        </div>


        <!-- MEDICINE SUMMARY -->
        <section class="medicine-summary">

            <div class="medicine-progress-card">

                <div>
                    <p class="summary-label">TODAY'S PROGRESS</p>

                    <h2>2 of 3</h2>

                    <p class="summary-text">
                        Medicines completed today
                    </p>
                </div>

                <div class="circle-progress">
                    67%
                </div>

            </div>


            <div class="next-medicine-card">

                <div class="next-icon">
                    💊
                </div>

                <div>
                    <p class="summary-label">UP NEXT</p>

                    <h3>Evening Medicine</h3>

                    <p>Today at <strong>8:00 PM</strong></p>
                </div>

                <span class="upcoming-badge">
                    Upcoming
                </span>

            </div>

        </section>


        <!-- MEDICINE SCHEDULE -->
        <section class="medicine-section">

            <div class="section-title">

                <div>
                    <h2>Today's Schedule</h2>

                    <p>
                        Keep track of your medicine routine.
                    </p>
                </div>

            </div>


            <div class="medicine-timeline">


                <!-- MORNING -->

                <div class="medicine-item">

                    <div class="timeline-time">
                        <strong>8:00</strong>
                        <span>AM</span>
                    </div>

                    <div class="timeline-line"></div>

                    <div class="medicine-info">

                        <div class="medicine-icon">
                            💊
                        </div>

                        <div>
                            <h3>Morning Medicine</h3>

                            <p>
                                Take after breakfast
                            </p>
                        </div>

                    </div>

                    <div class="medicine-status taken">
                        ✓ Taken
                    </div>

                </div>


                <!-- AFTERNOON -->

                <div class="medicine-item">

                    <div class="timeline-time">
                        <strong>2:00</strong>
                        <span>PM</span>
                    </div>

                    <div class="timeline-line"></div>

                    <div class="medicine-info">

                        <div class="medicine-icon">
                            💊
                        </div>

                        <div>
                            <h3>Afternoon Medicine</h3>

                            <p>
                                Take after lunch
                            </p>
                        </div>

                    </div>

                    <div class="medicine-status taken">
                        ✓ Taken
                    </div>

                </div>


                <!-- EVENING -->

                <div class="medicine-item upcoming">

                    <div class="timeline-time">
                        <strong>8:00</strong>
                        <span>PM</span>
                    </div>

                    <div class="timeline-line"></div>

                    <div class="medicine-info">

                        <div class="medicine-icon">
                            💊
                        </div>

                        <div>
                            <h3>Evening Medicine</h3>

                            <p>
                                Take after dinner
                            </p>
                        </div>

                    </div>

                    <button class="medicine-reminder-btn">
                        🔔 Remind Me
                    </button>

                </div>


            </div>

        </section>


        <!-- HEALTH TIP -->

        <div class="health-tip">

            <div class="health-tip-icon">
                💡
            </div>

            <div>
                <h3>Daily Health Tip</h3>

                <p>
                    Taking medicines at the same time every day can help
                    build a healthy routine.
                </p>
            </div>

        </div>


    </main>

</div>

</body>

</html>