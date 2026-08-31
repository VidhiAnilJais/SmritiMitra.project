<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Caregiver Dashboard | SmritiMitra</title>

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
        <section class="caregiver-header">

            <div>
                <p class="section-tag">CARE & PROGRESS MONITORING</p>

                <h1>👨‍👩‍👧 Caregiver Dashboard</h1>

                <p>
                    Monitor daily activities, medicine adherence and cognitive progress.
                </p>
            </div>

            <button class="caregiver-report-btn">
                📊 View Full Report
            </button>

        </section>


        <!-- PATIENT OVERVIEW -->
        <section class="patient-overview-card">

            <div class="patient-avatar-large">
                👵
            </div>

            <div class="patient-overview-info">

                <p class="section-tag">PATIENT OVERVIEW</p>

                <h2>Patient Profile</h2>

                <p>
                    View and monitor the patient's daily cognitive care progress.
                </p>

            </div>

            <div class="patient-status">
                <span class="status-dot"></span>
                Active Today
            </div>

        </section>


        <!-- MAIN STATS -->
        <section class="caregiver-stats-grid">

            <div class="caregiver-stat-card">

                <div class="caregiver-stat-icon">🧠</div>

                <div>
                    <span>Cognitive Activity</span>
                    <strong>72%</strong>
                    <small>↑ Improved this week</small>
                </div>

            </div>


            <div class="caregiver-stat-card">

                <div class="caregiver-stat-icon">💊</div>

                <div>
                    <span>Medicine Adherence</span>
                    <strong>2 / 3</strong>
                    <small>1 medicine remaining</small>
                </div>

            </div>


            <div class="caregiver-stat-card">

                <div class="caregiver-stat-icon">🎮</div>

                <div>
                    <span>Activities Completed</span>
                    <strong>3</strong>
                    <small>Today's activities</small>
                </div>

            </div>


            <div class="caregiver-stat-card">

                <div class="caregiver-stat-icon">🔥</div>

                <div>
                    <span>Engagement Streak</span>
                    <strong>5 Days</strong>
                    <small>Keep it going!</small>
                </div>

            </div>

        </section>


        <!-- PERFORMANCE -->
        <section class="performance-section">

            <div class="performance-heading">

                <div>
                    <h2>Cognitive Performance</h2>
                    <p>Based on recent activities and games.</p>
                </div>

                <span class="performance-period">Last 7 Days</span>

            </div>


            <div class="performance-grid">

                <div class="performance-card">

                    <div class="performance-top">
                        <span>Memory</span>
                        <strong>72%</strong>
                    </div>

                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 72%;"></div>
                    </div>

                </div>


                <div class="performance-card">

                    <div class="performance-top">
                        <span>Attention</span>
                        <strong>81%</strong>
                    </div>

                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 81%;"></div>
                    </div>

                </div>


                <div class="performance-card">

                    <div class="performance-top">
                        <span>Recognition</span>
                        <strong>65%</strong>
                    </div>

                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 65%;"></div>
                    </div>

                </div>


                <div class="performance-card">

                    <div class="performance-top">
                        <span>Consistency</span>
                        <strong>68%</strong>
                    </div>

                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 68%;"></div>
                    </div>

                </div>

            </div>

        </section>


        <!-- BOTTOM GRID -->
        <section class="caregiver-bottom-grid">


            <!-- TODAY'S ACTIVITY -->
            <div class="activity-overview-card">

                <div class="card-heading">
                    <h2>Today's Activities</h2>
                    <span>📅 Today</span>
                </div>

                <div class="activity-item completed">
                    <span class="activity-check">✓</span>

                    <div>
                        <strong>Memory Game</strong>
                        <p>Completed successfully</p>
                    </div>
                </div>


                <div class="activity-item completed">
                    <span class="activity-check">✓</span>

                    <div>
                        <strong>Medicine Reminder</strong>
                        <p>2 of 3 medicines completed</p>
                    </div>
                </div>


                <div class="activity-item pending">
                    <span class="activity-check">○</span>

                    <div>
                        <strong>Evening Activity</strong>
                        <p>Pending</p>
                    </div>
                </div>

            </div>


            <!-- AI OBSERVATION -->
            <div class="ai-observation-card">

                <div class="ai-observation-icon">
                    🤖
                </div>

                <div>

                    <p class="section-tag">AI INSIGHT</p>

                    <h2>Today's Observation</h2>

                    <p>
                        Cognitive activity appears stable today. Memory
                        performance could benefit from additional engagement.
                    </p>

                    <p class="observation-note">
                        This is an activity insight and not a medical diagnosis.
                    </p>

                </div>

            </div>


        </section>


    </main>

</div>

</body>

</html>