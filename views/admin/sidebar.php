<div class="sidebar">
    <?php
        $currentFile = basename($_SERVER['PHP_SELF']);
        $navItems = [
            'dashboard.php' => ['Dashboard', 'fas fa-tachometer-alt'],
            'tutors.php' => ['Tutors', 'fas fa-chalkboard-teacher'],
            'students.php' => ['Students', 'fas fa-user-graduate'],
            'settings.php' => ['Settings', 'fas fa-cogs'],
            'reports.php' => ['Reports', 'fas fa-exclamation-circle'] 
        ];
    ?>
    <?php foreach ($navItems as $file => $item): ?>
        <a href="<?= $file ?>" class="nav-link <?= $currentFile === $file ? 'active' : '' ?>">
            <i class="<?= $item[1] ?>"></i> <?= $item[0] ?>
        </a>
    <?php endforeach; ?>
</div>
