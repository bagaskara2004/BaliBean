<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/admin.css">

    <title><?= $title ?></title>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx'><img src="/img/logo.png" class="logo"></i>
            <span class="text cl-dark">BaliBean</span>
        </a>

        <?php $this->renderSection('Sidebar') ?>

        <ul class="side-menu p-0">
            <li>
                <a href="/logout" class="logout">
                    <i class='bx bxs-door-open'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <?= $this->renderSection('Main') ?>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <!-- popup -->
    <div class="position-fixed bottom-0 end-0 z-2">
        <?php if (session()->getFlashdata('erorr')) { ?>
            <div class="alert alert-danger alert-dismissible fade show m-1" role="alert">
                <small><?= session()->getFlashdata('erorr') ?></small>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>
        <?php if (session()->getFlashdata('success')) { ?>
            <div class="alert alert-success alert-dismissible fade show m-1" role="alert">
                <small><?= session()->getFlashdata('success') ?></small>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>
    </div>

    <!-- Modal Delete Category -->
    <div class="modal fade" id="deleteCategory" tabindex="-1" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confrim Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger w-100" id="confirmDeleteCategory">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/admin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>