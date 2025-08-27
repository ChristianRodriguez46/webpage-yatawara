<?php
$page_title = 'Math 2200 Resources';
$page_css = ['assets/css/course.css'];
require dirname(__DIR__) . '/includes/header.php';
?>
<section class="container section" data-reveal>
    <h2 class="section-title">Resources — Math 2200</h2>

    <details open>
        <summary>📖 Textbook</summary>
        <div class="content resource-list">
            <p><strong>Intro to Statistics</strong>, 4th ed. (Author, Publisher). ISBN: 000-0-000000-00-0.</p>
            <a href="#" target="_blank" rel="noopener">Publisher site</a>
        </div>
    </details>

    <details>
        <summary>📄 Syllabus</summary>
        <div class="content resource-list">
            <p>Course policies, grading, schedule, and expectations.</p>
            <a href="<?= BASE_PATH ?>math2200/syllabus.pdf" target="_blank" rel="noopener">Download Syllabus (PDF)</a>
        </div>
    </details>

    <details>
        <summary>🗓 Schedule (Overview)</summary>
        <div class="content">
            <ul>
                <li>Weeks 1–2: Descriptive statistics and visualization</li>
                <li>Weeks 3–4: Probability & distributions</li>
                <li>Weeks 5–7: Estimation & hypothesis testing</li>
                <li>Weeks 8–10: Correlation & regression</li>
            </ul>
        </div>
    </details>
</section>
<?php require dirname(__DIR__) . '/includes/footer.php'; ?>