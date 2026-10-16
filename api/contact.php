<?php
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Geçersiz istek türü.']);
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$subject = trim($_POST['subject'] ?? 'Genel Bilgi & İletişim');
$message = trim($_POST['message'] ?? '');

if (empty($name) || empty($phone) || empty($message)) {
    echo json_encode(['success' => false, 'message' => 'Lütfen ad, telefon ve mesaj alanlarını doldurunuz.']);
    exit;
}

$newMessage = [
    'id' => uniqid('msg_', true),
    'date' => date('Y-m-d H:i:s'),
    'name' => htmlspecialchars($name),
    'email' => htmlspecialchars($email),
    'phone' => htmlspecialchars($phone),
    'subject' => htmlspecialchars($subject),
    'message' => htmlspecialchars($message),
    'ip' => $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1'
];

$file = __DIR__ . '/messages.json';
$messages = [];

if (file_exists($file)) {
    $existing = json_decode(file_get_contents($file), true);
    if (is_array($existing)) {
        $messages = $existing;
    }
}

$messages[] = $newMessage;
file_put_contents($file, json_encode($messages, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo json_encode([
    'success' => true,
    'message' => 'Talebiniz başarıyla kaydedildi. En kısa sürede sizinle iletişime geçeceğiz.'
]);
