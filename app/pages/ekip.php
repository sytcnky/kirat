<?php
// Dil ve veri yükleme
$lang = $_GET['lang'] ?? 'tr';
if (!in_array($lang, ['tr', 'en'])) { $lang = 'tr'; }

$langData = json_decode(file_get_contents(__DIR__ . '/../../data/lang/' . $lang . '.json'), true);
$ekip = json_decode(file_get_contents(__DIR__ . '/../../data/ekip.json'), true);
?>

<section class="py-5 text-center bg-secondary">
    <div class="container">
        <h1 class="fw-bold mb-3"><?= htmlspecialchars($langData['ekip']['title'] ?? 'Ekibimiz') ?></h1>
        <p class="lead font-serif-italic text-primary"><?= htmlspecialchars($langData['ekip']['subtitle'] ?? '') ?></p>
    </div>
</section>

<div class="container py-5">
    <div class="row g-4">
        <?php foreach ($ekip as $item): ?>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="<?= htmlspecialchars($item['image']) ?>"
                         class="card-img-top cursor-pointer"
                         alt="<?= htmlspecialchars($item['name'][$lang]) ?>"
                         data-id="<?= htmlspecialchars($item['id']) ?>"
                         data-bs-toggle="modal"
                         data-bs-target="#genericModal">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= htmlspecialchars($item['name'][$lang]) ?></h5>
                        <p class="text-muted"><?= htmlspecialchars($item['title'][$lang]) ?></p>
                        <p class="card-text"><?= htmlspecialchars($item['short'][$lang]) ?></p>
                        <button class="btn btn-outline-primary btn-sm"
                                data-id="<?= htmlspecialchars($item['id']) ?>"
                                data-bs-toggle="modal"
                                data-bs-target="#genericModal">
                            <?= htmlspecialchars($langData['ekip']['button'] ?? 'Detay') ?>
                        </button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="modal fade" id="genericModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
            </div>
            <div class="modal-body overflow-auto p-4" id="modalContent"></div>
        </div>
    </div>
</div>

<script>
    const ekip = <?= json_encode($ekip, JSON_UNESCAPED_UNICODE) ?>;
    const lang = "<?= $lang ?>";

    document.querySelectorAll("[data-id]").forEach(btn => {
        btn.addEventListener("click", () => {
            const id = btn.dataset.id;
            const data = ekip.find(item => item.id === id);
            if (data) {
                const html = `<h2 class="mb-3">${data.name[lang]}</h2><h5 class="mb-3 text-muted">${data.title[lang]}</h5>${data.detail[lang]}`;
                document.getElementById("modalContent").innerHTML = html;
            } else {
                document.getElementById("modalContent").innerHTML = "<p>İçerik bulunamadı.</p>";
            }
        });
    });
</script>
