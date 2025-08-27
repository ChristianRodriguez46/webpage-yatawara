<?php
$page_title = 'Home';
$page_css = ['assets/css/home.css'];
$page_js = ['assets/js/matrix.js'];
require __DIR__ . '/includes/header.php';
?>

<section class="hero">
    <canvas id="matrixCanvas" aria-hidden="true"></canvas>
    <div class="overlay" aria-hidden="true"></div>

    <div class="container content" data-reveal>
        <h1>Dr. Anjana Yatawara</h1>
        <p class="meta">
            Department of Mathematics, <a href="<?= e(UNIV_URL) ?>" target="_blank" rel="noopener">California State
                University, Bakersfield</a>
        </p>
        <p>Applied mathematics, time series analysis, financial volatility modeling, and disease forecasting.</p>
        <div style="margin-top:1rem;">
            <a class="button" href="<?= BASE_PATH ?>about.php">About Me</a>
            <a class="button" href="<?= BASE_PATH ?>teaching.php" style="background:#008CBA;">Teaching</a>
        </div>
    </div>
</section>

<section class="container home-cards" data-reveal>
    <div class="grid cols-3">
        <article class="card home-card">
            <div class="title">Shiny Apps & Tools</div>
            <p>Interactive web apps for learning and research, including PM2.5 tracker and disease simulators.</p>
            <a class="button" href="<?= BASE_PATH ?>webapps.php">Explore Webapps</a>
        </article>

        <article class="card home-card">
            <div class="title">Courses</div>
            <p>Find resources for Math 2200 and Math 3210: syllabus, textbooks, homework, and labs.</p>
            <a class="button" href="<?= BASE_PATH ?>teaching.php">Go to Teaching</a>
        </article>

        <article class="card home-card">
            <div class="title">Contact</div>
            <p>Questions about courses, research, or collaborations? Reach out via the contact form.</p>
            <a class="button" href="<?= BASE_PATH ?>contact.php">Contact Me</a>
        </article>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>