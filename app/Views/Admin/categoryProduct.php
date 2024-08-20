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
            <h1>Category Product</h1>
        </div>
        <a href="/formCategory" class="btn-download">
            <i class='bx bx-plus'></i>
            <span class="text">Add Category</span>
        </a>
    </div>

    <?php if ($dataCategoryProduct['status']) : ?>
        <div class="table-data">
            <div class="order">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($dataCategoryProduct['data'] as $data) : ?>
                            <tr>
                                <td><?= $data['name_categoryProduct'] ?></td>
                                <td><?= $data['created_at'] ?></td>
                                <td>
                                    <button data-id="<?= $data['id_categoryProduct'] ?>" class="btncos btncos-edit edit-category"><i class='bx bx-edit'></i></button>
                                    <button data-id="<?= $data['id_categoryProduct'] ?>" class="btncos btncos-delete delete-category" data-bs-toggle="modal" data-bs-target="#deleteCategory"><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif ?>
    <?php if (!$dataCategoryProduct['status']) :?>
        <div class="data-empty">
            <i>Tidak ada Category</i>
        </div>
    <?php endif ?>
</main>
<?= $this->endSection() ?>