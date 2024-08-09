<?= $this->extend('Component/user.php') ?>

<?= $this->section('Banner') ?>
<div class="container-fluid py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('Content') ?>
<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center mb-5">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpeg" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpeg">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                <h1 class="mb-4">Welcome to <img src="img/logo_dark.png" alt="" class="w-25"></h1>
                <p class="mb-4">Selamat datang di bali bean, tempat di mana setiap cangkir kopi bercerita. Berdiri sejak 2024, kami adalah destinasi utama bagi para pecinta kopi yang mencari pengalaman yang lebih dari sekadar secangkir minuman panas.</p>
                <p class="mb-4">Di bali bean, kami percaya bahwa kopi bukan hanya sekadar minuman, tetapi sebuah seni dan pengalaman. Kami memulai perjalanan kami dengan satu tujuan: menghadirkan kopi berkualitas tinggi dengan cita rasa yang luar biasa dan pelayanan yang hangat. Setiap biji kopi yang kami sajikan dipilih dengan cermat dari perkebunan terbaik, dan dipanggang dengan hati-hati untuk memastikan aroma dan rasa yang sempurna.</p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up"><?= $totalVariant ?></h1>
                            <div class="ps-4">
                                <p class="mb-0">Variant</p>
                                <h6 class="text-uppercase mb-0">Product</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up"><?= $totalProduct ?></h1>
                            <div class="ps-4">
                                <p class="mb-0">Number of</p>
                                <h6 class="text-uppercase mb-0">Product</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h3 class="bg-dark text-light text-center rounded py-1">Visi</h3>
                <p class="mb-4">Kami bertujuan untuk menjadi tempat di mana setiap orang bisa merasakan kehangatan dan kenyamanan, sambil menikmati kopi yang menggugah selera. Kami ingin bali bean menjadi bagian dari rutinitas harian Anda, tempat Anda bisa bersantai, berbicara, dan menemukan inspirasi.</p>
            </div>
            <div class="col-lg-6">
                <h3 class="bg-dark text-light text-center rounded py-1">Misi</h3>
                <p class="mb-4">Kualitas Terbaik: Menyajikan kopi dengan kualitas premium, dari biji hingga cangkir.
                    Pengalaman Pelanggan: Memberikan pelayanan yang ramah dan pengalaman yang menyenangkan untuk setiap tamu.
                    Inovasi Berkelanjutan: Terus-menerus mengeksplorasi dan menghadirkan varian kopi baru dan teknik penyajian inovatif.</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<?= $this->endSection() ?>