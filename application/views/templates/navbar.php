<body>
    <!--Header section-->
    <div class="header">
        <nav class="navbar navbar-dark bg-dark">
            <div class=" container">

                <h3 class="navbar-brand">Pembayaran SPP</h3>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>

                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $name; ?>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Logout</a>

                    </div>
                </div>
            </div>
        </nav>
    </div>