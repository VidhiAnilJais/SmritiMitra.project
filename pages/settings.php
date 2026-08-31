<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Settings | SmritiMitra</title>

    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<div class="app-layout">

    <?php include "../includes/sidebar.php"; ?>

    <main class="main-content">

        <?php include "../includes/header.php"; ?>

        <section class="settings-header">
            <div>
                <p class="section-tag">PREFERENCES</p>
                <h1>⚙️ Settings</h1>
                <p>Manage your SmritiMitra preferences.</p>
            </div>
        </section>


        <section class="settings-card">

            <h2>🔔 Notifications</h2>

            <div class="setting-row">
                <div>
                    <strong>Medicine Reminders</strong>
                    <p>Receive reminders for your medicines.</p>
                </div>

                <label class="switch">
                    <input type="checkbox" checked>
                    <span class="slider"></span>
                </label>
            </div>

            <div class="setting-row">
                <div>
                    <strong>Activity Reminders</strong>
                    <p>Get reminders for cognitive activities.</p>
                </div>

                <label class="switch">
                    <input type="checkbox" checked>
                    <span class="slider"></span>
                </label>
            </div>

        </section>


        <section class="settings-card">

            <h2>🎙️ Voice & Accessibility</h2>

            <div class="setting-row">
                <div>
                    <strong>Voice Companion</strong>
                    <p>Enable voice interaction with SmritiMitra.</p>
                </div>

                <label class="switch">
                    <input type="checkbox" checked>
                    <span class="slider"></span>
                </label>
            </div>

            <div class="setting-row">
                <div>
                    <strong>Large Text</strong>
                    <p>Use larger text for better readability.</p>
                </div>

                <label class="switch">
                    <input type="checkbox" id="largeTextToggle">
                    <span class="slider"></span>
                </label>
            </div>

        </section>


        <section class="settings-card">

            <h2>🎨 Appearance</h2>

            <div class="setting-row">
                <div>
                    <strong>Dark Mode</strong>
                    <p>Switch between light and dark appearance.</p>
                </div>

                <label class="switch">
                    <input type="checkbox" id="darkModeToggle">
                    <span class="slider"></span>
                </label>
            </div>

        </section>


        <section class="settings-card">

            <h2>🌐 Language</h2>

            <div class="setting-row">
                <div>
                    <strong>Preferred Language</strong>
                    <p>Select the language you prefer.</p>
                </div>

                <select class="language-select">
                    <option>English</option>
                    <option>Hindi</option>
                    <option>Marathi</option>
                </select>
            </div>

        </section>


        <section class="settings-card danger-card">

            <h2>🔐 Account</h2>

            <div class="setting-row">
                <div>
                    <strong>Privacy & Security</strong>
                    <p>Manage your privacy and account preferences.</p>
                </div>

                <button class="settings-action-btn">
                    Manage
                </button>
            </div>

        </section>

    </main>

</div>

<script src="../assets/js/settings.js"></script>

</body>
</html>