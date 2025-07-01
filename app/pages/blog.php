<?php

$bloglar = loadJsonData('blog.json');
?>

<section class="bg-secondary page-title" style="background-image: url('/assets/img/template-icra-ve-iflas-hukuku.png')">
    <div class="container">
        <h1 class="text-white fw-bold mb-0"><?= htmlspecialchars($langData['blog']['title'] ?? 'Blog') ?></h1>
        <p class="lead font-serif-italic k-yellow"><?= htmlspecialchars($langData['blog']['subtitle'] ?? '') ?></p>
    </div>
</section>

<section class="container py-5">

    <div class="row g-4">
        <?php foreach ($bloglar as $item): ?>
            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?= htmlspecialchars($item['title'][$lang]) ?></h5>
                        <p class="card-text"><?= htmlspecialchars($item['summary'][$lang]) ?></p>
                        <a href="/blog/<?= htmlspecialchars($item['slug']) ?>?lang=<?= $lang ?>" class="mt-auto btn btn-outline-primary">
                            <?= $lang == 'tr' ? 'Devamını Oku' : 'Read More' ?>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
