<div class="header-nav animate-dropdown">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                    <div class="nav-outer">
                        <ul class="nav navbar-nav">
                            <li class="dropdown yamm-fw active"> <a href="<?= site_url('') ?>">Home</a> </li>

                            <?php foreach ($menu as $mn) : ?>
                                <li class="dropdown yamm mega-menu"> <a href="#" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown"><?= $mn['kategori'] ?></a>
                                    <ul class="dropdown-menu container w-50">
                                        <li>
                                            <div class="yamm-content ">
                                                <ul class="links">
                                                    <?php foreach ($mn['sub_menu'] as $sub) : ?>
                                                        <li><a href="<?= site_url('detil-page/') . $sub->id_sub_kategori ?>"><?= $sub->nama_menu ?></a></li>
                                                    <?php endforeach ?>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            <?php endforeach ?>
                        </ul>
                        <!-- /.navbar-nav -->
                        <div class="clearfix"></div>
                    </div>
                    <!-- /.nav-outer -->
                </div>
                <!-- /.navbar-collapse -->

            </div>
            <!-- /.nav-bg-class -->
        </div>
        <!-- /.navbar-default -->
    </div>
    <!-- /.container-class -->

</div>