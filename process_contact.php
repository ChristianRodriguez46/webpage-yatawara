<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require __DIR__ . '/includes/config.php';

// Helper to end with JSON or redirect fallback
function respond($ok, $msg)
{
    $expectsJson = (strpos($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json') !== false);
    if ($expectsJson) {
        header('Content-Type: application/json');
        echo json_encode(['success' => $ok, 'message' => $msg]);
        exit;
    }
    // Non-AJAX fallback: flash + redirect
    $_SESSION['flash'] = ['type' => $ok ? 'success' : 'error', 'message' => $msg];
    header('Location: ' . BASE_PATH . 'contact.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(false, 'Invalid request.');
}

// CSRF
if (empty($_POST['csrf']) || empty($_SESSION['csrf']) || !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
    respond(false, 'Security token mismatch. Please refresh and try again.');
}

// Honeypot
if (!empty($_POST['website'])) {
    respond(true, 'Thank you!'); // pretend success; drop silently
}

// Sanitize & validate
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || mb_strlen($name) > 80)
    respond(false, 'Please enter your name.');
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    respond(false, 'Please enter a valid email.');
if ($subject === '' || mb_strlen($subject) > 120)
    respond(false, 'Please enter a subject.');
if ($message === '' || mb_strlen($message) > 4000)
    respond(false, 'Please write a message.');

// Build email
$to = CONTACT_EMAIL;
$subj = "[Website] " . $subject;
$body = "Name: {$name}\nEmail: {$email}\n\nMessage:\n{$message}\n";
$headers = [
    'From: ' . CONTACT_EMAIL,       // Use a domain sender to pass DMARC
    'Reply-To: ' . $email,
    'Content-Type: text/plain; charset=UTF-8'
];

// Send (native). If this fails on your host, use PHPMailer (see below).
$sent = @mail($to, $subj, $body, implode("\r\n", $headers));

if ($sent) {
    respond(true, 'Your message has been sent. Thank you!');
} else {
    // PHPMailer quick hint:
    // composer require phpmailer/phpmailer
    // then send via SMTP for reliability (Gmail/University SMTP).
    respond(false, 'Could not send email on the server. Please try again later.');
}
