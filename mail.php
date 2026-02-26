<?php
declare(strict_types=1);

header('Content-Type: text/plain; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo 'Method not allowed.';
    exit;
}

function clean_input(string $value): string
{
    return trim(str_replace(["\r", "\n"], ' ', $value));
}

$name = clean_input($_POST['name'] ?? '');
$email = clean_input($_POST['email'] ?? '');
$subject = clean_input($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $subject === '' || $message === '') {
    http_response_code(400);
    echo 'Please fill in all required fields.';
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo 'Please provide a valid email address.';
    exit;
}

$timestamp = date('Y-m-d H:i:s');
$logLine = "[$timestamp] Name: {$name} | Email: {$email} | Subject: {$subject}\nMessage: {$message}\n---\n";
$logFile = __DIR__ . DIRECTORY_SEPARATOR . 'rsvp-submissions.log';

if (@file_put_contents($logFile, $logLine, FILE_APPEND | LOCK_EX) === false) {
    http_response_code(500);
    echo 'Unable to save your RSVP right now. Please try again.';
    exit;
}

// Optional mail dispatch for servers configured with PHP mail().
$to = [
    'Paulkoloboi@yahoo.com',
    'nankamabu12@gmail.com',
    'samueluche8@gmail.com'
];
$mailSubject = 'New RSVP: ' . $subject;
$mailBody = "Name: {$name}\nEmail: {$email}\nSubject: {$subject}\n\nMessage:\n{$message}\n";
$headers = 'From: noreply@' . ($_SERVER['SERVER_NAME'] ?? 'localhost') . "\r\n" .
           'Reply-To: ' . $email . "\r\n" .
           'Content-Type: text/plain; charset=UTF-8';

@mail(implode(',', $to), $mailSubject, $mailBody, $headers);

echo 'Your RSVP was sent successfully.';
