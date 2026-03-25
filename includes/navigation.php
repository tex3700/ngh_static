
<nav class="main-nav">
    <div class="sidebarMenuWrapper">
        <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
        <label for="openSidebarMenu" class="sidebarIconToggle">
            <div class="spinner diagonal part-1"></div>
            <div class="spinner horizontal"></div>
            <div class="spinner diagonal part-2"></div>
        </label>
        <div id="sidebarMenu">
            <ul class="sidebarMenuInner">
                <li id="first-sidebar-item">Name <span>Position</span></li>
                <li><a href="#service">Сервис</a></li>
                <li class="menu-dropdown sidebar-dropdown">
                    <span class="menu-dropdown__toggle">Продукция</span>
                    <ul class="menu-dropdown__list">
                        <?php foreach ($products_list as $product_sidebar_item): ?>
                            <li><a href="<?= htmlspecialchars($product_sidebar_item['url']) ?>"><?= htmlspecialchars($product_sidebar_item['short_name']) ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li><a href="#reagents">Применение</a></li>
                <li><a href="#documents">Документация</a></li>
                <li><a href="#contacts">Контакты</a></li>
            </ul>
        </div>
    </div>
    <a href="#">
        <div class="main-logo">
            <h1 class="main-logo-text">НефтеГазХим</h1>
            <!--                <span class="main-logo-img"></span>-->
        </div>
    </a>
    <section class="main-menu">
        <a class="menu-linc" href="#service">Сервис</a>
        <div class="menu-dropdown">
            <span class="menu-linc menu-dropdown__toggle">Продукция</span>
            <ul class="menu-dropdown__list">
                <?php foreach ($products_list as $product_item): ?>
                    <li><a href="<?= htmlspecialchars($product_item['url']) ?>"><?= htmlspecialchars($product_item['short_name']) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <a class="menu-linc" href="#reagents">Применение</a>
        <a class="menu-linc" href="#documents">Документация</a>
        <a class="menu-linc" href="#contacts">Контакты</a>
        <!--            <a class="menu-linc" href="#" target="_blank">Наша компания</a>-->
        <!--            <a class="menu-linc" href="#" target="_blank">Наши клиенты</a>-->
        <!--            <a class="menu-linc" href="#" target="_blank">Карьера</a>-->
    </section>

    <?php include 'modal_contact_form.php'; ?>

</nav>
