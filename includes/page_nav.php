<?php
$products_list = getProducts();
?>
<nav class="page-nav">
    <div class="sidebarMenuWrapper">
        <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
        <label for="openSidebarMenu" class="sidebarIconToggle">
            <div class="spinner diagonal part-1"></div>
            <div class="spinner horizontal"></div>
            <div class="spinner diagonal part-2"></div>
        </label>
        <div id="sidebarMenu">
            <ul class="sidebarMenuInner">
                <a class="menu-linc" href="/">Главная</a>
                <li class="menu-dropdown sidebar-dropdown">
                    <span class="menu-dropdown__toggle">Продукция</span>
                    <ul class="menu-dropdown__list">
                        <?php foreach ($products_list as $product_sidebar_item): ?>
                            <li><a href="<?= htmlspecialchars($product_sidebar_item['url']) ?>"><?= htmlspecialchars($product_sidebar_item['short_name']) ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <a class="menu-linc" href="#pagecontacts">Контакты</a>
            </ul>
        </div>
    </div>
    <a href="/">
        <div class="main-logo">
            <h1 class="main-logo-text">НефтеГазХим</h1>
        </div>
    </a>
    <section class="main-menu">
        <a class="menu-linc" href="/">Главная</a>
        <div class="menu-dropdown">
            <span class="menu-linc menu-dropdown__toggle">Продукция</span>
            <ul class="menu-dropdown__list">
                <?php foreach ($products_list as $product_item): ?>
                    <li><a href="<?= htmlspecialchars($product_item['url']) ?>"><?= htmlspecialchars($product_item['short_name']) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <a class="menu-linc" href="#pagecontacts">Контакты</a>
    </section>

    <?php include 'modal_contact_form.php'; ?>
</nav>
