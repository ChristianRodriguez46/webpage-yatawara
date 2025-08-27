<?php
$year = date('Y');
?>
</main>

<footer class="site-footer">
    <div class="container">
        <p>© <?= $year ?> Anjana Yatawara. All rights reserved.</p>
        <p>
            <a href="<?= e(DEPT_URL) ?>" target="_blank" rel="noopener">Department of Mathematics</a> ·
            <a href="<?= e(UNIV_URL) ?>" target="_blank" rel="noopener">California State University, Bakersfield</a>
        </p>
    </div>
</footer>

<!-- Base scripts -->
<script src="<?= BASE_PATH ?>assets/js/main.js" defer></script>

<?php foreach (($page_js ?? []) as $src): ?>
    <script src="<?= BASE_PATH . ltrim($src, '/'); ?>" defer></script>
<?php endforeach; ?>

</body>

</html>