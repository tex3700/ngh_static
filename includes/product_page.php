
<div class="product-page">

    <a class="product-back-link" href="/">← Вернуться на главную</a>

    <h1 class="product-title"><?= $product['name']?></h1>

    <div class="product-description">
        <p class="subheading"><?= $product['full_description']?></p>
    </div>

    <div class="product-documents">
        <h3>Сопроводительная документация для <?= $product['short_name']?></h3>
        <div class="documents-list">
            <?php if (empty($documents)): ?>
                <p>Документы не найдены.</p>
            <?php else: ?>
                <?php foreach ($documents as $doc): ?>
                    <a class="document-card" href="<?= htmlspecialchars($doc['file']) ?>" download>
                        <div class="document-info">
                            <span class="document-title"><?= htmlspecialchars($doc['title']) ?></span>
                        </div>
                        <div class="document-icons">
                            <div class="document-download-icon"><img src="/img/icondownload.svg"></div>
                            <div class="document-icon document-icon--<?= $doc['icon'] ?>">
                                <?= $doc['ext'] ?>
                            </div>
                            <!--<div class="document-download-icon">&#8595;</div>-->
                        </div>

                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

</div>
