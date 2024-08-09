<?= $this->extend('Component/user.php') ?>

<?= $this->section('Banner') ?>
<div class="container-fluid py-5 bg-dark hero-header mb-5">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-3 text-white animated slideInLeft">Great Coffee<br>made simple</h1>
                <p class="text-white animated slideInLeft mb-4 pb-2">Start your mornings with the worlds best coffees. Try our expertly curated artisan coffees from our best roasters delivered directly to your door, at your schedule.</p>
                <a href="/about" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">ABOUT US</a>
            </div>
            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                <img class="img-fluid" src="img/hero.png" alt="">
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('Content') ?>
<!-- Service Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                        <h5>Convenient Place</h5>
                        <p>a comfortable place to drink coffee and relax after a tired day</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-coffee text-primary mb-4"></i>
                        <h5>Quality Coffee</h5>
                        <p>We have high quality coffee and use the best choice of coffee beans</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-money-bill text-primary mb-4"></i>
                        <h5>Cheap Prices</h5>
                        <p>The price of coffee here is quite cheap compared to other shops</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                        <h5>Good Service</h5>
                        <p>We will always provide the best and fastest service to our customers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
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
                <a class="btn btn-primary py-3 px-5 mt-2" href="/about">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Menu Start -->
<?php if ($recomended['status']) :?>
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Recomended</h5>
            <h1 class="mb-5">Most Popular Coffee</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <?php foreach ($recomended['data'] as $datas) :?>
                        <div class="col-lg-6 product" data-id="<?=$datas['id_product']?>">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="photoProduct/<?=$datas['photo_product']?>" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span><?= $datas['name_product'] ?></span>
                                        <span class="text-primary"><?= $datas['price_product'] ?></span>
                                    </h5>
                                    <small class="fst-italic"><?= $datas['description_product'] ?></small>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif ?>
<!-- Menu End -->


<!-- Reservation Start -->
<div class="container-fluid py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="row g-0">
        <div class="col-md-6">
            <div class="video"></div>
        </div>
        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">SUBSCRIBE</h5>
                <h1 class="text-white mb-4">Give Your Opinion</h1>
                <form method="post" action="/adduser">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" name="name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" name="email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Comment" id="message" style="height: 100px" name="comment"></textarea>
                                <label for="message">Comment</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Reservation Start -->


<!-- Team Start -->
<?php if ($promotions['status']) :?>
<div class="container-fluid pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Promotion</h5>
            <h1 class="mb-5">Our Promotions</h1>
        </div>
        <div class="row g-4">
            <?php foreach ($promotions['data'] as $promotion) :?>
            <div class="col-lg-3 col-md-6 wow fadeInUp promotion" data-wow-delay="0.3s" data-id="<?=$promotion['id_promotion']?>">
                <div class="team-item text-center rounded overflow-hidden">
                    <div>
                        <img class="img-fluid" src="photoPromo/<?=$promotion['photo_promotion']?>" alt="">
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<?php endif ?>
<!-- Team End -->


<!-- Testimonial Start -->
<?php if ($comments['status']) :?>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
            <h1 class="mb-5">Our Clients Say!!!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
        <?php foreach ($comments['data'] as $data) : ?>
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p><?= $data['comment'] ?></p>
                <div class="d-flex align-items-center">
                    <div class="ps-3">
                        <h5 class="mb-1"><?= $data['name'] ?></h5>
                        <small><?= $data['created_at'] ?></small>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
            
        </div>
    </div>
</div>
<?php endif ?>
<!-- Testimonial End -->
<?= $this->endSection() ?>