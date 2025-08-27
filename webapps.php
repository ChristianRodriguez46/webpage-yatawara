<?php
$page_title = 'Webapps & Models';
require __DIR__ . '/includes/header.php';
?>
<section class="container section" data-reveal>
    <h2 class="section-title">Shiny Apps & Interactive Tools</h2>
    <div class="grid cols-3">
        <article class="card">
            <h3>PM2.5 Tracker</h3>
            <p>Visualize air quality data trends and disparities.</p>
            <a class="button" href="https://your-shiny-app-url.example" target="_blank" rel="noopener">Open App</a>
        </article>
        <article class="card">
            <h3>Disease Spread Simulator</h3>
            <p>Interactive SEIR-based model to explore outbreak dynamics.</p>
            <a class="button" href="https://another-shiny-url.example" target="_blank" rel="noopener">Open App</a>
        </article>
        <article class="card">
            <h3>Volatility Forecaster</h3>
            <p>Machine learning-based tool to explore market volatility.</p>
            <a class="button" href="https://your-third-shiny.example" target="_blank" rel="noopener">Open App</a>
        </article>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>