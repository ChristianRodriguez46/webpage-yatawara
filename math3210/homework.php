<?php
$page_title = 'Math 3210 Homework & Labs';
$page_css = ['assets/css/course.css'];
require dirname(__DIR__) . '/includes/header.php';
?>
<section class="container section" data-reveal>
    <h2 class="section-title">Homework & Labs — Math 3210</h2>

    <details>
        <summary>Homework 1 — Stationarity & ACF/PACF</summary>
        <div class="content hw-item">
            <div class="meta">Due: Sep 18 · Submit via LMS</div>
            <p>Check stationarity, compute ACF/PACF, suggest candidate ARMA models.</p>
            <a href="<?= BASE_PATH ?>math3210/hw/HW1.pdf" target="_blank" rel="noopener">Download HW1 (PDF)</a>
        </div>
    </details>

    <details>
        <summary>Lab 1 — Forecasting Workflow</summary>
        <div class="content hw-item">
            <div class="meta">Due: Sep 25</div>
            <p>Walk through a full forecasting pipeline: split, fit, validate, compare.</p>
            <a href="<?= BASE_PATH ?>math3210/labs/Lab1.pdf" target="_blank" rel="noopener">Download Lab 1 (PDF)</a>
        </div>
    </details>
</section>
<?php require dirname(__DIR__) . '/includes/footer.php'; ?>