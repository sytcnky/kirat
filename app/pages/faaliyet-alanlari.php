<?php
// Dil ayarını çekiyoruz
$lang = $_GET['lang'] ?? 'tr';
if (!in_array($lang, ['tr', 'en'])) { $lang = 'tr'; }

// JSON dosyalarını yüklüyoruz
$langData = json_decode(file_get_contents(__DIR__ . '/../../data/lang/' . $lang . '.json'), true);
$faaliyetler = json_decode(file_get_contents(__DIR__ . '/../../data/faaliyetler.json'), true);
?>

<section class="page-title" style="background-image: url('/assets/img/template-icra-ve-iflas-hukuku.png')">
    <div class="container">
        <h1 class="text-white fw-bold mb-0"><?= htmlspecialchars($langData['faaliyet']['title'] ?? 'Faaliyet Alanlarımız') ?></h1>
        <p class="lead font-serif-italic k-yellow"><?= htmlspecialchars($langData['faaliyet']['subtitle'] ?? '') ?></p>
    </div>
</section>

<div class="container py-5">
    <div class="row g-4">
        <?php foreach ($faaliyetler as $item): ?>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-sm">
                    <img src="<?= htmlspecialchars($item['image']) ?>"
                         class="card-img-top cursor-pointer"
                         alt="<?= htmlspecialchars($item['title'][$lang]) ?>"
                         data-id="<?= htmlspecialchars($item['id']) ?>"
                         data-bs-toggle="modal"
                         data-bs-target="#genericModal">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($item['title'][$lang]) ?></h5>
                        <p class="card-text"><?= htmlspecialchars($item['short'][$lang]) ?></p>
                        <button class="btn btn-outline-primary btn-sm mt-auto"
                                data-id="<?= htmlspecialchars($item['id']) ?>"
                                data-bs-toggle="modal"
                                data-bs-target="#genericModal">
                            <i class="bi bi-chevron-right"></i>
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
            <div class="modal-body overflow-auto p-4 modal-inner-container" id="modalContent"></div>
        </div>
    </div>
</div>

<script>
    // JSON datayı PHP'den direkt JS'ye yolluyoruz:
    const faaliyetler = <?= json_encode($faaliyetler, JSON_UNESCAPED_UNICODE) ?>;
    const lang = "<?= $lang ?>";

    document.querySelectorAll("[data-id]").forEach(btn => {
        btn.addEventListener("click", () => {
            const id = btn.dataset.id;
            const data = faaliyetler.find(item => item.id === id);
            if (data) {
                const html = `<h2 class="mb-3">${data.title[lang]}</h2>${data.detail[lang]}`;
                document.getElementById("modalContent").innerHTML = html;
            } else {
                document.getElementById("modalContent").innerHTML = "<p>İçerik bulunamadı.</p>";
            }
        });
    });
</script>
