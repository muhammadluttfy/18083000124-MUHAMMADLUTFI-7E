<div class="sidebar">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="javascript:void(0)" class="simple-text logo-mini">
                ID
            </a>
            <a href="javascript:void(0)" class="simple-text logo-normal">
                bukuKita
            </a>
        </div>
        <ul class="nav">
            <li>
                <a href="<?= base_url; ?>/home">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="<?= base_url; ?>/kategori">
                    <i class="tim-icons icon-components"></i>
                    <p>Kategori</p>
                </a>
            </li>
            <li>
                <a href="<?= base_url; ?>/buku">
                    <i class="tim-icons icon-book-bookmark"></i>
                    <p>Buku</p>
                </a>
            </li>
            <li>
                <a href="<?= base_url; ?>/user">
                    <i class="tim-icons icon-single-02"></i>
                    <p>User</p>
                </a>
            </li>

        </ul>
    </div>
</div>
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-toggle d-inline">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav ml-auto">
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <div class="photo">
                                <img src=" <?= base_url; ?>/assets/img/anime3.png" alt="Profile Photo">
                            </div>
                            <b class="caret d-none d-lg-block d-xl-block"></b>
                            <p class="d-lg-none">
                                Log out
                            </p>
                        </a>
                        <ul class="dropdown-menu dropdown-navbar">
                            <li class="nav-link"><a href="<?= base_url; ?>/about" class="nav-item dropdown-item">Profile</a></li>
                            <li class="dropdown-divider"></li>
                            <li class="nav-link"><a href="<?= base_url; ?>/logout" class="nav-item dropdown-item">Log
                                    out</a></li>
                        </ul>
                    </li>
                    <li class="separator d-lg-none"></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar -->