<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <title>НГХ</title>
    <meta property="og:type" content="business.business">
    <meta property="og:title" content="НефтеГазХим">
    <meta property="og:url" content="nghim.ru">
    <meta property="og:image" content="">
    <meta property="og:description"
        content="ООО «НефтеГазХим» - подбор, производство и поставка химических реагентов для нефтегазовых компаний">
    <meta property="business:contact_data:street_address" content="Бутлерова, д. 7б">
    <meta property="business:contact_data:locality" content="Москва">
    <meta property="business:contact_data:region" content="">
    <meta property="business:contact_data:postal_code" content="117485">
    <meta property="business:contact_data:country_name" content="Russian Federation">

    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/header.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/srstyles.css" rel="stylesheet" type="text/css">
    <link href="css/slider.css" rel="stylesheet" type="text/css">
    <link href="css/footer.css" rel="stylesheet" type="text/css">
    <link href="css/modal.css" rel="stylesheet" type="text/css">
    <link href="css/media.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico?v=1">

    <script type="application/ld+json">
    {
    	"@context": "http://schema.org/",
    	"@type": "Organization",
    	"name": "НефтеГазХим",
    	"url": "nghim.ru",
    	"address": {
    		"@type": "PostalAddress",
    		"streetAddress": "Бутлерова, д. 7б",
    		"addressLocality": "Moscow",
    		"postalCode": "117485",
    		"addressCountry": "Russian Federation"
    	},
    	"sameAs": []
    }
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(100586194, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/100586194" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>

<body>

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
        <section class="main-menu-button">
            
            <button class="contacts-button" type="button" value="#">Написать</button>

            <div class="modal-overlay"></div>
            <div class="modal" id="cf-modal">
                <form id="contactForm" action="src/send_email.php" method="post">
                    <h2>Оставьте Ваше сообщение</h2>
                    <div class="label-float">
                        <input type="text" id="name" name="name" required placeholder=" " />
                        <label for="name">Пожалуйста представтесь</label>
                    </div>

                    <div class="label-float">
                        <input type="email" id="email" name="email" required placeholder=" " />
                        <label for="email">Ваш Email</label>
                    </div>
                    
                    <div class="label-float">
                        <input type="phone" id="phone" name="phone" placeholder=" " />
                        <label for="phone">Ваш телефон</label>
                    </div>
                    <input type="text" name="hp" class="hp-field">
                    <!-- <label for="text">Ваше сообщение</label><br> -->
                    <textarea id="text" name="text" required placeholder="Ваше сообщение:"></textarea><br><br>
                    
                    <button type="submit">Отправить</button>
                    <button type="button" class="cancel-button">Отменить</button>
                </form>
                <div id="responseMessage" style="display:none;"></div>
            </div>

            <section class="languages visibility-hidden">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <mask id="mask0_18_270" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="12"
                        height="12">
                        <circle cx="6" cy="6" r="6" fill="#D9D9D9" />
                    </mask>
                    <g mask="url(#mask0_18_270)">
                        <path d="M-6.94702 10.3164H22.7372V17.6848H-6.94702V10.3164Z" fill="#FFCE00" />
                        <path d="M-6.94702 -4.4209H22.7372V2.94752H-6.94702V-4.4209Z" fill="black" />
                        <path d="M-6.94702 2.94727H22.7372V10.3157H-6.94702V2.94727Z" fill="#DD0000" />
                        <path d="M-2.52649 0H14.4359V12.6316H-2.52649V0Z" fill="#012169" />
                        <path
                            d="M-0.538707 0L5.92821 4.76316L12.3686 0H14.4359V1.63158L8.07502 6.3421L14.4359 11.0263V12.6316H12.3156L5.95471 7.92105L-0.379685 12.6316H-2.52649V11.0526L3.80791 6.36842L-2.52649 1.68421V0H-0.538707Z"
                            fill="white" />
                        <path
                            d="M8.71111 7.39474L14.4359 11.5789V12.6316L7.2534 7.39474H8.71111ZM3.83441 7.92105L3.99344 8.8421L-1.09529 12.6316H-2.52649L3.83441 7.92105ZM14.4359 0V0.0789474L7.83648 5.02632L7.88949 3.86842L13.1107 0H14.4359ZM-2.52649 0L3.80791 4.63158H2.21768L-2.52649 1.10526V0Z"
                            fill="#C8102E" />
                        <path
                            d="M3.86092 0V12.6316H8.10152V0H3.86092ZM-2.52649 4.21053V8.42105H14.4359V4.21053H-2.52649Z"
                            fill="white" />
                        <path
                            d="M-2.52649 5.07895V7.60526H14.4359V5.07895H-2.52649ZM4.70904 0V12.6316H7.2534V0H4.70904Z"
                            fill="#C8102E" />
                    </g>
                </svg>
                <a class="language-link" href="#">En</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <mask id="mask0_18_284" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="12"
                        height="12">
                        <circle cx="6" cy="6" r="6" fill="#D9D9D9" />
                    </mask>
                    <g mask="url(#mask0_18_284)">
                        <path d="M-6.94702 10.3164H22.7372V17.6848H-6.94702V10.3164Z" fill="#FFCE00" />
                        <path d="M-6.94702 -4.4209H22.7372V2.94752H-6.94702V-4.4209Z" fill="black" />
                        <path d="M-6.94702 2.94727H22.7372V10.3157H-6.94702V2.94727Z" fill="#DD0000" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M-2.52649 0H14.7968V12.6316H-2.52649V0Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M-2.52649 0H3.24704V12.6316H-2.52649V0Z"
                            fill="#002654" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.02234 0H14.7959V12.6316H9.02234V0Z"
                            fill="#CE1126" />
                    </g>
                </svg>
                <a class="language-link" href="#">Fr</a>
            </section>
        </section>
    </nav>

    <div class="header">
        <section class="cover-rectangle-right-top">
            <a class="header-rectangle-1" href="#documents">
                <span class="header-ground-rectangle-1"></span>
                <p class="rectangle-text-link" id="rtl-1">Документы</p>
            </a>
            <a class="header-rectangle-2" href="#service">
                <span class="header-ground-rectangle-2"></span>
                <p class="rectangle-text-link" id="rtl-2">Сервис</p>
            </a>
            <a class="header-rectangle-3" href="#contacts">
                <span class="header-ground-rectangle-3"></span>
                <p class="rectangle-text-link" id="rtl-3">Контакты</p>
            </a>
        </section>
        <div class="cover-rectangle">
            <section class="services-description">
                <h2>Нефтепромысловая химия</h2>
                <p>Наша продукция производится с использованием передовых технологий и строгих стандартов качества,
                    что гарантирует её надежность и высокую производительность в самых сложных условиях эксплуатации.
                </p>
                <p>На текущий момент в разработке:</p>
                <ul>
                    <li>Поглотитель кислорода ПК 107</li>
                    <li>Нейтрализатор сероводорода НС 108</li>
                    <li>Буровая смазывающая присадка БСП 109</li>
                </ul>

            </section>
            <section class="cover-rectangle-right-bottom">
                <img src="img/chemFormula1.png" class="chem-f-1" alt="surface solution chemical formula">
            </section>

            <img src="img/ravnovesie-desulfid-sulfid.jpg" class="chem-f-2" alt="Surface solution formula">
            <img src="img/factory.svg" id="header-img" width="909" height="654">
        </div>

        <div class="main-header">
            <div class="main-description">
                <div class="main-heading">
                    <h1>ООО «НефтеГазХим» - подбор, производство и поставка химических реагентов для нефтегазовых
                        компаний</h1>
                </div>
                <div class="main-article">
                    <p id="ma-top">
                        Мы предлагаем комплексные решения, которые включают подбор, производство и поставку
                        высококачественных химических продуктов,
                        соответствующих мировым стандартам безопасности и качества.
                    </p>

                    <p id="ma-bottom">
                        Наша миссия — предоставление услуг на высоком уровне и укрепление позиций на рынке
                        за счет внедрения передовых технологий и инновационных подходов.
                    </p>
                </div>
                <div class="main-description-buttons">
                    <a class="md-button-left" type="button" href="#products">Нефтепромысловая химия</a>
                    <a class="md-button-right" type="button" href="#aditional-solutions">Дополнительные решения</a>
                </div>
            </div>
        </div>
        <div id="services-rectangle-group">
            <a name="products"></a>
            <div class="services-rectangle-group">
                <div class="box-wrapper">
                    <div class="services-rectangle">
                        <div class="box-content">
                            None visible
                        </div>
                        <div class="box-background"></div>
                    </div>
                </div>
                <div class="box-wrapper">
                    <div class="services-rectangle">
                        <div class="box-content">
                            <a class="rectangle-link" href="javascript:void(0)">
                                <p>Деэмульгатор <br>ДЭМ 105-2</p>
                                <div class="cross-stitch"></div>
                                <p class="rectangle-description">
                                    Применяется при подготовке нефти для разделения эмульсии на составляющие.
                                </p>
                            </a>
                        </div>
                        <div class="box-background"></div>
                    </div>
                </div>
                <div class="box-wrapper">
                    <div class="services-rectangle">
                        <div class="box-content">
                            <a class="rectangle-link" href="javascript:void(0)">
                                <p>ИСО 103-3 <br>Ингибитор <br>солеотложений</p>
                                <div class="cross-stitch"></div>
                                <p class="rectangle-description">
                                    Применяются при добыче, транспортировке и подготовки нефти для
                                    предотвращения отложения солей на нефтепромысловом оборудовании.
                                </p>
                            </a>
                        </div>
                        <div class="box-background"></div>
                    </div>
                </div>
                <div class="box-wrapper">
                    <div class="services-rectangle">
                        <div class="box-content">
                            <a class="rectangle-link" href="javascript:void(0)">
                                <p>Растворитель <br>АСПО РАСПО 100-4</p>
                                <div class="cross-stitch"></div>
                                <p class="rectangle-description">
                                    Применяются при добыче, транспортировке и подготовки нефти для
                                    удаления отложений АСПО на нефтепромысловом оборудовании.
                                </p>
                            </a>
                        </div>
                        <div class="box-background"></div>
                    </div>
                </div>
                <div class="box-wrapper">
                    <div class="services-rectangle">
                        <div class="box-content">
                            <p>ИКОР 106-5<br>Ингибитор коррозии</p>
                            <div class="cross-stitch"></div>
                            <p class="rectangle-description">
                                Применяются при добыче, транспортировке и подготовки нефти для снижения
                                коррозионного
                                воздействия на нефтепромысловое оборудование.
                            </p>
                        </div>
                        <div class="box-background"></div>
                    </div>
                </div>
                <div class="box-wrapper">
                    <div class="services-rectangle">
                        <div class="box-content">
                            <a class="rectangle-link" href="javascript:void(0)">
                                <p>Ингибитор <br>АСПО ИАСПО 102-6</p>
                                <div class="cross-stitch"></div>
                                <p class="rectangle-description">
                                    Применяются при добыче, транспортировке и подготовки нефти для
                                    предотвращения отложений АСПО на нефтепромысловом оборудовании.
                                </p>
                            </a>
                        </div>
                        <div class="box-background"></div>
                    </div>
                </div>
                <div class="box-wrapper">
                    <div class="services-rectangle">
                        <div class="box-content">
                            <a class="rectangle-link" href="javascript:void(0)">
                                <p>ПТП 104-7 <br>Противотурбулентная <br>присадка</p>
                                <div class="cross-stitch"></div>
                                <p class="rectangle-description">
                                    Применяется при транспортировке нефти, нефтепродуктов и газового
                                    конденсата для увеличения пропускной способности трубопроводов.
                                </p>
                            </a>
                        </div>
                        <div class="box-background"></div>
                    </div>
                </div>
                <div class="box-wrapper">
                    <div class="services-rectangle">
                        <div class="box-content">
                            <a class="rectangle-link" href="javascript:void(0)">
                                <p>ДРП 101-8 <br>Депрессорная <br>присадка</p>
                                <div class="cross-stitch"></div>
                                <p class="rectangle-description">
                                    Применяется при транспортировке нефти, нефтепродуктов и газового
                                    конденсата для снижения вязкости перекачиваемой <br>среды.
                                </p>
                            </a>
                        </div>
                        <div class="box-background"></div>
                    </div>
                </div>
                <div class="box-wrapper">
                    <div class="services-rectangle">
                        <div class="box-content">
                            None visible
                        </div>
                        <div class="box-background"></div>
                    </div>
                </div>
            </div>
            <div class="main-services"></div>
        </div>
    </div>

    <div class="main-bottom">
        <a name="reagents"></a>
        <div class="reagent-card-wrapper">
            <h2>Химические реагенты и материалы</h2>
            <div class="main-advantages-subheading">
                <p class="subheading">
                    обеспечивают надежность и эффективность на всех этапах нефтегазового производства.
                </p>
            </div>
            <div class="reagent-card-content">
                <div class="reagent-card">
                    <img src="img/transitoil-icon.png" alt="Блок Добычи">
                    <h3>Блок Транспортировки</h3>
                    <ul>
                        <li>Ингибитор коррозии</li>
                        <li>Ингибитор солеотложений</li>
                        <li>Противотурбулентная присадка</li>
                        <li>Депрессорная присадка</li>
                    </ul>
                </div>
                <div class="reagent-card">
                    <img src="img/drilling-icon.png" alt="">
                    <h3>Блок Бурения</h3>
                    <ul>
                        <li>Гидрофобизатор</li>
                        <li>Регулятор реологии</li>
                        <li>Ингибитор глин</li>
                        <li>Буровая смазывающая присадка</li>
                    </ul>
                </div>
                <div class="reagent-card">
                    <img src="img/prepare-drilling-icon.png" alt="">
                    <h3>Блок Подготовки</h3>
                    <ul>
                        <li>Деэмульгатор</li>
                        <li>Поглотитель кислорода</li>
                        <li>Нейтрализатор сероводорода</li>
                        <li>Пеногаситель</li>
                    </ul>
                </div>
                <div class="reagent-card">
                    <img src="img/production-oil-icon.png" alt="Блок Добычи">
                    <h3>Блок Добычи</h3>
                    <ul>
                        <li>Ингибитор коррозии</li>
                        <li>Ингибитор солеотложений</li>
                        <li>Ингибитор и растворитель АСПО</li>
                        <li>Растворитель гидратов</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-advantages">
            <a name="service"></a>
            <div class="main-advantages-heading">
                <h2>Предлагаемые решения</h2>
            </div>
            <div class="main-advantages-subheading">
                <p class="subheading">
                    ООО «НефтеГазХим» охватывают весь цикл работы с химическими реагентами.
                    Мы обеспечиваем индивидуальный подход и испытание продукции с учетом конкретных задач и условий
                    эксплуатации.
                </p>
            </div>
            <section class="main-advantages-cards">
                <div class="ma-vcard visibility-none" id="mac-1">
                    <div class="mac-content">
                        <p class="card-number">00</p>
                        <span class="card-plus">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 17 17"
                                fill="none">
                                <path
                                    d="M16.9765 9.46582L16.9765 7.66519H9.83781L9.83781 0.526535H8.03719L8.03719 7.66519H0.898527L0.898527 9.46582L8.03719 9.46582L8.03719 16.6045H9.83781L9.83781 9.46582L16.9765 9.46582Z"
                                    fill="#DA5D24" />
                            </svg>
                        </span>
                        <p class="card-description-header">Civil инжиниринг</p>
                        <span class="card-description">Собственный штат высококвалифицированных специалистов -
                            лаборантов</span>
                    </div>
                </div>
                <div class="ma-vcard" id="mac-2">
                    <div class="mac-content">
                        <p class="card-number">01</p>
                        <span class="card-plus">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 17 17"
                                fill="none">
                                <path
                                    d="M16.9765 9.46582L16.9765 7.66519H9.83781L9.83781 0.526535H8.03719L8.03719 7.66519H0.898527L0.898527 9.46582L8.03719 9.46582L8.03719 16.6045H9.83781L9.83781 9.46582L16.9765 9.46582Z"
                                    fill="#DA5D24" />
                            </svg>
                        </span>
                        <p class="card-description-header">Разработка</p>
                        <span class="card-description">Собственный штат высококвалифицированных специалистов -
                            лаборантов</span>
                    </div>
                </div>
                <div class="ma-vcard" id="mac-3">
                    <div class="mac-content">
                        <p class="card-number">02</p>
                        <span class="card-plus">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 17 17"
                                fill="none">
                                <path
                                    d="M16.9765 9.46582L16.9765 7.66519H9.83781L9.83781 0.526535H8.03719L8.03719 7.66519H0.898527L0.898527 9.46582L8.03719 9.46582L8.03719 16.6045H9.83781L9.83781 9.46582L16.9765 9.46582Z"
                                    fill="#DA5D24" />
                            </svg>
                        </span>
                        <p class="card-description-header">Подбор и испытание</p>
                        <span class="card-description">Собственный лабораторный комплекс. Инженерное сопровождение в
                            ходе опытно-промысловых испытаний</span>
                    </div>
                </div>
                <div class="ma-vcard" id="mac-4">
                    <div class="mac-content">
                        <p class="card-number">03</p>
                        <span class="card-plus">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 17 17"
                                fill="none">
                                <path
                                    d="M16.9765 9.46582L16.9765 7.66519H9.83781L9.83781 0.526535H8.03719L8.03719 7.66519H0.898527L0.898527 9.46582L8.03719 9.46582L8.03719 16.6045H9.83781L9.83781 9.46582L16.9765 9.46582Z"
                                    fill="#DA5D24" />
                            </svg>
                        </span>
                        <p class="card-description-header">Производство</p>
                        <span class="card-description">Производственные площадки мощностью до 20 000 т/год</span>
                    </div>
                </div>
                <div class="ma-vcard" id="mac-5">
                    <div class="mac-content">
                        <p class="card-number">04</p>
                        <span class="card-plus">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 17 17"
                                fill="none">
                                <path
                                    d="M16.9765 9.46582L16.9765 7.66519H9.83781L9.83781 0.526535H8.03719L8.03719 7.66519H0.898527L0.898527 9.46582L8.03719 9.46582L8.03719 16.6045H9.83781L9.83781 9.46582L16.9765 9.46582Z"
                                    fill="#DA5D24" />
                            </svg>
                        </span>
                        <p class="card-description-header">Продажа и поставка</p>
                        <span class="card-description">Логистические цепочки по всей территории РФ, в любой таре
                            (цистерны, мешки, бочки, еврокубы)</span>
                    </div>
                </div>
                <div class="ma-vcard" id="mac-6">
                    <div class="mac-content">
                        <p class="card-number">05</p>
                        <span class="card-plus">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 17 17"
                                fill="none">
                                <path
                                    d="M16.9765 9.46582L16.9765 7.66519H9.83781L9.83781 0.526535H8.03719L8.03719 7.66519H0.898527L0.898527 9.46582L8.03719 9.46582L8.03719 16.6045H9.83781L9.83781 9.46582L16.9765 9.46582Z"
                                    fill="#DA5D24" />
                            </svg>
                        </span>
                        <p class="card-description-header">Дополнительные решения</p>
                        <span class="card-description">Предоставление современного оборудования, которое позволяет
                            эффективно
                            использовать нефтехимию на всех этапах добычи и переработки углеводородов.</span>
                    </div>
                </div>
            </section>
            <a name="aditional-solutions"></a>
        </div>
        <div class="main-experience">
            <div class="main-experience-heading">
                <span class="me-heading">
                    <h2>Дополнительные решения</h2>
                </span>
                <p class="subheading">Мы предлагаем комплексный подход, включающий разработку специализированных систем
                    дозирования, хранения и транспортировки реагентов,
                    а также индивидуальные решения для повышения эффективности и безопасности производственных
                    процессов, помогающий нашим клиентам поддерживать
                    высокий уровень производительности и стабильности в их операционной деятельности.
                </p>
                <p class="subheading"> Наши дополнительные решения ориентированы на оптимизацию технологических
                    процессов и снижение затрат,
                    что делает нас надежным партнером для компаний, стремящихся к максимальной эффективности и
                    устойчивому развитию на рынке.
                </p>
            </div>
            <div class="me-competitions">

                <div id="slider-container">
                    <div id="slider">
                        <div class="slide">
                            <span class="slide-img">
                                <img src="img/KSP-201.png" alt="Контейнеры скважинные погружные">
                            </span>
                            <span class="slide-description">
                                <h3 class="sl-heading">
                                    Контейнеры скважинные погружные КСП 201
                                </h3>
                                <p class="sl-description">
                                    Контейнер устанавливается под глубинно-насосным оборудованием во время его монтажа
                                    на скважине.
                                    Ингибитор находящийся в твердой форме растворяется в контейнере при контакте со
                                    скважинной водой или нефтью и выносится на поверхность,
                                    защищая стенки погружного оборудования от солеотложений, коррозии, АСПО и т.д.
                                </p>
                            </span>
                        </div>
                        <div class="slide">
                            <span class="slide-img">
                                <img src="img/UDR-210.png" alt="Установка дозирования реагента">
                            </span>
                            <span class="slide-description">
                                <h3 class="sl-heading">
                                    Установка дозирования реагента УДР 210
                                </h3>
                                <p class="sl-description">
                                    Установки дозирования реагента «УДР 210» предназначены для объемного напорного
                                    дозирования
                                    жидких химических реагентов и ввода их в трубопровод системы подготовки и транспорта
                                    нефти,
                                    дизельного топлива, газового конденсата, других жидких углеводородов и т.д..
                                </p>
                            </span>
                        </div>
                        <!--                        <div class="slide">-->
                        <!--                            <span class="slide-img">-->
                        <!--                                <img src="img/нефтяная-скважина-ночи-19376774.jpg" alt="Image 3">-->
                        <!--                            </span>-->
                        <!--                            <span class="slide-description">-->
                        <!--                                <h3 class="sl-heading">-->
                        <!--                                    Стандарты безопасности и качества мирового класса,-->
                        <!--                                    активная политика по развитию-->
                        <!--                                </h3>-->
                        <!--                                <p class="sl-description">-->
                        <!--                                    Стандарты безопасности и качества мирового класса-->
                        <!--                                </p>-->
                        <!--                            </span>-->
                        <!--                        </div>-->
                        <!--                        <div class="slide">-->
                        <!--                            <span class="slide-img">-->
                        <!--                                <img src="img/сверлить-внутри-аляску-25877404.jpg" alt="Image 3">-->
                        <!--                            </span>-->
                        <!--                            <span class="slide-description">-->
                        <!--                                <h3 class="sl-heading">-->
                        <!--                                    Стандарты безопасности и качества мирового класса,-->
                        <!--                                    активная политика по развитию-->
                        <!--                                </h3>-->
                        <!--                                <p class="sl-description">-->
                        <!--                                    Стандарты безопасности и качества мирового класса.-->
                        <!--                                </p>-->
                        <!--                            </span>-->
                        <!--                        </div>-->
                        <!--                        <div class="slide">-->
                        <!--                            <span class="slide-img">-->
                        <!--                                <img src="img/WinterDrillingII%201.jpg" alt="Image 3">-->
                        <!--                            </span>-->
                        <!--                            <span class="slide-description">-->
                        <!--                                <h3 class="sl-heading">-->
                        <!--                                    Стандарты безопасности и качества мирового класса,-->
                        <!--                                    активная политика по развитию-->
                        <!--                                </h3>-->
                        <!--                                <p class="sl-description">-->
                        <!--                                    Стандарты безопасности и качества мирового класса.-->
                        <!--                                </p>-->
                        <!--                            </span>-->
                        <!--                        </div>-->
                    </div>


                    <div class="pagination" id="pagination">
                        <div class="pagination-item" onclick="goToSlide(0)">
                            <section class="pgn-content">
                                <p class="pgn-number">01</p>
                                <span class="pgn-plus">
                                    <img src="img/pgn-plus.svg">
                                    <!--                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 17 17"-->
                                    <!--                                        fill="none">-->
                                    <!--                                        <path-->
                                    <!--                                            d="M16.9765 9.46582L16.9765 7.66519H9.83781L9.83781 0.526535H8.03719L8.03719 7.66519H0.898527L0.898527 9.46582L8.03719 9.46582L8.03719 16.6045H9.83781L9.83781 9.46582L16.9765 9.46582Z"-->
                                    <!--                                            fill="#2F3034" />-->
                                    <!--                                    </svg>-->
                                </span>
                                <p class="pgn-description">Контейнеры скважинные погружные КСП 201</p>
                            </section>
                        </div>
                        <div class="pagination-item" onclick="goToSlide(1)">
                            <section class="pgn-content">
                                <p class="pgn-number">02</p>
                                <span class="pgn-plus">
                                    <img src="img/pgn-plus.svg">
                                </span>
                                <p class="pgn-description">Установка дозирования реагента УДР 210</p>
                            </section>
                        </div>
                        <!-- <div class="pagination-item" onclick="goToSlide(2)">
                            <section class="pgn-content">
                                <p class="pgn-number">03</p>
                                <span class="pgn-plus">
                                    <img src="img/pgn-plus.svg">
                                </span>
                                <p class="pgn-description">Такие вот скважины и такие тоже</p>
                            </section>
                        </div> -->
                        <!-- <div class="pagination-item" onclick="goToSlide(3)">
                            <section class="pgn-content">
                                <p class="pgn-number">04</p>
                                <span class="pgn-plus">
                                    <img src="img/pgn-plus.svg">
                                </span>
                                <p class="pgn-description">Такие услуги и не только такие</p>
                            </section>
                        </div> -->
                        <!-- <div class="pagination-item" onclick="goToSlide(4)">
                            <section class="pgn-content">
                                <p class="pgn-number">05</p>
                                <span class="pgn-plus">
                                    <img src="img/pgn-plus.svg">
                                </span>
                                <p class="pgn-description">И оборудование есть</p>
                            </section>
                        </div> -->
                        <!--                        <div class="next-prev-wrapper">-->
                        <div id="prev"><img src="img/prev.svg"></div>
                        <div id="next"><img src="img/next.svg"></div>
                        <!--                        </div>-->
                    </div><a name="documents"></a>
                </div>
            </div>

        </div>
        <div class="main-documents-container">
            <div class="documents-block documents-description">
                <div class="main-documents-heading">
                    <span class="me-heading">
                        <h2>Документация</h2>
                    </span>
                    <p>Все поставляемые реагенты имеют:</p>
                    <ul>
                        <li>Сертификаты соответствия «Нефтепромхим»</li>
                        <li>Сертификаты соответствия «КАРТЭК»</li>
                        <li>Сертификаты соответствия «ТЭКСЕРТ»</li>
                        <li>Сертификаты на применение</li>
                    </ul>
                    <ul>
                        <li>Технические условия</li>
                        <li>Инструкции на применение</li>
                        <li>Протоколы анализа на ХОС</li>
                        <li>Паспорта безопасности</li>
                    </ul>
                </div>
            </div>
            <div class="documents-block documents-slider">
                <div class="frame">
                    <div class="pics">
                        <div class="pic pic-1">
                            <img src="img/sert-1.jpg" alt="" />
                        </div>
                        <div class="pic pic-2">
                            <img src="img/sert-2.jpg" alt="" />
                        </div>
                        <div class="pic pic-3">
                            <img src="img/sert-3.jpg" alt="" />
                        </div>
                        <div class="pic pic-4">
                            <img src="img/sert-4.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="foo-triangle">
            <a name="contacts"></a>
            <svg xmlns="http://www.w3.org/2000/svg" width="123" height="137" viewBox="0 0 143 157" fill="none">
                <path d="M7.62939e-06 156.8L8.10418e-07 0.799805L143 156.8L7.62939e-06 156.8Z" fill="#06255B" />
            </svg>
        </div>
        <div class="foo-body">
            <div class="foo-contacts">
                <img src="img/VecNGH1_S_1.svg" class="foo-logo" alt="NGH logo">
                <div class="foo-contact-section">
                    <p><strong>Контакты:</strong></p>
                    <p>117485, город Москва, ул Бутлерова, д. 7б, ап. 155</p>
                    <a href="tel:89154081214">+7 915 408-12-14 </a>
                    <br><br>
                    <p>Генеральный директор ООО «НефтеГазХим»<br>Бызов Алексей Юрьевич</p>
                    <a href="mailto:info@nghim.ru">info@nghim.ru</a>
                    <!-- <span class="foo-social">
                        <p><strong>Мы в соцсетях:</strong></p>
                        <a href="https://vk.com" target="_blank"><img src="img/facebook.svg" alt="logo icon"></a>
                        <a href="https://web.telegram.org/a/" target="_blank"><img src="img/Instagram.svg"
                                alt="logo icon"></a>
                    </span> -->
                </div>
            </div>
        </div>
        <div class="foo-copyright">
            <p>Imprint l 2023</p>
            <p>Copyright : НефтеГазХим, все права защищены</p>
            <p class="design-name">Consulting & Structural Engineering Design</p>
        </div>
    </footer>
    <script src="js/menu.js"></script>
    <script src="js/main.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/modal.js"></script>
</body>

</html>