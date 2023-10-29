    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a class="navbar-brand d-flex align-items-center" href="<?= base_url() ?>beranda">
                <img class="logo" src="<?= base_url() ?>assets/img/logo.png" width="55" height="55" alt="">
                <span class="ml-2 keterangan-logo d-flex flex-column">
                    <span><strong>BARALEK</strong></span>
                    <span class="small">BPS Kota Sungai Penuh</span>
                </span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>

                    <li class="<?= ($this->uri->segment(1) == "beranda" || $this->uri->segment(1) == '') ? "active" : "" ?>">
                        <a class="nav-link scrollto" href="<?= base_url('beranda') ?>">Beranda</a>
                    </li>
                    <li class="<?= $this->uri->segment(1) == "materi" ? "active" : "" ?>">
                        <a class="nav-link scrollto" href="<?= base_url('materi') ?>">Materi</a>
                    </li>
                    <li class="<?= $this->uri->segment(1) == "sdi" ? "active" : "" ?>">
                        <a class="nav-link scrollto" href="<?= base_url('sdi') ?>">SDI</a>
                    </li>
                    <li class="<?= $this->uri->segment(1) == "data-strategis" ? "active" : "" ?>">
                        <a class="nav-link scrollto" href="http://s.bps.go.id/depatistatistik2-beta" target="_blank">Data Strategis</a>
                    </li>
                    <li>
                        <a class="getstarted scrollto" href="http://s.bps.go.id/descan-tanjung" target="_blank">Desa Cantik</a>
                    </li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->