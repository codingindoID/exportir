        <section class="section featured-product wow fadeInUp">
            <h3 class="section-title">Featured products</h3>
            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                <?php foreach ($produk as $prod) : ?>
                    <div class="item item-carousel">

                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image"> <a href="detail.html"><img src="<?= base_url('assets/images/products/') . $prod->img_produk ?>" alt=""></a> </div>
                                    <!-- /.image -->
                                    <!-- <div class="tag hot"><span>hot</span></div> -->

                                </div>
                                <!-- /.product-image -->

                                <div class="product-info text-left">
                                    <h3 class="name-produk"><a href="#"><?= $prod->nama_produk ?></a></h3>
                                    <!-- <div class="rating rateit-small"></div> -->
                                    <div class="description" style="text-align: justify">
                                        <?php
                                        $str = $prod->deskripsi_produk;
                                        if (strlen($str) > 100)
                                            $str = substr($str, 0, 100) . '...';
                                        ?>
                                        <?= $str ?>
                                    </div>
                                    <div class="product-price-s"> <span class="price">Rp. <?= number_format($prod->harga, 0) ?> </span>,-</div>
                                    <!-- /.product-price -->

                                </div>
                                <!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                            </li>
                                            <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                            <li class="lnk"> <a class="add-to-cart" href="#" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                        </ul>
                                    </div>
                                    <!-- /.action -->
                                </div>
                                <!-- /.cart -->
                            </div>
                            <!-- /.product -->

                        </div>
                        <!-- /.products -->
                    </div>
                <?php endforeach ?>
                <!-- /.item -->
            </div>
            <!-- /.home-owl-carousel -->
        </section>