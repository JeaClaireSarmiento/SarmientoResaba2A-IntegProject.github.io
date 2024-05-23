<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body>
    <!-- Header -->
    <?php include 'header.php'; ?>
    <div class="container-fluid">
        <!-- Include Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Main Content -->
        <div class="main-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2>Messages</h2>
            </div>
            <ul class="message-container">
                <!-- Tutors' Messages -->
                <li class="message-item tutor">
                    <div class="message-content">
                        Hi, I'm available to tutor in mathematics. When can we discuss further?
                    </div>
                    <div class="message-timestamp">
                        From: Tutor - John Doe
                    </div>
                </li>
                <li class="message-item tutor">
                    <div class="message-content">
                        I can help with programming assignments. Let me know if you need assistance.
                    </div>
                    <div class="message-timestamp">
                        From: Tutor - Jane Smith
                    </div>
                </li>

                <!-- Students' Messages -->
                <li class="message-item student">
                    <div class="message-content">
                        I need help with my physics homework. Are you available to assist?
                    </div>
                    <div class="message-timestamp">
                        From: Student - Alice Johnson
                    </div>
                </li>
                <li class="message-item student">
                    <div class="message-content">
                        Can you provide guidance on essay writing?
                    </div>
                    <div class="message-timestamp">
                        From: Student - Bob Brown
                    </div>
                </li>

                <!-- Admin's Responses -->
                <li class="message-item admin">
                    <div class="message-content">
                        Thank you for reaching out! I'll connect you with an appropriate tutor shortly.
                    </div>
                    <div class="message-timestamp">
                        Admin
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <?php include 'script.php'; ?>
</body>
</html>
