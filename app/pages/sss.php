<?php
// Dil ve veri yükleme
$lang = $_GET['lang'] ?? 'tr';
if (!in_array($lang, ['tr', 'en'])) { $lang = 'tr'; }

$langData = json_decode(file_get_contents(__DIR__ . '/../../data/lang/' . $lang . '.json'), true);
$faq = json_decode(file_get_contents(__DIR__ . '/../../data/sss.json'), true);
?>

<section class="py-5 text-center bg-secondary">
    <div class="container">
        <h1 class="fw-bold mb-3"><?= htmlspecialchars($langData['faq']['title'] ?? 'Sık Sorulan Sorular') ?></h1>
        <p class="lead font-serif-italic text-primary"><?= htmlspecialchars($langData['faq']['subtitle'] ?? '') ?></p>
    </div>
</section>

<div class="container py-5">
    <div class="accordion" id="faqAccordion">
        <?php foreach ($faq as $index => $item): ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading<?= $index ?>">
                    <button class="accordion-button <?= $index > 0 ? 'collapsed' : '' ?>"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapse<?= $index ?>"
                            aria-expanded="<?= $index == 0 ? 'true' : 'false' ?>">
                        <?= htmlspecialchars($item['question'][$lang]) ?>
                    </button>
                </h2>
                <div id="collapse<?= $index ?>"
                     class="accordion-collapse collapse <?= $index == 0 ? 'show' : '' ?>"
                     data-bs-parent="#faqAccordion">
                    <div class="accordion-body"><?= nl2br(htmlspecialchars($item['answer'][$lang])) ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
