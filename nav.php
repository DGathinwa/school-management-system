<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="ml-5 navbar-brand" href="index.html" >EXCELLENCE HIGH SCHOOL</a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">

            <?php if (isset($_SESSION["id"])) : ?>

                <li class="nav-item">
                    <a class="nav-link" href="add-product.php">Teachers</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="register-customer.php">Students</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="sell.php">Resources</a>
                </li>

                <?php if ($_SESSION["admin"]==1) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="reports.php">Report</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="addnew_admin.php">Add User</a>
                    </li>
                <?php endif; ?>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  <?php if($_SESSION["admin"]==1) echo 'text-danger' ?>" href="#" id="navbardrop" data-toggle="dropdown">
                        <?= $_SESSION["names"] ?>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>

            <?php endif; ?>

        </ul>
    </div>
</nav>