<?php
$page_title = 'Math 3210 Resources';
$page_css = ['assets/css/course.css'];
require dirname(__DIR__) . '/includes/header.php';
?>
<section class="container section" data-reveal>
    <h2 class="section-title">Resources — Math 3210</h2>

    <details open>
        <summary>📖 Textbook</summary>
        <div class="content resource-list">
            <p><strong>Time Series Analysis</strong>, 3rd ed. (Author, Publisher). ISBN: 000-0-000000-00-0.</p>
            <a href="#" target="_blank" rel="noopener">Publisher site</a>
        </div>
    </details>

    <details>
        <summary>📄 Syllabus</summary>
        <div class="content resource-list">
            <p>Course policies, grading, schedule, and expectations.</p>
            <a href="<?= BASE_PATH ?>math3210/syllabus.pdf" target="_blank" rel="noopener">Download Syllabus (PDF)</a>
        </div>
    </details>
</section>
<?php require dirname(__DIR__) . '/includes/footer.php'; ?>