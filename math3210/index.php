<?php
$page_title = 'Math 3210';
$page_css = ['assets/css/course.css'];
require dirname(__DIR__) . '/includes/header.php';
?>
<section class="course-hero">
    <div class="container" data-reveal>
        <h1>Math 3210 — Time Series & Forecasting</h1>
        <p class="course-meta">Instructor: Dr. Anjana Yatawara · Term: Fall 2024 · Location: TBA</p>
        <p><a class="button" href="<?= BASE_PATH ?>math3210/resources.php">Resources</a>
            <a class="button" href="<?= BASE_PATH ?>math3210/homework.php" style="background:#008CBA;">Homework /
                Labs</a>
        </p>
    </div>
</section>

<section class="container section" data-reveal>
    <h2>Overview</h2>
    <div class="card">
        <p>Topics include ARIMA modeling, seasonality, volatility modeling, and forecasting best practices.</p>
    </div>
</section>
<?php require dirname(__DIR__) . '/includes/footer.php'; ?>