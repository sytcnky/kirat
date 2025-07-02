<?php
$lang = $_GET['lang'] ?? 'tr';
if (!in_array($lang, ['tr', 'en'])) {
    $lang = 'tr';
}

$langData = json_decode(file_get_contents(__DIR__ . '/../../data/lang/' . $lang . '.json'), true);
?>

<section class="page-title" style="background-image: url('/assets/img/tuketici-hukuku.png')">
    <div class="container">
        <h1 class="text-white fw-bold mb-0"><?= htmlspecialchars($langData['contact']['title'] ?? 'İletişim') ?></h1>
        <p class="lead font-serif-italic k-yellow"><?= htmlspecialchars($langData['contact']['subtitle'] ?? '') ?></p>
    </div>
</section>

<div class="container py-5">
    <div class="row g-5">
        <div class="col-md-6">
            <h3 class="mb-4">Ofisimiz</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4047.3739250951803!2d28.688341299999994!3d36.9600194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c07f003b37459b%3A0x3852148b705e5a3f!2zS8SxcmF0IEh1a3VrIELDvHJvc3U!5e1!3m2!1str!2str!4v1750149304781!5m2!1str!2str"
                    width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="mt-3">
                <?= $langData['contact']['content'] ?>
            </div>
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
                <button type="submit"
                        class="btn btn-primary"><?= htmlspecialchars($langData['contact']['submit'] ?? 'Gönder') ?></button>
            </form>
        </div>
    </div>
</div>
