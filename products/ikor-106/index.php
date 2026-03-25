<?php
require_once '../DocumentsModel.php';
require_once '../ProductsModel.php';

$product = getProducts('ikor-106');

$documents = getDocuments(
    __DIR__ . '/../../storage/ikor-106',
    '/storage/ikor-106'
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