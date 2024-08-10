<?= $this->extend('Component/user.php') ?>

<?= $this->section('Navbar') ?>
<a href="/" class="nav-item nav-link">Home</a><a href="/about" class="nav-item nav-link">About</a><a href="/product" class="nav-item nav-link">Product</a><a href="/gallery" class="nav-item nav-link active">Gallery</a>
<?= $this->endSection() ?>

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