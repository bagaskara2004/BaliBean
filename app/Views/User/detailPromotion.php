<?= $this->extend('Component/user.php') ?>
<?= $this->section('Banner') ?>
<div class="container-fluid py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Promotion</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">DetailPromotion</li>
            </ol>
        </nav>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('Content') ?>
<div class="container mb-5 mt-5">
    <div class="row">
        <div class="col-12 col-sm-7 col-md-6 col-lg-4 mt-4">
            <img src="/photoPromo/<?=$dataPromotion['photo_promotion']?>" class="card-img-top shadow rounded" alt="...">
        </div>
        <div class="col-12 col-sm-5 col-md-6 col-lg-8 mt-4">
            <div class="text-center fw-bold "><?=$dataPromotion['title_promotion']?></div>
            <hr>
            <p><span class="fw-bold">Description :</span> <?=$dataPromotion['description_promotion']?></p>
            <p><span class="fw-bold">Start_Date :</span> <?=$dataPromotion['start_date']?></p>
            <p><span class="fw-bold">End_Date :</span> <?=$dataPromotion['end_date']?></p>
        </div>
    </div>
</div>
<?= $this->endSection() ?>