<section class="container py-5 text-center">
    <h1 class="mb-4"><?= htmlspecialchars($langData['site']['title']) ?></h1>
    <p class="lead"><?= $lang === 'tr' ? 'Kurumsal hukuki çözümler, güvenilir temsil.' : 'Corporate legal solutions, reliable representation.' ?></p>

    <div class="row g-4 mt-5">
        <div class="col">
            <a href="/hakkimizda?lang=<?= $lang ?>" class="btn btn-outline-primary px-4 py-3"><?= htmlspecialchars($langData['menu']['about']) ?></a>
        </div>
        <div class="col">
            <a href="/faaliyet-alanlari?lang=<?= $lang ?>" class="btn btn-outline-primary px-4 py-3"><?= htmlspecialchars($langData['menu']['services']) ?></a>
        </div>
        <div class="col">
            <a href="/ekip?lang=<?= $lang ?>" class="btn btn-outline-primary px-4 py-3"><?= htmlspecialchars($langData['menu']['team']) ?></a>
        </div>
        <div class="col">
            <a href="/blog?lang=<?= $lang ?>" class="btn btn-outline-primary px-4 py-3"><?= htmlspecialchars($langData['menu']['blog']) ?></a>
        </div>
        <div class="col">
            <a href="/kariyer?lang=<?= $lang ?>" class="btn btn-outline-primary px-4 py-3"><?= htmlspecialchars($langData['menu']['career']) ?></a>
        </div>
        <div class="col">
            <a href="/iletisim?lang=<?= $lang ?>" class="btn btn-outline-primary px-4 py-3"><?= htmlspecialchars($langData['menu']['contact']) ?></a>
        </div>
    </div>
</section>
