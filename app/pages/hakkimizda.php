<section class="bg-secondary page-title" style="background-image: url('/assets/img/ofis.jpeg')">
    <div class="container">
        <h1 class="fw-bold mb-0"><?= htmlspecialchars($langData['hakkimizda']['title'] ?? 'Ekibimiz') ?></h1>
        <p class="lead font-serif-italic text-primary"><?= htmlspecialchars($langData['hakkimizda']['subtitle'] ?? '') ?></p>
    </div>
</section>
<section class="container py-5">

    <!-- Ofis Hikayesi -->
    <div class="row align-items-center mb-5">
        <div class="col-lg-6">
            <h3 class="mb-4"><?= $lang === 'tr' ? 'Ofisimiz' : 'Our Firm' ?></h3>
            <p><?= $lang === 'tr'
                    ? 'Kırat Hukuk; deneyimli ve dinamik kadrosuyla müvekkillerine ulusal ve uluslararası düzeyde kapsamlı hukuk hizmetleri sunmaktadır. Kuruluşumuzdan itibaren çözüm odaklı, şeffaf ve müvekkil odaklı çalışma anlayışımızla farklı sektörlerde geniş bir yelpazede hizmet veriyoruz.'
                    : 'Kirat Law, with its experienced and dynamic team, provides comprehensive legal services at both national and international levels. Since our establishment, we have been delivering solution-oriented, transparent and client-centered services across a wide range of industries.' ?></p>

            <p><?= $lang === 'tr'
                    ? 'Her bir dosyada detaylı analiz, titiz çalışma ve etkin iletişim prensipleriyle hareket eder; müvekkillerimizin hak ve menfaatlerini en üst düzeyde korumayı amaçlarız.'
                    : 'We approach each case with thorough analysis, meticulous work, and effective communication, aiming to protect our clients’ rights and interests at the highest level.' ?></p>

            <p><?= $lang === 'tr'
                    ? 'Sürekli gelişen hukuk sistemini ve sektörel yenilikleri yakından takip ederek, müvekkillerimize güncel ve pratik çözümler sunmayı ilke ediniyoruz.'
                    : 'By closely following the constantly evolving legal system and sectoral developments, we are committed to providing our clients with up-to-date and practical solutions.' ?></p>
        </div>

        <div class="col-lg-6">
            <div class="row g-3">
                <div class="col-6">
                    <img src="/assets/img/sample-wide.png" class="img-fluid rounded shadow">
                </div>
                <div class="col-6">
                    <img src="/assets/img/sample-wide.png" class="img-fluid rounded shadow">
                </div>
                <div class="col-6">
                    <img src="/assets/img/sample-wide.png" class="img-fluid rounded shadow">
                </div>
                <div class="col-6">
                    <img src="/assets/img/sample-wide.png" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </div>

    <!-- Değerler ve Yaklaşım -->
    <div class="row">
        <div class="col-12">
            <h3 class="mb-4 text-center"><?= $lang === 'tr' ? 'Değerlerimiz & Yaklaşımımız' : 'Our Values & Approach' ?></h3>
        </div>

        <div class="col-md-6 mb-4">
            <h5><?= $lang === 'tr' ? 'Etik ve Şeffaflık' : 'Ethics & Transparency' ?></h5>
            <p><?= $lang === 'tr'
                    ? 'Tüm süreçlerimizde dürüstlük ve şeffaflık ilkesini esas alır; müvekkillerimizle güven temelli uzun vadeli ilişkiler kurarız.'
                    : 'We adopt honesty and transparency in all our processes, building long-term trust-based relationships with our clients.' ?></p>
        </div>

        <div class="col-md-6 mb-4">
            <h5><?= $lang === 'tr' ? 'Çözüm Odaklı Hizmet' : 'Solution-Oriented Service' ?></h5>
            <p><?= $lang === 'tr'
                    ? 'Sadece mevcut sorunlara değil, gelecekte doğabilecek risklere karşı da önleyici çözümler sunmaya odaklanırız.'
                    : 'We focus not only on existing issues but also on providing preventive solutions against potential future risks.' ?></p>
        </div>

        <div class="col-md-6 mb-4">
            <h5><?= $lang === 'tr' ? 'Sürekli Gelişim ve Güncellik' : 'Continuous Development & Up-to-Date Approach' ?></h5>
            <p><?= $lang === 'tr'
                    ? 'Hukuki ve sektörel gelişmeleri yakından takip eder; bilgimizi ve tecrübemizi sürekli güncelleyerek en doğru hizmeti sunarız.'
                    : 'We closely follow legal and sectoral developments, continuously updating our knowledge and experience to provide the most accurate service.' ?></p>
        </div>

        <div class="col-md-6 mb-4">
            <h5><?= $lang === 'tr' ? 'Müvekkil Odaklı Yaklaşım' : 'Client-Centered Approach' ?></h5>
            <p><?= $lang === 'tr'
                    ? 'Her müvekkilin ihtiyacına özel çözüm planları oluşturur; süreç boyunca düzenli bilgilendirme ve aktif iletişimle müvekkil memnuniyetini ön planda tutarız.'
                    : 'We create tailored solution plans for each client, prioritizing client satisfaction through regular updates and active communication throughout the process.' ?></p>
        </div>
    </div>
</section>
