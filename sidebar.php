<?php
echo '
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!-- Sidebar -->
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark" id="sidebar">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                        <i class="fa-solid fa-bars"></i>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li>
                            <a href="form1.php" class="nav-link px-0 align-middle" data-page="form1">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Form-01</span>
                            </a>
                        </li>
                        <li>
                            <a href="form2.php" class="nav-link px-0 align-middle" data-page="form2">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Form-02</span>
                            </a>
                        </li>
                        <li>
                            <a href="form3.php" class="nav-link px-0 align-middle" data-page="form3">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Form-03</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Content Area where Forms will be loaded -->
            <div class="col py-3" id="content-area">
                <p>Content will be shown here</p>
            </div>
        </div>
    </div>
';
?>
