<?php
const FROM = 'hello@agora.com';
const TO = 'hello@agora.com';
const SUBJ = 'Contact form';

// Check request method
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    http_response_code(400);
    die();
}

// Get and validate name
$nme = $_POST['first_name'] ?? null;
if (empty($nme)) {
    http_response_code(400);
    die();
}

// Get and validate email
$eml = $_POST['email'] ?? '';
$atCnt = substr_count($eml, '@');
$atIdx = strpos($eml, '@');
$dtIdx = strpos($eml, '.', $atIdx);
if ($atCnt !== 1 || $dtIdx === false) {
    http_response_code(400);
    die();
}

// Get and validate phone
$phn = $_POST['phone'] ?? null;
if (empty($phn || !preg_match('/^\d{8}$/', $phn))) {
    http_response_code(400);
    die();
}

// Get choices and message
$msg = $_POST['msg'] ?? null;
if (empty($msg)) {
    http_response_code(400);
    die();
}

// Send mail
mail(TO, SUBJ, $msg, "From: " . FROM . "\r\nReply-To: {$eml}\r\nX-Mailer: PHP/" . phpversion());
echo 'OK';
