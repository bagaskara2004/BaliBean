<?= $this->extend('Component/user.php') ?>

<?= $this->section('Navbar') ?>
<a href="/" class="nav-item nav-link">Home</a><a href="/about" class="nav-item nav-link">About</a><a href="/product" class="nav-item nav-link">Product</a><a href="/gallery" class="nav-item nav-link">Gallery</a>
<?= $this->endSection() ?>

<?= $this->section('Banner') ?>
<div class="container-fluid py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Administrator</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Login</li>
            </ol>
        </nav>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('Content') ?>
<section class="h-100 gradient-form" id="login">
    <div class="container py-5 mt-5 h-100">
        <div class="row d-flex justify-content-center h-100 pt-5">
            <div class="col-xl-12">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="card-body p-md-0 mx-md-4">
                            <form method="post" action="/login">
                                <h1 class="mb-4">Login</h1>
                                <p>Login For Administrator</p>
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1">Email address</label>
                                    <input type="email" name="email" id="form2Example1" class="form-control" />
                                </div>
                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example2">Password</label>
                                    <input type="password" name="password" id="form2Example2" class="form-control" />
                                </div>
                                <!-- Submit button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-block text-white ">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-flex">
                        <img src="/img/gambar_login.jpg" alt="Login image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>