<?php
ob_start(); // Буферизуем весь вывод
require '../../config.php';
/**
 * Прокси для скачивания QR-кода как PNG-файла.
 * Использование: /products/catalog/qr-download.php?url=https://nghim.ru/products/ksp-201/&name=ksp-201
 */

$url  = isset($_GET['url'])  ? trim($_GET['url'])  : '';
$name = isset($_GET['name']) ? trim($_GET['name']) : 'qr-code';

if (empty($url)) {
    ob_end_clean();
    http_response_code(400);
    exit('URL не указан');
}

// Разрешаем только наш домен
$allowed = $_ENV['DOMAIN_NAME'];
$parsed  = parse_url($url);
if (!isset($parsed['host']) || strpos($parsed['host'], $allowed) === false) {
    ob_end_clean();
    http_response_code(403);
    exit('Недопустимый URL');
}

$qrApiUrl = 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&format=png&data=' . urlencode($url);

$imageData = file_get_contents($qrApiUrl);

if ($imageData === false || strlen($imageData) < 100) {
    ob_end_clean();
    http_response_code(500);
    exit('Не удалось получить QR-код');
}

// Безопасное имя файла
$filename = preg_replace('/[^a-z0-9\-_]/i', '-', $name) . '-qr.png';

ob_end_clean(); // Очищаем буфер перед отправкой бинарных данных

header('Content-Type: image/png');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Content-Length: ' . strlen($imageData));
header('Cache-Control: no-cache');
header('Pragma: no-cache');

echo $imageData;
exit;