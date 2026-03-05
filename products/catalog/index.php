<?php
require_once '../ProductsModel.php';

$products = getProducts();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <title>Каталог продукции | НефтеГазХим</title>
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
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico?v=1">
    <script src="/js/policy-consent.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
</head>
<body>

<?php include '../../includes/page_nav.php'; ?>

<div class="catalog-page">
    <a class="product-back-link" href="/">← Вернуться на главную</a>
    <h1>Каталог продукции</h1>
    <table class="catalog-table">
        <thead>
            <tr>
                <th class="media-hide-column">#</th>
                <th>Наименование товара</th>
                <th class="media-hide-column">Описание</th>
                <th>QR-код страницы</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($products as $product): ?>
            <tr>
                <td class="media-hide-column"><?php echo $i; ?></td>
                <td><a class="product-link" href="<?php echo htmlspecialchars($product['url']); ?>" target="_blank"><?php echo htmlspecialchars($product['name']); ?></a></td>
                <td class="media-hide-column"><span class="product-desc"><?php echo htmlspecialchars($product['description']); ?></span></td>
                <td class="qr-cell">
                    <div id="qr-wrap-<?php echo $i; ?>"></div>
                    <button class="qr-download-btn" onclick="downloadQR(<?php echo $i; ?>, '<?php echo htmlspecialchars($product['slug'], ENT_QUOTES); ?>')">↓ Скачать QR</button>
                </td>
            </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include '../../includes/product_footer.php'; ?>

<script>
let qrData = [
    <?php $i = 1; ?>
<?php foreach($products as $product): ?>
    {id: <?php echo $i; ?>, url: '<?php echo htmlspecialchars($product['url'], ENT_QUOTES); ?>', slug: '<?php echo htmlspecialchars($product['slug'], ENT_QUOTES); ?>'},
    <?php $i++; ?>
<?php endforeach; ?>
];

qrData.forEach(function(item) {
    let wrap = document.getElementById('qr-wrap-' + item.id);
    if (wrap) {
        new QRCode(wrap, {
            text: item.url,
            width: 150,
            height: 150,
            correctLevel: QRCode.CorrectLevel.M
        });
    }
});

function downloadQR(id, slug) {
    let wrap = document.getElementById('qr-wrap-' + id);
    if (!wrap) return;
    let canvas = wrap.querySelector('canvas');
    if (!canvas) return;
    let a = document.createElement('a');
    a.href = canvas.toDataURL('image/png');
    a.download = slug + '-qr.png';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}
</script>

</body>
</html>