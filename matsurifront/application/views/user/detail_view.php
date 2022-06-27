<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Matsuri Castle - Sushi Restaurant</title>
    <link rel="icon" type="image/png" href="<?= base_url('assets/'); ?>img/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?= base_url('assets/'); ?>img/favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/cart.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/styles-admin.css">
</head>

<body>
    <!-- Image and text -->
    <!-- <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('assets/'); ?>img/logo/matsuricastle.png" width="30" height="30" alt="">
        </a>
    </nav> -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo base_url(); ?>home">
            <img src="<?= base_url('assets/'); ?>img/logo/matsuricastle.png" width="30" height="30" alt="">
        </a>
    </nav>

    <div class="row mb-3">

        <div class="col-md-5">

            <div class="img-container  border">

                <img src="<?= base_url() . 'assets/images/' . $productsDetail->gambar; ?>" alt="">

            </div>

        </div>

        <div class="col-md-7 pl-5">

            <h1><?= $productsDetail->nm_barang; ?></h1>

            <hr>

            <div class="row">

                <div class="col-3 text-muted">
                    <h5>Harga</h5>
                </div>

                <div class="col-9">
                    <h3><?= 'Rp. ' . number_format($productsDetail->harga) ?></h3>
                </div>

            </div>

            <hr>

            <div class="row">

                <div class="col-3 text-muted">
                    <h5>Jumlah Barang</h5>
                </div>

                <div class="col-9">

                    <?php

                    $stok = ($productsDetail->stok) - ($productsDetail->stok_min);

                    ?>

                    <small>Stok tersisa : <?php if ($stok >= 0) {
                                                echo $stok;
                                            } else {
                                                echo "0";
                                            }
                                            echo " " . $productsDetail->satuan; ?></small><br><br>

                    <form action="<?php echo site_url('produk/add_to_cart/' . $productsDetail->kd_barang) ?>" method="post">

                        <span class="m-2">

                            <button class="btn btn-minus btn-counter text-center custom-button" type="button"><i class="fas fa-minus"></i></button>

                            <input type="text" name="qty" class="col-2 btn border px-2 count" value="1" onkeypress="return onlyNumberKey(event)">

                            <button class="btn btn-plus btn-counter text-center custom-button" type="button"><i class="fas fa-plus"></i></button>

                        </span>

                        <span class="hargaX"></span>

                        <button id="addtocart" type="submit" class="btn btn-beli m-2"><i class="fas fa-plus"></i>&nbsp;Add to Cart</button>

                        <?php if ($this->session->flashdata('success')) : ?>

                            <div class="alert alert-success" role="alert">

                                <?php echo $this->session->flashdata('success'); ?>

                            </div>

                        <?php endif; ?>

                    </form>

                </div>

            </div>

            <hr>

            <div class="row" id="smoth-up">

                <div class="col-3 text-muted">
                    <h5>Deskripsi</h5>
                </div>

                <div class="col-9">
                    <h6>

                        <?= $productsDetail->deskripsi ?>

                    </h6>
                </div>

            </div>

        </div>

    </div>
</body>

<!-- Java Script -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</html>