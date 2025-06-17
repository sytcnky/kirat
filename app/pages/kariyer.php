<?php
$lang = $_GET['lang'] ?? 'tr';
if (!in_array($lang, ['tr', 'en'])) { $lang = 'tr'; }

$langData = json_decode(file_get_contents(__DIR__ . '/../../data/lang/' . $lang . '.json'), true);
?>

<section class="page-title" style="background-image: url('/assets/img/miras-hukuku.png')">
    <div class="container">
        <h1 class="text-white fw-bold mb-0"><?= htmlspecialchars($langData['career']['title'] ?? 'Kariyer') ?></h1>
        <p class="lead font-serif-italic k-yellow"><?= htmlspecialchars($langData['career']['subtitle'] ?? '') ?></p>
    </div>
</section>

<div class="container py-5">
    <?= $langData['career']['content'] ?>
</div>

<div class="container pb-5">
    <div class="row">
        <div class="col-lg-6 mb-5">
            <h3 class="mb-4">Açık Posizyonlar</h3>
            <div class="row g-4">

                <!-- İlan 1: Kıdemli Avukat -->
                <div class="col-12">
                    <div class="card h-100 shadow-sm bg-light-subtle">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Kıdemli Avukat</h5>
                            <p class="card-text">Ticaret ve şirketler hukuku alanında deneyimli avukat arayışımız bulunmaktadır.</p>
                            <ul class="list-unstyled small">
                                <li><strong>Çalışma Şekli:</strong> Tam zamanlı</li>
                                <li><strong>Tecrübe:</strong> En az 3 yıl</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- İlan 2: Stajyer Avukat -->
                <div class="col-12">
                    <div class="card h-100 shadow-sm bg-light-subtle">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Stajyer Avukat</h5>
                            <p class="card-text">Hukuk fakültesi mezunu, araştırma ve raporlama yetkinliği yüksek takım arkadaşları arıyoruz.</p>
                            <ul class="list-unstyled small">
                                <li><strong>Çalışma Şekli:</strong> Tam zamanlı</li>
                                <li><strong>Tecrübe:</strong> Mezuniyet sonrası staj</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-6">
            <h3 class="mb-4"><?= htmlspecialchars($langData['career']['form_title'] ?? 'Başvuru Formu') ?></h3>

            <form action="#" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label"><?= htmlspecialchars($langData['career']['name'] ?? 'Ad Soyad') ?></label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label"><?= htmlspecialchars($langData['career']['email'] ?? 'E-Posta') ?></label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label"><?= htmlspecialchars($langData['career']['phone'] ?? 'Telefon') ?></label>
                    <input type="tel" name="phone" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label"><?= htmlspecialchars($langData['career']['message'] ?? 'Mesajınız') ?></label>
                    <textarea name="message" class="form-control" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label"><?= htmlspecialchars($langData['career']['cv'] ?? 'CV Yükle') ?></label>
                    <input type="file" name="cv" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary"><?= htmlspecialchars($langData['career']['submit'] ?? 'Gönder') ?></button>
            </form>
        </div>
    </div>
</div>
