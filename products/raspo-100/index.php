<?php
require_once '../DocumentsModel.php';
require_once '../ProductsModel.php';

$product = getProducts('raspo-100');

$documents = getDocuments(
    __DIR__ . '/../../storage/raspo-100',
    '/storage/raspo-100'
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