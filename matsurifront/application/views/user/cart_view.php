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

    <main>
        <div class="basket">
            <div class="basket-module">
                <label for="promo-code">Enter a promotional code</label>
                <input id="promo-code" type="text" name="promo-code" maxlength="5" class="promo-code-field">
                <button class="promo-code-cta">Apply</button>
            </div>
            <div class="basket-labels">
                <ul>
                    <li class="item item-heading">Item</li>
                    <li class="price">Price</li>
                    <li class="quantity">Quantity</li>
                    <li class="subtotal">Subtotal</li>
                </ul>
            </div>
            <div class="basket-product">
                <div class="item">
                    <div class="product-image">
                        <img src="<?= base_url('assets/'); ?>img/new/sushipaket.jpg" alt="Placholder Image 2" class="product-frame">
                    </div>
                    <div class="product-details">
                        <h1><strong><span class="item-quantity">4</span> Sushi Packet </strong> Lace Sleeve Cuff Dress
                        </h1>
                        <p><strong>with bowl</strong></p>
                        <p>Product Code - 232321939</p>
                    </div>
                </div>
                <div class="price">26.00</div>
                <div class="quantity">
                    <input type="number" value="4" min="1" class="quantity-field">
                </div>
                <div class="subtotal">104.00</div>
                <div class="remove">
                    <button>Remove</button>
                </div>
            </div>
            <div class="basket-product">
                <div class="item">
                    <div class="product-image">
                        <img src="<?= base_url('assets/'); ?>img/new/sushipaket.jpg" alt="Placholder Image 2" class="product-frame">
                    </div>
                    <div class="product-details">
                        <h1><strong><span class="item-quantity">4</span> Sushi Packet </strong> Lace Sleeve Cuff Dress
                        </h1>
                        <p><strong>with bowl</strong></p>
                        <p>Product Code - 232321939</p>
                    </div>
                </div>
                <div class="price">26.00</div>
                <div class="quantity">
                    <input type="number" value="1" min="1" class="quantity-field">
                </div>
                <div class="subtotal">26.00</div>
                <div class="remove">
                    <button>Remove</button>
                </div>
            </div>
        </div>
        <aside>
            <div class="summary">
                <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
                <div class="summary-subtotal">
                    <div class="subtotal-title">Subtotal</div>
                    <div class="subtotal-value final-value" id="basket-subtotal">130.00</div>
                    <div class="summary-promo hide">
                        <div class="promo-title">Promotion</div>
                        <div class="promo-value final-value" id="basket-promo"></div>
                    </div>
                </div>
                <div class="summary-delivery">
                    <select name="delivery-collection" class="summary-delivery-selection">
                        <option value="0" selected="selected">Select Delivery</option>
                        <option value="first-class">Gofood</option>
                        <option value="second-class">Shopeefood</option>
                        <option value="signed-for">GrabMart</option>
                    </select>
                </div>
                <div class="summary-total">
                    <div class="total-title">Total</div>
                    <div class="total-value final-value" id="basket-total">130.00</div>
                </div>
                <div class="summary-checkout">
                    <a class="btn btn-outline-danger checkout-cta" href="<?php echo base_url(); ?>payment" role="button">Go to Secure Checkout</a>
                </div>
            </div>
        </aside>
    </main>
</body>

<!-- Java Script -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</html>