<?php
require_once '../DocumentsModel.php';
require_once '../ProductsModel.php';

$product = getProducts('dem-105');

$documents = getDocuments(
    __DIR__ . '/../../storage/dem-105',
    '/storage/dem-105'
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