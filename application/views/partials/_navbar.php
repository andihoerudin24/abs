<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#">Sistem Penjualan Barang</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="<?php echo site_url('Dashboard') ?>">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Dashboard</span>
            </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Barang">
            <a class="nav-link" href="<?php echo site_url('Barang') ?>">
            <i class="fa fa-fw fa-comments"></i>
            <span class="nav-link-text">Barang</span>
            </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pelanggan">
            <a class="nav-link" href="<?php echo site_url('Pelanggan') ?>">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Pelanggan</span>
            </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Transaksi">
            <a class="nav-link" href="<?php echo site_url('Transaksi') ?>">
            <i class="fa fa-fw fa-print"></i>
            <span class="nav-link-text">Transaksi</span>
            </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Transaksi">
            <a class="nav-link" href="<?php echo site_url('Transaksi/laporan') ?>">
            <i class="fa fa-fw fa-print"></i>
            <span class="nav-link-text">Laporan Penjualan</span>
            </a>
        </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
            </a>
        </li>
        </ul>
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
        </ul>
    </div>
</nav>