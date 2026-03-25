<?php
require_once '../DocumentsModel.php';
require_once '../ProductsModel.php';

$product = getProducts('iaspo-102');

$documents = getDocuments(
    __DIR__ . '/../../storage/iaspo-102',
    '/storage/iaspo-102'
);
?>
<!DOCTYPE html>
<html lang="ru">
<?php include '../../includes/product_head.php'; ?>
<body>

    <?php include '../../includes/page_nav.php'; ?>

    <?php include '../../includes/product_page.php'; ?>

    <?php include '../../includes/product_footer.php'; ?>

</body>
</html>