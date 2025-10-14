<?php include('header.php'); ?>
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg-1.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Your Shopping <span class="inner-text">Basket</span></h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.php">Home</a></li>
                        <li>Basket</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="woocommerce-notices-wrapper">
                <div class="woocommerce-message">Your basket has been updated.</div>
            </div>
            <form action="#" method="post" class="woocommerce-cart-form">
                <table class="cart_table">
                    <thead>
                        <tr>
                            <th class="cart-col-image">Image</th>
                            <th class="cart-col-productname">Product</th>
                            <th class="cart-col-price">Price</th>
                            <th class="cart-col-quantity">Quantity</th>
                            <th class="cart-col-total">Subtotal</th>
                            <th class="cart-col-remove">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="cart_item">
                            <td data-title="Product Image"><a class="woocommerce-product-thumbnail" href="shop_details.php"><img src="assets/img/product/p-1-1.png" alt="Product Image"></a></td>
                            <td data-title="Product Name"><a class="woocommerce-product-thumbnail" href="shop_details.php">Silky Straight Human Hair</a></td>
                            <td data-title="Price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>99.00</span></td>
                            <td data-title="Quantity">
                                <div class="quantity">
                                    <input type="number" class="qty" step="1" min="1" max="10" name="cart_quantity" value="1" title="Qty">
                                </div>
                            </td>
                            <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>99.00</span></td>
                            <td data-title="Remove"><a href="#" class="remove"><i class="fal fa-trash-alt"></i></a></td>
                        </tr>
                        <tr class="cart_item">
                            <td data-title="Product Image"><a class="woocommerce-product-thumbnail" href="shop_details.php"><img src="assets/img/product/p-1-2.png" alt="Product Image"></a></td>
                            <td data-title="Product Name"><a class="woocommerce-product-thumbnail" href="shop_details.php">Anti-Frizz Hair Serum</a></td>
                            <td data-title="Price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>22.00</span></td>
                            <td data-title="Quantity">
                                <div class="quantity">
                                    <input type="number" class="qty" step="1" min="1" max="10" name="cart_quantity" value="2" title="Qty">
                                </div>
                            </td>
                            <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>44.00</span></td>
                            <td data-title="Remove"><a href="#" class="remove"><i class="fal fa-trash-alt"></i></a></td>
                        </tr>
                    </tbody>
                </table>
                <div class="row justify-content-end">
                    <div class="col-md-8 col-lg-7 col-xl-6 text-end">
                        <div class="actions">
                            <button type="submit" class="vs-btn style3" name="update_cart">Update Basket</button>
                            <a href="shop.php" class="vs-btn style3">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row justify-content-end">
                <div class="col-md-8 col-lg-5 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="cart-collaterals">
                        <h3 class="h4 cart-total-title">Basket Totals</h3>
                        <table class="woocommerce-cart-totals">
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>143.00</span></td>
                                </tr>
                                <tr class="woocommerce-shipping-totals shipping">
                                    <th>Shipping</th>
                                    <td data-title="Shipping">
                                        <ul class="woocommerce-shipping-methods list-unstyled">
                                            <li><input type="radio" id="free_shipping" name="shipping_method" value="free_shipping" class="shipping_method" checked>
                                                <label for="free_shipping">Free Shipping (Orders over £50)</label>
                                            </li>
                                            <li><input type="radio" id="flat_rate" name="shipping_method" value="flat_rate" class="shipping_method">
                                                <label for="flat_rate">Flat Rate: <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>5.00</span></label>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>143.00</span></strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="wc-proceed-to-checkout"><a href="checkout.php" class="vs-btn style3">Proceed to Checkout</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include('footer.php'); ?>