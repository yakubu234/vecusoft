<?php include('header.php'); ?>
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg-1.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Secure <span class="inner-text">Checkout</span></h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="cart.php">Basket</a></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12"><div class="woocommerce-info">Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a></div></div>
            </div>
            <form action="#" method="post" class="woocommerce-checkout row">
                
                <div class="col-lg-6">
                    <div class="woocommerce-billing-fields">
                        <h3 class="h4 mt-0">Billing Details</h3>
                        <div class="woocommerce-billing-fields__field-wrapper row">
                            <div class="col-md-6 form-group"><input type="text" class="form-control" placeholder="First Name*" name="billing_first_name"></div>
                            <div class="col-md-6 form-group"><input type="text" class="form-control" placeholder="Last Name*" name="billing_last_name"></div>
                            <div class="col-12 form-group"><input type="text" class="form-control" placeholder="Company Name (Optional)" name="billing_company"></div>
                            <div class="col-12 form-group">
                                <select class="form-select" name="billing_country">
                                    <option value="">Select a Country*</option>
                                    <option value="UK" selected>United Kingdom (UK)</option>
                                    <option value="US">United States (US)</option>
                                    <option value="CA">Canada</option>
                                </select>
                            </div>
                            <div class="col-12 form-group"><input type="text" class="form-control" placeholder="Street Address*" name="billing_address_1"></div>
                            <div class="col-12 form-group"><input type="text" class="form-control" placeholder="Town / City*" name="billing_city"></div>
                            <div class="col-12 form-group"><input type="text" class="form-control" placeholder="Postcode / ZIP*" name="billing_postcode"></div>
                            <div class="col-md-6 form-group"><input type="tel" class="form-control" placeholder="Phone*" name="billing_phone"></div>
                            <div class="col-md-6 form-group"><input type="email" class="form-control" placeholder="Email Address*" name="billing_email"></div>
                        </div>
                    </div>
                    <div class="woocommerce-shipping-fields mt-40">
                        <h3 class="h4">Shipping Details</h3>
                        <p class="form-group woocommerce-form__label-checkbox">
                            <input id="ship-to-different-address-checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox" type="checkbox" name="ship_to_different_address" value="1" checked>
                            <label for="ship-to-different-address-checkbox">Ship to a different address?</label>
                        </p>
                        <div class="shipping_address row" style="display: none;">
                             <div class="col-md-6 form-group"><input type="text" class="form-control" placeholder="First Name*" name="shipping_first_name"></div>
                             <div class="col-md-6 form-group"><input type="text" class="form-control" placeholder="Last Name*" name="shipping_last_name"></div>
                             <div class="col-12 form-group"><input type="text" class="form-control" placeholder="Street Address*" name="shipping_address_1"></div>
                             <div class="col-12 form-group"><input type="text" class="form-control" placeholder="Town / City*" name="shipping_city"></div>
                             <div class="col-12 form-group"><input type="text" class="form-control" placeholder="Postcode / ZIP*" name="shipping_postcode"></div>
                        </div>
                        <div class="woocommerce-additional-fields">
                            <h3 class="h4 mt-40">Order Notes</h3>
                            <div class="woocommerce-additional-fields__field-wrapper">
                                <p class="form-group"><textarea name="order_comments" class="form-control" placeholder="Notes about your order, e.g. special notes for delivery of your wig/extension." rows="2"></textarea></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="vs-product-box sidebar-area bg-light rounded-1 p-30 mt-40 mt-lg-0">
                        <h3 class="h4 mt-0">Your Order</h3>
                        <table class="woocommerce-checkout-review-order-table">
                            <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-total">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="cart_item">
                                    <td class="product-name">Silky Straight Human Hair <strong class="product-quantity">× 1</strong></td>
                                    <td class="product-total"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>99.00</span></td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="product-name">Anti-Frizz Hair Serum <strong class="product-quantity">× 2</strong></td>
                                    <td class="product-total"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>44.00</span></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>143.00</span></td>
                                </tr>
                                <tr class="woocommerce-shipping-totals shipping">
                                    <th>Shipping (Free)</th>
                                    <td data-title="Shipping">Free Shipping</td>
                                </tr>
                                <tr class="order-total">
                                    <th>Order Total</th>
                                    <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>143.00</span></strong></td>
                                </tr>
                            </tfoot>
                        </table>
                        
                        <div class="woocommerce-checkout-payment">
                            <ul class="wc_payment_methods payment_methods methods list-unstyled">
                                <li class="wc_payment_method payment_method_bacs">
                                    <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked">
                                    <label for="payment_method_bacs">Direct Bank Transfer</label>
                                    <div class="payment_box payment_method_bacs"><p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p></div>
                                </li>
                                <li class="wc_payment_method payment_method_cod">
                                    <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod">
                                    <label for="payment_method_cod">Cash on Delivery</label>
                                    <div class="payment_box payment_method_cod" style="display:none;"><p>Pay with cash upon delivery of your hair products.</p></div>
                                </li>
                                <li class="wc_payment_method payment_method_paypal">
                                    <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal">
                                    <label for="payment_method_paypal">PayPal <img src="assets/img/card.png" alt="PayPal Accepted"></label>
                                    <div class="payment_box payment_method_paypal" style="display:none;"><p>Pay easily via PayPal. You can pay with your credit card if you don't have a PayPal account.</p></div>
                                </li>
                            </ul>
                            <div class="form-row place-order">
                                <p class="form-group woocommerce-terms-and-conditions-wrapper">
                                    <input type="checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox" id="terms" name="terms" value="1">
                                    <label for="terms" class="woocommerce-form__label woocommerce-form__label-for-checkbox">I have read and agree to the website <a href="terms.php">terms and conditions</a> <span class="required">*</span></label>
                                </p>
                                <button type="submit" class="vs-btn style3" name="woocommerce_checkout_place_order" id="place_order">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

<?php include('footer.php'); ?>