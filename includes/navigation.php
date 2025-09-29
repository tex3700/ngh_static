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
                <li><a href="#products">Продукция</a></li>
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
        <a class="menu-linc" href="#products">Продукция</a>
        <a class="menu-linc" href="#reagents">Применение</a>
        <a class="menu-linc" href="#documents">Документация</a>
        <a class="menu-linc" href="#contacts">Контакты</a>
        <!--            <a class="menu-linc" href="#" target="_blank">Наша компания</a>-->
        <!--            <a class="menu-linc" href="#" target="_blank">Наши клиенты</a>-->
        <!--            <a class="menu-linc" href="#" target="_blank">Карьера</a>-->
    </section>

    <?php include 'modal_contact_form.php'; ?>

</nav>
