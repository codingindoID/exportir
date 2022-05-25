<?php $this->load->view('pars/header') ?>

<body class="cnt-home">
    <header class="header-style-1">
        <!-- topbar -->
        <?php $this->load->view('pars/menu1') ?>
        <?php $this->load->view('pars/navbar') ?>

    </header>

    <div class="body-content outer-top-xs" id="top-banner-and-menu">
        <div class="container">
            <?= $contents ?>
        </div>
    </div>
    <?php $this->load->view('pars/script') ?>
</body>

</html>