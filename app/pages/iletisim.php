<?php
$lang = $_GET['lang'] ?? 'tr';
if (!in_array($lang, ['tr', 'en'])) { $lang = 'tr'; }

$langData = json_decode(file_get_contents(__DIR__ . '/../../data/lang/' . $lang . '.json'), true);
?>

<section class="py-5 text-center bg-secondary">
    <div class="container">
        <h1 class="fw-bold mb-3"><?= htmlspecialchars($langData['contact']['title'] ?? 'İletişim') ?></h1>
        <p class="lead font-serif-italic text-primary"><?= htmlspecialchars($langData['contact']['subtitle'] ?? '') ?></p>
    </div>
</section>

<div class="container py-5">
    <div class="row g-5">
        <div class="col-md-6">
            <?= $langData['contact']['content'] ?>
        </div>

        <div class="col-md-6">
            <h3 class="mb-4"><?= htmlspecialchars($langData['contact']['form_title'] ?? 'Bize Ulaşın') ?></h3>

            <form action="#" method="post">
                <div class="mb-3">
                    <label class="form-label"><?= htmlspecialchars($langData['contact']['name'] ?? 'Ad Soyad') ?></label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label"><?= htmlspecialchars($langData['contact']['email'] ?? 'E-Posta') ?></label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label"><?= htmlspecialchars($langData['contact']['subject'] ?? 'Konu') ?></label>
                    <input type="text" name="subject" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label"><?= htmlspecialchars($langData['contact']['message'] ?? 'Mesajınız') ?></label>
                    <textarea name="message" class="form-control" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary"><?= htmlspecialchars($langData['contact']['submit'] ?? 'Gönder') ?></button>
            </form>
        </div>
    </div>
</div>
