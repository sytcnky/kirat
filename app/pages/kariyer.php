<?php
$lang = $_GET['lang'] ?? 'tr';
if (!in_array($lang, ['tr', 'en'])) { $lang = 'tr'; }

$langData = json_decode(file_get_contents(__DIR__ . '/../../data/lang/' . $lang . '.json'), true);
?>

<section class="py-5 text-center bg-secondary">
    <div class="container">
        <h1 class="fw-bold mb-3"><?= htmlspecialchars($langData['career']['title'] ?? 'Kariyer') ?></h1>
        <p class="lead font-serif-italic text-primary"><?= htmlspecialchars($langData['career']['subtitle'] ?? '') ?></p>
    </div>
</section>

<div class="container py-5">
    <?= $langData['career']['content'] ?>
</div>

<div class="container pb-5">
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
