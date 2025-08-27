<?php
$page_title = 'Math 2200 Homework & Labs';
$page_css = ['assets/css/course.css'];
require dirname(__DIR__) . '/includes/header.php';
?>
<section class="container section" data-reveal>
    <h2 class="section-title">Homework & Labs — Math 2200</h2>

    <details>
        <summary>Homework 1 — Descriptive Statistics</summary>
        <div class="content hw-item">
            <div class="meta">Due: Sep 15 · Submit via LMS</div>
            <p>Compute and interpret summary statistics. Create plots for the dataset provided.</p>
            <a href="<?= BASE_PATH ?>math2200/hw/HW1.pdf" target="_blank" rel="noopener">Download HW1 (PDF)</a>
            <br><a href="<?= BASE_PATH ?>math2200/hw/HW1-data.csv" download>HW1 Data (CSV)</a>
        </div>
    </details>

    <details>
        <summary>Lab 1 — Exploratory Data Analysis</summary>
        <div class="content hw-item">
            <div class="meta">Due: Sep 22</div>
            <p>Use R or Python to explore the dataset. Submit a short report with figures.</p>
            <a href="<?= BASE_PATH ?>math2200/labs/Lab1.pdf" target="_blank" rel="noopener">Download Lab 1 (PDF)</a>
        </div>
    </details>

    <!-- Add more <details> as needed -->
</section>
<?php require dirname(__DIR__) . '/includes/footer.php'; ?>