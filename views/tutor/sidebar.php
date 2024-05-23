<div class="sidebar">
    <?php
        $currentFile = basename($_SERVER['PHP_SELF']);
        $navItems = [
            'dashboard.php' => ['Dashboard', 'fas fa-tachometer-alt'],
            'courses.php' => ['Courses', 'fas fa-book'],
            'students.php' => ['Students', 'fas fa-user-graduate'],
            'profile.php' => ['Profile', 'fas fa-user'],
            'reports.php' => ['Reports', 'fas fa-chart-line']
        ];
    ?>
    <?php foreach ($navItems as $file => $item): ?>
        <a href="<?= $file ?>" class="nav-link <?= $currentFile === $file ? 'active' : '' ?>">
            <i class="<?= $item[1] ?>"></i> <?= $item[0] ?>
        </a>
    <?php endforeach; ?>
</div>
