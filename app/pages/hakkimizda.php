<section class="container py-5">
    <h1 class="mb-4"><?= $lang === 'tr' ? 'Hakkımızda' : 'About Us' ?></h1>

    <div class="row g-4">
        <div class="col-lg-6">
            <h4><?= $lang === 'tr' ? 'Ofis Hikayemiz' : 'Our Story' ?></h4>
            <p><?= $lang === 'tr'
                    ? 'Kırat Hukuk, kurulduğu günden bu yana müvekkillerine güvenilir ve çözüm odaklı hukuk hizmeti sunmaktadır.'
                    : 'Since its establishment, Kirat Law has provided reliable and solution-oriented legal services.' ?></p>

            <div class="row mt-4">
                <div class="col-6">
                    <img src="/assets/img/ofis1.jpg" class="img-fluid rounded shadow">
                </div>
                <div class="col-6">
                    <img src="/assets/img/ofis2.jpg" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <h4><?= $lang === 'tr' ? 'Değerlerimiz & Yaklaşımımız' : 'Our Values & Approach' ?></h4>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?= $lang === 'tr' ? 'Etik ve Şeffaflık' : 'Ethics and Transparency' ?></li>
                <li class="list-group-item"><?= $lang === 'tr' ? 'Çözüm Odaklı Hizmet' : 'Solution-Oriented Service' ?></li>
                <li class="list-group-item"><?= $lang === 'tr' ? 'Güncel ve Dinamik Yaklaşım' : 'Up-to-Date and Dynamic Approach' ?></li>
                <li class="list-group-item"><?= $lang === 'tr' ? 'Müvekkil Memnuniyeti' : 'Client Satisfaction' ?></li>
            </ul>
        </div>
    </div>
</section>
