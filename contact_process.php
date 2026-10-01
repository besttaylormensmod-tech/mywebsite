<?php
/**
 * Handles the "Get in Touch" form on contact.php (action="contact_process.php").
 * Validates the input, emails it to $site['to_email'] (set in includes/config.php),
 * then redirects back to contact.php with a status flag the page can show a message for.
 */
require_once __DIR__ . '/includes/config.php';

function back($status, $extra = []) {
    $params = array_merge(['status' => $status], $extra);
    header('Location: contact.php?' . http_build_query($params) . '#contactForm');
    exit;
}

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    back('invalid');
}

// Honeypot field (optional spam trap) — add <input type="text" name="website" style="display:none">
// to the form if you want this to do anything; harmless if the field doesn't exist.
if (!empty($_POST['website'])) {
    back('sent'); // silently pretend success to bots
}

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

$errors = [];

if ($name === '') {
    $errors[] = 'name';
}
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'email';
}
if ($message === '') {
    $errors[] = 'message';
}

if ($errors) {
    back('invalid', ['fields' => implode(',', $errors)]);
}

if (empty($site['to_email']) || $site['to_email'] === 'CHANGE-ME@example.com') {
    // Owner hasn't configured a destination address yet.
    back('config');
}

$to      = $site['to_email'];
$subjectLine = 'Website enquiry' . ($subject !== '' ? ': ' . $subject : '') . ' — ' . $site['name'];

$body  = "You have a new message from the {$site['name']} website contact form.\r\n\r\n";
$body .= "Name: {$name}\r\n";
$body .= "Email: {$email}\r\n";
if ($subject !== '') {
    $body .= "Subject: {$subject}\r\n";
}
$body .= "\r\nMessage:\r\n{$message}\r\n";

// Use the visitor's own address as Reply-To so you can just hit "reply".
// From stays on your own domain — most mail servers reject/spam messages
// that claim to be From an address they don't control.
$serverHost = $_SERVER['SERVER_NAME'] ?? 'localhost';
$fromEmail  = 'no-reply@' . preg_replace('/^www\./', '', $serverHost);

$headers   = [];
$headers[] = 'From: ' . $site['name'] . ' Website <' . $fromEmail . '>';
$headers[] = 'Reply-To: ' . $name . ' <' . $email . '>';
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-Type: text/plain; charset=UTF-8';

$sent = @mail($to, $subjectLine, $body, implode("\r\n", $headers));

back($sent ? 'sent' : 'error');