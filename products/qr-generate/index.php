<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/products/ProductsModel.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Генератор QR-кода | НефтеГазХим</title>
    <link href="/css/main.css" rel="stylesheet" type="text/css">
    <link href="/css/header.css" rel="stylesheet" type="text/css">
    <link href="/css/styles.css" rel="stylesheet" type="text/css">
    <link href="/css/policy.css" rel="stylesheet" type="text/css">
    <link href="/css/footer.css" rel="stylesheet" type="text/css">
    <link href="/css/modal.css" rel="stylesheet" type="text/css">
    <link href="/css/media.css" rel="stylesheet" type="text/css">
    <link href="/css/product.css" rel="stylesheet" type="text/css">
    <link href="/css/page_nav.css" rel="stylesheet" type="text/css">
    <link href="/css/catalog.css" rel="stylesheet" type="text/css">
    <link href="/css/qrgen.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <script src="/js/policy-consent.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/page_nav.php'; ?>

<div class="qr-gen-page">
    <a class="product-back-link" href="/products/catalog/">← Вернуться в каталог</a>
    <h1>Генератор QR-кода</h1>

    <div class="qr-gen-form">
        <div class="qr-input-row">
            <input
                type="text"
                id="qr-url-input"
                class="qr-gen-input"
                placeholder="Вставьте ссылку, например https://example.com"
                autocomplete="off"
            >
            <button class="qr-check-btn" id="qr-check-btn" disabled>Проверить ссылку</button>
        </div>
        <span class="qr-gen-error" id="qr-error"></span>
        <button class="qr-gen-btn" id="qr-gen-btn" disabled>Сформировать QR</button>
    </div>

    <div class="qr-gen-result" id="qr-result">
        <a id="qr-result-link" href="#" target="_blank" rel="noopener noreferrer" class="qr-gen-url-link"></a>
        <div id="qr-gen-canvas"></div>
        <button class="qr-download-btn" id="qr-download-btn">↓ Скачать QR</button>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/product_footer.php'; ?>

<script src="/js/qrgen.js"></script>

</body>
</html>
