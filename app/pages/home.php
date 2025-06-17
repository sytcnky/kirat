<section class="hero">
    <div class="hero-content">
        <div class="container">
            <div class="row">
                <div class="col ">
                    <img src="/assets/img/amblem.png" alt="Kırat Hukuk"></div>
                <div class="col align-content-center">
                    <h3 class="text-white">Adaletin terazisi şaşmaz</h3>
                    <h1 class="text-white display-4">Bizimle güvende hissedin</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-overlay"></div>
</section>

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
