<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Profile | SmritiMitra</title>

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
        <section class="profile-header">

            <div>
                <p class="section-tag">PERSONAL PROFILE</p>

                <h1>👤 My Profile</h1>

                <p>
                    Manage your personal information and care preferences.
                </p>
            </div>

            <button class="edit-profile-btn">
                ✏️ Edit Profile
            </button>

        </section>


        <!-- PROFILE HERO -->
        <section class="profile-hero-card">

            <div class="profile-avatar-large">
                👤
            </div>

            <div class="profile-main-info">

                <h2>Your Profile</h2>

                <p class="profile-role">
                    SmritiMitra Care Member
                </p>

                <p class="profile-description">
                    Your personal information helps us provide a more
                    personalized cognitive care experience.
                </p>

            </div>

            <div class="profile-status">
                <span class="status-dot"></span>
                Account Active
            </div>

        </section>


        <!-- PROFILE DETAILS -->
        <section class="profile-content-grid">


            <!-- PERSONAL INFORMATION -->
            <div class="profile-info-card">

                <div class="profile-card-heading">

                    <div>
                        <p class="section-tag">ABOUT YOU</p>
                        <h2>Personal Information</h2>
                    </div>

                    <span class="profile-card-icon">👤</span>

                </div>


                <div class="profile-details-grid">

                    <div class="profile-detail">

                        <span>Full Name</span>
                        <strong>Your Name</strong>

                    </div>


                    <div class="profile-detail">

                        <span>Age</span>
                        <strong>-- Years</strong>

                    </div>


                    <div class="profile-detail">

                        <span>Date of Birth</span>
                        <strong>Not added</strong>

                    </div>


                    <div class="profile-detail">

                        <span>Preferred Language</span>
                        <strong>English</strong>

                    </div>

                </div>

            </div>


            <!-- CARE PREFERENCES -->
            <div class="profile-info-card">

                <div class="profile-card-heading">

                    <div>
                        <p class="section-tag">PERSONALIZATION</p>
                        <h2>Care Preferences</h2>
                    </div>

                    <span class="profile-card-icon">⚙️</span>

                </div>


                <div class="preference-list">

                    <div class="preference-item">

                        <div>
                            <strong>Medicine Reminders</strong>

                            <p>
                                Get reminders for your daily medicines.
                            </p>
                        </div>

                        <span class="preference-status">
                            Enabled
                        </span>

                    </div>


                    <div class="preference-item">

                        <div>
                            <strong>Voice Companion</strong>

                            <p>
                                Use voice to interact with SmritiMitra.
                            </p>
                        </div>

                        <span class="preference-status">
                            Enabled
                        </span>

                    </div>


                    <div class="preference-item">

                        <div>
                            <strong>Memory Activities</strong>

                            <p>
                                Receive personalized cognitive activities.
                            </p>
                        </div>

                        <span class="preference-status">
                            Enabled
                        </span>

                    </div>

                </div>

            </div>

        </section>


        <!-- ACCOUNT & CARE -->
        <section class="profile-care-section">

            <div class="profile-care-card">

                <div class="profile-care-icon">
                    👨‍👩‍👧
                </div>

                <div>

                    <h3>Caregiver Connection</h3>

                    <p>
                        Connect a trusted family member or caregiver to help
                        monitor your daily activities and progress.
                    </p>

                </div>

                <button class="connect-caregiver-btn">
                    Connect Caregiver
                </button>

            </div>


            <div class="profile-care-card">

                <div class="profile-care-icon">
                    🔐
                </div>

                <div>

                    <h3>Privacy & Security</h3>

                    <p>
                        Manage how your information and activity data are used.
                    </p>

                </div>

                <button class="manage-privacy-btn">
                    Manage Settings
                </button>

            </div>

        </section>


        <!-- PROFILE TIP -->
        <section class="profile-tip-card">

            <div class="profile-tip-icon">
                💡
            </div>

            <div>

                <h3>Keep your profile updated</h3>

                <p>
                    Updating your information helps SmritiMitra provide a
                    more personalized experience.
                </p>

            </div>

        </section>

    </main>

</div>

</body>

</html>