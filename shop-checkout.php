<?php
include("header1.php");
?>

 
<main class="main-content">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area bg-img" data-bg-img="assets/img/photos/bg-page1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-title-content">
              <h2 class="title">Checkout</h2>
              <div class="bread-crumbs"><a href="index.html">Home<span class="breadcrumb-sep">></span></a><span class="active">Checkout</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Page Title Area ==-->

    <!--== Start Shop Checkout Area ==-->
    <section class="shop-checkout-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="shop-return-login" id="returnloginAccordion">
              <div class="card">
                <h6>Returning customer? <span data-bs-toggle="collapse" data-bs-target="#returnloginaccordion"> Click here to login</span>
                </h6>
                <div id="returnloginaccordion" class="collapse" data-bs-parent="#returnloginAccordion">
                  <div class="card-body">
                    <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                    <form action="#" method="post">
                      <div class="form-group">
                        <label for="rl_username">Username or email <span class="required">*</span></label>
                        <input class="form-control" id="rl_username" type="text">
                      </div>
                      <div class="form-group">
                        <label for="rl_password">Password <span class="required">*</span></label>
                        <input class="form-control" id="rl_password" type="text">
                      </div>
                      <button class="btn btn-coupon w-100">Login</button>
                      <div class="remember-lostpassword">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="RadioRememberMe">
                          <label class="custom-control-label ps-1" for="RadioRememberMe">Remember me</label>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="shop-checkout-coupon" id="checkoutloginAccordion">
            </div>
          </div>
        </div>
        <div class="row ">
          <div class="col-lg-8 col-md-12">
            <div class="shop-billing-form">
              <form action="#" method="post">
                <h4 class="title">Billing details</h4>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="cf_name">First name <abbr class="required" title="required">*</abbr></label>
                      <input class="form-control" id="cf_name" type="text">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="cf_last_name">Last name <abbr class="required" title="required">*</abbr></label>
                      <input class="form-control" id="cf_last_name" type="text">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="cf_company_name">Company name (optional)</label>
                  <input class="form-control" id="cf_company_name" type="text">
                </div>

                <div class="form-group">
                  <label for="cf_country_region">Country / Region <abbr class="required" title="required">*</abbr></label>
                  <select class="form-control niceselect" id="cf_country_region" name="country">
                    <option value="Afghanistan">United Kingdom (UK)</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="India">India</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="England">England</option>
                    <option value="London">London</option>
                    <option value="London">London</option>
                    <option value="Chaina">China</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="cf_street_address">Street address <abbr class="required" title="required">*</abbr></label>
                  <input class="form-control" id="cf_street_address" type="text" placeholder="House number and street name">
                </div>

                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Apartment, suite, unit, etc. (optional)">
                </div>

                <div class="form-group">
                  <label for="cf_town_city">Town / City <abbr class="required" title="required">*</abbr></label>
                  <input class="form-control" id="cf_town_city" type="text">
                </div>

                <div class="form-group">
                  <label for="cf_state_region">State <abbr class="required" title="required">*</abbr></label>
                  <select class="form-control niceselect" id="cf_state_region" name="country">
                    <option value="Afghanistan">California</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="India">India</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="England">England</option>
                    <option value="London">London</option>
                    <option value="London">London</option>
                    <option value="Chaina">China</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="cf_zip">ZIP <abbr class="required" title="required">*</abbr></label>
                  <input class="form-control" id="cf_zip" type="text">
                </div>

                <div class="form-group">
                  <label for="cf_phone">Phone <abbr class="required" title="required">*</abbr></label>
                  <input class="form-control" id="cf_phone" type="text">
                </div>

                <div class="form-group">
                  <label for="cf_email">Email address <abbr class="required" title="required">*</abbr></label>
                  <input class="form-control" id="cf_email" type="text">
                </div>
                <div class="form-group">
                  <label for="textarea">Order Notes <abbr class="required" title="required">*</abbr></label>
                  <textarea name="textarea" id="textarea"class="form-control"></textarea>
                </div>

                <div class="checkout-box-wrap ship-different-address">
                  
                  <div class="ship-to-different single-form-row">
                    <div class="form-group">
                      <label for="cf_name_2">First name <abbr class="required" title="required">*</abbr></label>
                      <input class="form-control" id="cf_name_2" type="text">
                    </div>

                    <div class="form-group">
                      <label for="cf_last_name_2">Last name <abbr class="required" title="required">*</abbr></label>
                      <input class="form-control" id="cf_last_name_2" type="text">
                    </div>

                    <div class="form-group">
                      <label for="cf_company_name_2">Company name (optional)</label>
                      <input class="form-control" id="cf_company_name_2" type="text">
                    </div>

                    <div class="form-group">
                      <label for="cf_country_region_2">Country / Region <abbr class="required" title="required">*</abbr></label>
                      <select class="form-control niceselect" id="cf_country_region_2" name="country">
                        <option value="Afghanistan">United States (US)</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="India">India</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="England">England</option>
                        <option value="London">London</option>
                        <option value="London">London</option>
                        <option value="Chaina">China</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="cf_street_address_2">Street address <abbr class="required" title="required">*</abbr></label>
                      <input class="form-control" id="cf_street_address_2" type="text" placeholder="House number and street name">
                    </div>

                    <div class="form-group">
                      <input class="form-control" type="text" placeholder="Apartment, suite, unit, etc. (optional)">
                    </div>

                    <div class="form-group">
                      <label for="cf_town_city_2">Town / City <abbr class="required" title="required">*</abbr></label>
                      <input class="form-control" id="cf_town_city_2" type="text">
                    </div>

                    <div class="form-group">
                      <label for="cf_state_region_2">State <abbr class="required" title="required">*</abbr></label>
                      <select class="form-control niceselect" id="cf_state_region_2" name="country">
                        <option value="Afghanistan">California</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="India">India</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="England">England</option>
                        <option value="London">London</option>
                        <option value="London">London</option>
                        <option value="Chaina">China</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="cf_zip_2">ZIP <abbr class="required" title="required">*</abbr></label>
                      <input class="form-control" id="cf_zip_2" type="text">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="col-lg-4 col-md-12">
            <h4 class="title">Your order</h4>
            <div class="order-review-details">
              <table class="table">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Subtotal</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <span class="product-title">I’m a Unicorn Earrings</span>
                      <span class="product-quantity"> × 1</span>
                    </td>
                    <td>£69.00</td>
                  </tr>
                  <tr>
                    <td>
                      <span class="product-title">Knit cropped cardigan</span>
                      <span class="product-quantity"> × 1</span>
                    </td>
                    <td>£29.90</td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr class="cart-subtotal">
                    <th>Subtotal</th>
                    <td>£98.90</td>
                  </tr>
                  <tr class="shipping">
                    <th class="shipping-title">Shipping</th>
                    <td class="shipping-check">
                       <div class="form-check">
                        <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
                        <label class="form-check-label" for="validationFormCheck2">Flat rate: <span>£50.00</span></label>
                      </div>
                      <div class="form-check">
                        <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required>
                        <label class="form-check-label" for="validationFormCheck3">Local pickup</label>
                      </div>
                    </td>
                  </tr>
                  <tr class="final-total">
                    <th>Total</th>
                    <td><span class="total-amount">£148.90</span></td>
                  </tr>
                </tfoot>
              </table>
              <div class="shop-payment-method">
                <div id="accordion">
                  <div class="card">
                    <div class="card-header" id="direct_bank_transfer">
                      <h4 class="title" data-bs-toggle="collapse" data-bs-target="#itemOne" aria-controls="itemOne" aria-expanded="false">Direct bank transfer</h4>
                    </div>
                    <div id="itemOne" class="collapse" aria-labelledby="direct_bank_transfer" data-bs-parent="#accordion">
                      <div class="card-body">
                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header" id="check_payments">
                      <h5 class="title" data-bs-toggle="collapse" data-bs-target="#itemTwo" aria-controls="itemTwo" aria-expanded="true">Check payments</h5>
                    </div>
                    <div id="itemTwo" class="collapse show" aria-labelledby="check_payments" data-bs-parent="#accordion">
                      <div class="card-body">
                        <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header" id="cash_on_delivery">
                      <h5 class="title" data-bs-toggle="collapse" data-bs-target="#itemThree" aria-controls="itemThree" aria-expanded="false">Cash on delivery</h5>
                    </div>
                    <div id="itemThree" class="collapse" aria-labelledby="cash_on_delivery" data-bs-parent="#accordion">
                      <div class="card-body">
                        <p>Pay with cash upon delivery.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header" id="Pay_Pal">
                      <h5 class="title" data-bs-toggle="collapse" data-bs-target="#item4" aria-controls="item4" aria-expanded="false">PayPal <img src="assets/img/icons/paypal.png" alt=""> <a href="#/">What is PayPal?</a></h5>
                    </div>
                    <div id="item4" class="collapse" aria-labelledby="Pay_Pal" data-bs-parent="#accordion">
                      <div class="card-body">
                        <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <p class="shop-checkout-info">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
            <a href="/confirm.php"><button class="btn place-order-btn" type="submit">Place order</button></a>
          </div>
        </div>
      </div>
    </section>
    <!--== End Shop Checkout Area ==-->
  </main>




























<?php
include("footer.php");
?>