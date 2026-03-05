<?php
require_once '../DocumentsModel.php';
require_once '../ProductsModel.php';

$product = getProducts('iso-103');

$documents = getDocuments(
    __DIR__ . '/../../storage/iso-103',
    '/storage/iso-103'
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