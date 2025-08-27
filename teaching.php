<?php
$page_title = 'Teaching';
$page_css = ['assets/css/teaching.css'];
require __DIR__ . '/includes/header.php';
?>
<section class="container section" data-reveal>
    <h2 class="section-title">Teaching</h2>
    <div class="card course-list">
        <div class="course">
            <div class="badge">2200</div>
            <div>
                <h3>Math 2200 — Introductory Statistics</h3>
                <p>Course materials, syllabus, textbooks, homework, labs.</p>
            </div>
            <a class="button" href="<?= BASE_PATH ?>math2200/">Open</a>
        </div>
        <hr>
        <div class="course">
            <div class="badge">3210</div>
            <div>
                <h3>Math 3210 — Time Series & Forecasting</h3>
                <p>Resources and assignments for the course.</p>
            </div>
            <a class="button" href="<?= BASE_PATH ?>math3210/">Open</a>
        </div>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>