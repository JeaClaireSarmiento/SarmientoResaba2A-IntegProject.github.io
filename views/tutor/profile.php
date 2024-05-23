<?php


// Dummy tutor data for demonstration
$tutor_profile = [
    'name' => 'John Doe',
    'email' => 'john.doe@example.com',
    'phone' => '+1234567890',
    'description' => 'Experienced tutor specializing in programming and web development.',
    'ratings' => [
        ['student' => 'Alice Johnson', 'rating' => 4, 'feedback' => 'John is an excellent tutor. Very patient and knowledgeable.'],
        ['student' => 'Bob Brown', 'rating' => 5, 'feedback' => 'Great tutor! Helped me understand complex concepts easily.'],
        ['student' => 'Jane Smith', 'rating' => 3, 'feedback' => 'Good tutor overall, but could improve on explaining certain topics.']
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

</head>
<body>
    <!-- Header -->
    <?php include 'header.php'; ?>

    <div class="container-fluid">
        <!-- Left Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Tutor Profile Section -->
            <div class="profile-section">
                <h5>Tutor Profile</h5>
                <p><strong>Name:</strong> <?= $tutor_profile['name'] ?></p>
                <p><strong>Email:</strong> <?= $tutor_profile['email'] ?></p>
                <p><strong>Phone:</strong> <?= $tutor_profile['phone'] ?></p>
                <p><strong>Description:</strong> <?= $tutor_profile['description'] ?></p>
            </div>

            <!-- Ratings Section -->
            <div class="ratings-section">
                <h5>Student Ratings & Feedback</h5>
                <?php foreach ($tutor_profile['ratings'] as $rating): ?>
                    <div class="rating">
                        <div class="student"><?= $rating['student'] ?></div>
                        <div class="stars">
                            <?php for ($i = 0; $i < $rating['rating']; $i++): ?>
                                <i class="fas fa-star"></i>
                            <?php endfor; ?>
                        </div>
                        <div class="feedback"><?= $rating['feedback'] ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <?php include 'script.php';?>
</body>
</html>
