<?php
// Dil ve veri yükleme
$lang = $_GET['lang'] ?? 'tr';
if (!in_array($lang, ['tr', 'en'])) { $lang = 'tr'; }

$langData = json_decode(file_get_contents(__DIR__ . '/../../data/lang/' . $lang . '.json'), true);
$ekip = json_decode(file_get_contents(__DIR__ . '/../../data/ekip.json'), true);
?>

<section class="bg-secondary page-title" style="background-image: url('/assets/img/lawyers.jpg')">
    <div class="container">
        <h1 class="text-white fw-bold mb-0"><?= htmlspecialchars($langData['ekip']['title'] ?? 'Ekibimiz') ?></h1>
        <p class="lead font-serif-italic k-yellow"><?= htmlspecialchars($langData['ekip']['subtitle'] ?? '') ?></p>
    </div>
</section>

<div class="container py-5">
    <div class="row g-4">
        <?php foreach ($ekip as $item): ?>
            <div class="col-6 col-lg-3">
                <div class="card h-100 shadow-sm">
                    <img src="<?= htmlspecialchars($item['image']) ?>"
                         class="card-img-top cursor-pointer"
                         alt="<?= htmlspecialchars($item['name']) ?>"
                         data-id="<?= htmlspecialchars($item['id']) ?>"
                         data-bs-toggle="modal"
                         data-bs-target="#genericModal">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= htmlspecialchars($item['name']) ?></h5>
                        <p class="text-muted"><?= htmlspecialchars($item['title']) ?></p>
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
                const html = `
                    <div class="row">
                        <div class="col-md-4 text-center mb-4">
                            <img src="${data.image}" class="img-fluid rounded shadow-sm mb-3" alt="${data.name}">
                            <h3>${data.name}</h3>
                            <p class="text-muted">${data.title}</p>
                            <p><a href="mailto:${data.email}">${data.email}</a></p>
                        </div>
                        <div class="col-md-8">
                            <h5>${lang === 'tr' ? 'Biyografi' : 'Biography'}</h5>
                            <p>${data.bio[lang]}</p>

                            <h5 class="mt-4">${lang === 'tr' ? 'Eğitim' : 'Education'}</h5>
                            <p>${data.education[lang].replaceAll("\\n", "<br>")}</p>

                            <h5 class="mt-4">${lang === 'tr' ? 'Uzmanlık Alanları' : 'Practice Areas'}</h5>
                            <p>${data.practice[lang]}</p>

                            <h5 class="mt-4">${lang === 'tr' ? 'Yabancı Diller' : 'Languages'}</h5>
                            <p>${data.languages[lang]}</p>

                            <h5 class="mt-4">${lang === 'tr' ? 'Üyelikler' : 'Memberships'}</h5>
                            <p>${data.memberships[lang]}</p>
                        </div>
                    </div>
                `;
                document.getElementById("modalContent").innerHTML = html;
            } else {
                document.getElementById("modalContent").innerHTML = "<p>İçerik bulunamadı.</p>";
            }
        });
    });
</script>
