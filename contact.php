<?php
$page_title = 'Contact';
$page_css = ['assets/css/contact.css'];
require __DIR__ . '/includes/header.php';

// CSRF token
if (empty($_SESSION['csrf'])) {
    $_SESSION['csrf'] = bin2hex(random_bytes(32));
}
$csrf = $_SESSION['csrf'];

// Optional flash (non-AJAX fallback)
$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
?>
<section class="container section" data-reveal>
    <h2 class="section-title">Contact</h2>

    <?php if ($flash): ?>
        <div class="alert <?= e($flash['type']) ?>"><?= e($flash['message']) ?></div>
    <?php endif; ?>

    <form class="form" action="<?= BASE_PATH ?>process_contact.php" method="post" data-ajax="true" novalidate>
        <input type="hidden" name="csrf" value="<?= e($csrf) ?>">
        <!-- Honeypot -->
        <div class="hp" aria-hidden="true">
            <label>Leave this field empty</label>
            <input type="text" name="website" autocomplete="off">
        </div>

        <div class="row">
            <div>
                <label for="name">Name</label>
                <input id="name" name="name" required maxlength="80" placeholder="Your full name">
            </div>
            <div>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" required maxlength="120" placeholder="you@example.com">
            </div>
        </div>

        <div class="row full">
            <div>
                <label for="subject">Subject</label>
                <input id="subject" name="subject" required maxlength="120" placeholder="Subject">
            </div>
        </div>

        <div class="row full">
            <div>
                <label for="message">Message</label>
                <textarea id="message" name="message" required maxlength="4000"
                    placeholder="How can I help?"></textarea>
            </div>
        </div>

        <div class="actions">
            <button class="button" type="submit">Send Message</button>
            <span id="form-status" aria-live="polite"></span>
        </div>
    </form>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>