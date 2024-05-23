<?php
// Dummy report data for demonstration
$reports = [
    ['id' => 1, 'title' => 'Weekly Progress Report', 'description' => 'Track the weekly progress of your students.', 'date' => '2024-05-20'],
    ['id' => 4, 'title' => 'Performance Analysis', 'description' => 'Analyze the performance of your students in assignments and exams.', 'date' => '2024-05-10'],
    ['id' => 5, 'title' => 'Feedback Analysis', 'description' => 'Analyze feedback provided by students to improve teaching methods.', 'date' => '2024-05-05']
];
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<head>

</head>
<body>
    <!-- Header -->
    <?php include 'header.php'; ?>

    <div class="container-fluid">
        <!-- Left Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Reports Section -->
            <div class="dashboard-section">
                <h5>Reports</h5>
                <?php foreach ($reports as $report): ?>
                    <div class="report-card">
                        <div class="info">
                            <button onclick="printChart('reportChart<?= $report['id'] ?>', 'title<?= $report['id'] ?>')" class="btn btn-secondary btn-print btn-sm float-right mt-2">Print</button>
                            <h5 id="title<?= $report['id'] ?>"><?= $report['title'] ?></h5>
                            <p><?= $report['description'] ?></p>
                        </div>
                        <div class="date">Date: <?= $report['date'] ?></div>
                        <!-- Chart -->
                        <canvas id="reportChart<?= $report['id'] ?>" style="width: 100%; max-width: 600px;"></canvas>
                    </div>
                    <script>
                        var ctx<?= $report['id'] ?> = document.getElementById('reportChart<?= $report['id'] ?>').getContext('2d');
                        var reportChart<?= $report['id'] ?> = new Chart(ctx<?= $report['id'] ?>, {
                            type: 'bar',
                            data: {
                                labels: ['Introduction to Computing', 'Programming 2', 'Discrete Math', 'Integrative Programming', 'Information Management'],
                                datasets: [{
                                    label: 'Scores',
                                    data: [85, 90, 78, 92, 88],
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(255, 99, 132, 1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });

                        function printChart(chartId, titleId) {
                            var canvas = document.getElementById(chartId);
                            var title = document.getElementById(titleId).innerText;
                            var imgData = canvas.toDataURL();
                            var win = window.open();
                            win.document.write('<html><head><title>' + title + '</title></head><body>');
                            win.document.write('<h3>' + title + '</h3>');
                            win.document.write('<img src="' + imgData + '"/>');
                            win.document.write('</body></html>');
                            win.print();
                            win.close();
                        }
                    </script>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

  <?php include 'script.php'; ?>
</body>
</html>
