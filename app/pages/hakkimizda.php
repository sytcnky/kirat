<section class="bg-secondary page-title" style="background-image: url('/assets/img/aile-hukuku.png')">
    <div class="container">
        <h1 class="fw-bold mb-0 text-white"><?= htmlspecialchars($langData['hakkimizda']['title'] ?? 'Ekibimiz') ?></h1>
        <p class="lead font-serif-italic k-yellow"><?= htmlspecialchars($langData['hakkimizda']['subtitle'] ?? '') ?></p>
    </div>
</section>
<section class="container py-5">

    <!-- Ofis Hikayesi -->
    <div class="row align-items-center mb-5">
        <div class="col-lg-6">

            <h2 class="mb-5"><?= $lang === 'tr'
                    ? 'Kırat Hukuk; deneyimli ve dinamik kadrosuyla müvekkillerine ulusal ve uluslararası düzeyde kapsamlı hukuk hizmetleri sunmaktadır.'
                    : 'Kirat Law, with its experienced and dynamic team, provides comprehensive legal services at both national and international levels.' ?></h2>

            <p><?= $lang === 'tr'
                    ? 'Kuruluşumuzdan itibaren çözüm odaklı, şeffaf ve müvekkil odaklı çalışma anlayışımızla farklı sektörlerde geniş bir yelpazede hizmet veriyoruz.'
                    : 'Since our establishment, we have been delivering solution-oriented, transparent and client-centered services across a wide range of industries.' ?></p>

            <p><?= $lang === 'tr'
                    ? 'Her bir dosyada detaylı analiz, titiz çalışma ve etkin iletişim prensipleriyle hareket eder; müvekkillerimizin hak ve menfaatlerini en üst düzeyde korumayı amaçlarız.'
                    : 'We approach each case with thorough analysis, meticulous work, and effective communication, aiming to protect our clients’ rights and interests at the highest level.' ?></p>

            <p><?= $lang === 'tr'
                    ? 'Sürekli gelişen hukuk sistemini ve sektörel yenilikleri yakından takip ederek, müvekkillerimize güncel ve pratik çözümler sunmayı ilke ediniyoruz.'
                    : 'By closely following the constantly evolving legal system and sectoral developments, we are committed to providing our clients with up-to-date and practical solutions.' ?></p>
        </div>


        <div class="col-md-6">
            <img src="/assets/img/idare-ve-vergi-hukuku.png" class="img-fluid rounded shadow">
        </div>
    </div>

    <!-- Değerler ve Yaklaşım -->
    <div class="row">
        <div class="col-12">
            <h3 class="my-4 text-center"><?= $lang === 'tr' ? 'Değerlerimiz & Yaklaşımımız' : 'Our Values & Approach' ?></h3>
        </div>

        <!-- Değer 1 -->
        <div class="col-lg-6">
            <div class="d-flex flex-column flex-md-row align-items-center mb-4 gap-4">
                <img src="/assets/img/idare-ve-vergi-hukuku.png" alt="Etik" class="rounded shadow-sm"
                     style="width: 100px; height: 100px; object-fit: cover;">
                <div>
                    <h5 class="mb-1"><?= $lang === 'tr' ? 'Etik ve Şeffaflık' : 'Ethics and Transparency' ?></h5>
                    <p class="mb-0"><?= $lang === 'tr'
                            ? 'Tüm süreçlerimizde dürüstlük ve şeffaflık ilkesini esas alır; müvekkillerimizle güven temelli uzun vadeli ilişkiler kurarız.'
                            : 'We base all our processes on honesty and transparency; building long-term trust-based relationships with our clients.' ?></p>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <!-- Değer 2 -->
            <div class="d-flex flex-column flex-md-row align-items-center mb-4 gap-4">
                <img src="/assets/img/aile-hukuku.png" alt="Çözüm" class="rounded shadow-sm"
                     style="width: 100px; height: 100px; object-fit: cover;">
                <div>
                    <h5 class="mb-1"><?= $lang === 'tr' ? 'Çözüm Odaklı Hizmet' : 'Solution-Oriented Service' ?></h5>
                    <p class="mb-0"><?= $lang === 'tr'
                            ? 'Sadece mevcut sorunlara değil, gelecekte doğabilecek risklere karşı da önleyici çözümler sunmaya odaklanırız.'
                            : 'We focus not only on current problems but also on preventive solutions for potential future risks.' ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6"><!-- Değer 3 -->
            <div class="d-flex flex-column flex-md-row align-items-center mb-4 gap-4">
                <img src="/assets/img/gayrimenkul-ve-insaat-hukuku.png" alt="Müvekkil" class="rounded shadow-sm"
                     style="width: 100px; height: 100px; object-fit: cover;">
                <div>
                    <h5 class="mb-1"><?= $lang === 'tr' ? 'Müvekkil Odaklı Yaklaşım' : 'Client-Centered Approach' ?></h5>
                    <p class="mb-0"><?= $lang === 'tr'
                            ? 'Her müvekkilin ihtiyacına özel çözüm planları oluşturur; süreç boyunca düzenli bilgilendirme ve aktif iletişimle memnuniyeti ön planda tutarız.'
                            : 'We tailor solutions to each client and ensure satisfaction through active communication and regular updates throughout the process.' ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6"><!-- Değer 4 -->
            <div class="d-flex flex-column flex-md-row align-items-center mb-4 gap-4">
                <img src="/assets/img/fikri-ve-sinai-haklar-hukuku.png" alt="Güncellik" class="rounded shadow-sm"
                     style="width: 100px; height: 100px; object-fit: cover;">
                <div>
                    <h5 class="mb-1"><?= $lang === 'tr' ? 'Sürekli Gelişim ve Güncellik' : 'Continuous Development' ?></h5>
                    <p class="mb-0"><?= $lang === 'tr'
                            ? 'Hukuki ve sektörel gelişmeleri yakından takip eder; bilgimizi ve tecrübemizi güncelleyerek doğru hizmeti sunarız.'
                            : 'We follow legal and industry developments closely and update our knowledge to provide accurate services.' ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
