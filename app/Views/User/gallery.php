<?= $this->extend('Component/user.php') ?>
<?= $this->section('Banner') ?>
<div class="container-fluid py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Gallery</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Gallery</li>
            </ol>
        </nav>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('Content') ?>
<div class='sk-instagram-feed' data-embed-id='<?=$dataShop['gallery']?>'></div>
<?= $this->endSection() ?>