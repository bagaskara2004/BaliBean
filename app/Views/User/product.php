<?= $this->extend('Component/user.php') ?>

<?= $this->section('Navbar') ?>
<a href="/" class="nav-item nav-link">Home</a><a href="/about" class="nav-item nav-link">About</a><a href="/product" class="nav-item nav-link active">Product</a><a href="/gallery" class="nav-item nav-link">Gallery</a>
<?= $this->endSection() ?>

<?= $this->section('Banner') ?>
<div class="container-fluid py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Product</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Product</li>
            </ol>
        </nav>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('Content') ?>
<!-- Menu Start -->
<?php if ($dataCategoryProduct['status']) : ?>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Product</h5>
                <h1 class="mb-5">All Product</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">

                    <?php foreach ($dataCategoryProduct['data'] as $categoryProduct) : ?>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 mt-1 pb-3 <?php echo $categoryProduct['id_categoryProduct'] == 1 ? 'active' : ''; ?>" data-bs-toggle="pill" href="#tab-<?= $categoryProduct['id_categoryProduct'] ?>">
                                <div>
                                    <h6 class="mt-n1 mb-0"><?= $categoryProduct['name_categoryProduct'] ?></h6>
                                </div>
                            </a>
                        </li>
                    <?php endforeach ?>

                </ul>
                <div class="tab-content">

                    <?php for ($i = 0; $i < count($dataCategoryProduct['data']); $i++) : ?>
                        <div id="tab-<?= $i + 1 ?>" class="tab-pane fade show p-0 <?php echo $i == 0 ? 'active' : ''; ?>">
                            <div class="row g-4">
                                <?php if ($dataProduct['status']) : ?>
                                    <?php $count = 0; ?>
                                    <?php foreach ($dataProduct['data'] as $product) : ?>
                                        <?php if ($product['id_categoryProduct'] == $i + 1) : ?>
                                            <?php $count += 1 ?>
                                            <div class="col-lg-6 product" data-id="<?= $product['id_product'] ?>">
                                                <div class="d-flex align-items-center">
                                                    <img class="flex-shrink-0 img-fluid rounded" src="photoProduct/<?= $product['photo_product'] ?>" alt="" style="width: 80px;">
                                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                            <span><?= $product['name_product'] ?></span>
                                                            <span class="text-primary"><?= $product['price_product'] ?></span>
                                                        </h5>
                                                        <small class="fst-italic"><?= $product['description_product'] ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                    <?php if ($count == 0) : ?>
                                        <div class="d-flex justify-content-center py-5">
                                            <i>Tidak Ada Product</i>
                                        </div>
                                    <?php endif ?>
                                <?php endif ?>
                                <?php if ($dataProduct['status'] == false) : ?>
                                    <div class="d-flex justify-content-center py-5">
                                        <i>Tidak Ada Product</i>
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                    <?php endfor ?>

                </div>
            </div>
        </div>
    </div>
<?php endif ?>
<?php if ($dataCategoryProduct['status'] == false) : ?>
    <div class="d-flex justify-content-center py-5">
        <i>Tidak Ada Product</i>
    </div>
<?php endif ?>
<!-- Menu End -->
<?= $this->endSection() ?>