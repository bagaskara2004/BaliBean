<?= $this->extend('Component/admin.php') ?>

<?= $this->section('Sidebar') ?>
<ul class="side-menu top p-0">
    <li class="active">
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
    <li>
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
            <h1>Dashboard</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Home</a>
                </li>
            </ul>
        </div>
        <a href="#" class="btn-download">
            <i class='bx bxs-cloud-download'></i>
            <span class="text">Download PDF</span>
        </a>
    </div>

    <ul class="box-info">
        <li>
            <i class='bx bxs-package'></i>
            <span class="text">
                <h3><?= $totalProduct ?></h3>
                <p>Product</p>
            </span>
        </li>
        <li>
            <i class='bx bx-category'></i>
            <span class="text">
                <h3><?= $totalCategoryProduct ?></h3>
                <p>Variant</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-group'></i>
            <span class="text">
                <h3><?= $totalUser ?></h3>
                <p>User</p>
            </span>
        </li>
    </ul>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Recent Orders</h3>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Date Order</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="img/people.png">
                            <p>John Doe</p>
                        </td>
                        <td>01-10-2021</td>
                        <td><span class="status completed">Completed</span></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/people.png">
                            <p>John Doe</p>
                        </td>
                        <td>01-10-2021</td>
                        <td><span class="status pending">Pending</span></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/people.png">
                            <p>John Doe</p>
                        </td>
                        <td>01-10-2021</td>
                        <td><span class="status process">Process</span></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/people.png">
                            <p>John Doe</p>
                        </td>
                        <td>01-10-2021</td>
                        <td><span class="status pending">Pending</span></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/people.png">
                            <p>John Doe</p>
                        </td>
                        <td>01-10-2021</td>
                        <td><span class="status completed">Completed</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="todo">
            <div class="head">
                <h3>Todos</h3>
                <i class='bx bx-plus'></i>
                <i class='bx bx-filter'></i>
            </div>
            <ul class="todo-list">
                <li class="completed">
                    <p>Todo List</p>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </li>
                <li class="completed">
                    <p>Todo List</p>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </li>
                <li class="not-completed">
                    <p>Todo List</p>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </li>
                <li class="completed">
                    <p>Todo List</p>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </li>
                <li class="not-completed">
                    <p>Todo List</p>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </li>
            </ul>
        </div>
    </div>
</main>
<?= $this->endSection() ?>