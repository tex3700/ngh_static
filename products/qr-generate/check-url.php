<?php
/**
 * Прокси для проверки доступности URL.
 * GET /products/qr-generate/check-url.php?url=https://example.com
 */
header('Content-Type: application/json');

$url = isset($_GET['url']) ? trim($_GET['url']) : '';

if (empty($url)) {
    echo json_encode(['ok' => false, 'error' => 'URL не указан']);
    exit;
}

// Базовая валидация формата
$parsed = parse_url($url);
if (!$parsed || !isset($parsed['scheme']) || !in_array($parsed['scheme'], ['http', 'https']) || empty($parsed['host'])) {
    echo json_encode(['ok' => false, 'error' => 'Некорректный формат ссылки']);
    exit;
}

$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_NOBODY         => true,   // HEAD-запрос
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_MAXREDIRS      => 5,
    CURLOPT_TIMEOUT        => 10,
    CURLOPT_CONNECTTIMEOUT => 8,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_USERAGENT      => 'Mozilla/5.0 (compatible; NGH-QR-Checker/1.0)',
]);

curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
$info = curl_getinfo($ch);
curl_close($ch);

if ($curlError) {
    echo json_encode(['ok' => false, 'error' => 'Сайт недоступен: ' . $curlError]);
    exit;
}

// Считаем успехом любой HTTP-ответ (сайт отвечает)
if ($httpCode >= 200 && $httpCode < 400 && $httpCode !== 0) {
    echo json_encode(['ok' => true]);
} else {
    echo json_encode(['ok' => false, 'error' => 'Сайт не отвечает']);
}
