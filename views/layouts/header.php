<!-- site header -->
<header id="site_header">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

            <!-- logo + hamburger menu -->
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- menu options -->
                <!-- links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                </ul>

                <!-- buttons -->
                <div class="buttons d-flex gap-2 align-items-center">
                    <?php if ($showForm) : ?>
                        <!-- signup and login buttons -->
                        <a class="signup btn btn-outline-success" href="registration.php" target="_blank">Registrati</a>
                        <a class="login btn btn-outline-success" href="login_page.php">Login</a>
                        <button class="admin btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                            Accesso dipendenti
                        </button>
                    <?php else : ?>
                        <!-- hello user/admin + logout -->
                        <div class="profile px-3">Hello <?php echo $_SESSION["name"]; ?></div>
                        <a href="logout.php?logout=true" class="btn btn-primary">Logout</a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </nav>
</header>