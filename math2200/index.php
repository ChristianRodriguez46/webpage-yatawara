<?php
$page_title = 'Math 2200';
$page_css = ['assets/css/course.css']; // shared course styles
require dirname(__DIR__) . '/includes/header.php';
?>
<section class="course-hero">
    <div class="container" data-reveal>
        <h1>Math 2200 — Introductory Statistics</h1>
        <p class="course-meta">Instructor: Dr. Anjana Yatawara · Term: Fall 2024 · Location: TBA</p>
        <p><a class="button" href="<?= BASE_PATH ?>math2200/resources.php">Resources</a>
            <a class="button" href="<?= BASE_PATH ?>math2200/homework.php" style="background:#008CBA;">Homework /
                Labs</a>
        </p>
    </div>
</section>

<section class="container section" data-reveal>
    <h2>Overview</h2>
    <div class="card">
        <p>This course introduces descriptive statistics, probability distributions, estimation, hypothesis testing, and
            simple regression.</p>
    </div>
</section>
<?php require dirname(__DIR__) . '/includes/footer.php'; ?>