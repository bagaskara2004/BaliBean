<?= $this->extend('Component/admin.php') ?>

<?= $this->section('Sidebar') ?>
<ul class="side-menu top p-0">
    <li>
        <a href="/dashboard">
            <i class='bx bxs-dashboard'></i>
            <span class="text">Dashboard</span>
        </a>
    </li>
    <li>
        <a href="#">
            <i class='bx bxs-shopping-bag-alt'></i>
            <span class="text">Shop</span>
        </a>
    </li>
    <li>
        <a href="#">
            <i class='bx bxs-package'></i>
            <span class="text">Product</span>
        </a>
    </li>
    <li class="active">
        <a href="/category">
            <i class='bx bx-category'></i>
            <span class="text">Category</span>
        </a>
    </li>
    <li>
        <a href="#">
            <i class='bx bxs-group'></i>
            <span class="text">User</span>
        </a>
    </li>
    <li>
        <a href="#">
            <i class='bx bxs-discount'></i>
            <span class="text">Promotion</span>
        </a>
    </li>
</ul>
<?= $this->endSection() ?>

<?= $this->section('Main') ?>
<main>
    <div class="head-title">
        <div class="left">
            <h1>Form Category</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Category Product</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="/category">Back</a>
                </li>
            </ul>
        </div>
    </div>

    <form action="<?=isset($data) ? '/editCategory' : '/addCategory' ?>" method="post" class="form" autocomplete="off">
        <input type="hidden" name="id" value="<?=isset($data['id_categoryProduct']) ? $data['id_categoryProduct'] : '' ?>">
        <div class="inputan">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Input Name" value="<?=isset($data['name_categoryProduct']) ? $data['name_categoryProduct'] : '' ?>">
        </div>
        <div>
            <button type="submit" class="w-100 text-light btn <?=isset($data) ? 'btn-warning' : 'btn-primary' ?>"><?=isset($data) ? 'Edit Category' : 'Add Category' ?></button>
        </div>
    </form>
</main>
<?= $this->endSection() ?>