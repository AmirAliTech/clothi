<?php
include("header1.php");
?>

<main class="main-content site-wrapper-reveal">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area bg-img" data-bg-img="assets/img/photos/bg-page5.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-title-content">
              <h2 class="title">Cart</h2>
              <div class="bread-crumbs"><a href="index.php">Home<span class="breadcrumb-sep">></span></a><span class="active">Cart</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--== Start Cart Area Wrapper ==-->
    <section class="product-area cart-page-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="shipping-info">
              <div class="loading-bar">
                <div class="load-percent"></div>
                <div class="label-free-shipping">
                  <div class="free-shipping svg-icon-style">
                    <span class="svg-icon" id="svg-icon-shipping2" data-svg-icon="assets/img/icons/shop1.svg"></span>
                  </div>
                  <p>Spend £101.10 to get Free Shipping</p>
                </div>
              </div>
            </div>
            <div class="cart-table-wrap">
              <div class="cart-table table-responsive">
                <table>
                  <thead>
                    <tr>
                      <th class="pro-remove"> </th>
                      <th class="pro-thumbnail"> </th>
                      <th class="pro-name">Product</th>
                      <th class="pro-price">Price</th>
                      <th class="pro-quantity">Quantity</th>
                      <th class="pro-subtotal">Subtotal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="pro-remove"><i class="lastudioicon-e-remove"></i></td>
                      <td class="pro-thumbnail">
                        <div class="pro-info">
                          <div class="pro-img">
                            <a href="shop-single-product.php"><img src="assets/img/shop/15.jpg" alt="Moren-Shop"></a>
                          </div>
                        </div>
                      </td>
                      <td class="pro-name"><span>I’m a Unicorn Earrings</span></td>
                      <td class="pro-price"><span>£69.00</span></td>
                      <td class="pro-quantity">
                        <div class="action-top">
                          <div class="pro-qty-area">
                            <div class="pro-qty">
                              <input type="text" id="quantity" title="Quantity" value="1" />
                            </div>
                          </div>
                        </div>
                      <td class="pro-subtotal"><span>£69.00</span></td>
                    </tr>
                    <tr>
                      <td class="pro-remove"><i class="lastudioicon-e-remove"></i></td>
                      <td class="pro-thumbnail">
                        <div class="pro-info">
                          <div class="pro-img">
                            <a href="shop-single-product.php"><img src="assets/img/shop/1.jpg" alt="Moren-Shop"></a>
                          </div>
                        </div>
                      </td>
                      <td class="pro-name"><span>Knit cropped cardigan</span></td>
                      <td class="pro-price"><span>£29.90</span></td>
                      <td class="pro-quantity">
                        <div class="action-top">
                          <div class="pro-qty-area">
                            <div class="pro-qty">
                              <input type="text" id="quantity1" title="Quantity" value="1" />
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="pro-subtotal"><span>£29.90</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="coupon-action">
                <a href="shop.php" class="d-flex justify-content-end w-100">
              <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Update cart</button></a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cart-payment">
              <div class="cart-subtotal">
                <h2 class="title">Cart totals</h2>
                <table>
                  <tbody>
                    <tr>
                      <th>Subtotal</th>
                      <td><span class="amount">£147.00</span></td>
                    </tr>
                    <tr class="shipping-totals">
                      <th>Shipping</th>
                      <td>
                        <ul>
                          <li>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                              <label class="form-check-label" for="flexRadioDefault1">Flat rate: <span class="amount">£50.00</span></label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                              <label class="form-check-label" for="flexRadioDefault2">Local pickup</label>
                            </div>
                          </li>
                        </ul>
                        <p>Shipping options will be updated during checkout.</p>
                        <p>Calculate shipping</p>
                      </td>
                    </tr>
                    <tr class="amount-total">
                      <th>Total</th>
                      <td><span class="amount">£197.00</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <a class="btn-theme" href="shop-checkout.php">Proceed to Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Cart Area Wrapper ==-->

    <!--== Start Category Area Wrapper ==-->
    <!--== End Category Area Wrapper ==-->

    <!--== Start Divider Area Wrapper ==-->
    <section class="divider-area bg-overlay4 bg-img" data-bg-img="assets/img/photos/bg-d7.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 m-auto">
            <div class="divider-content divider-content-style5">
              <h2>HOT TREND</h2>
              <a href="shop.php" class="btn-theme btn-border">shop now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Divider Area Wrapper ==-->

    <!--== Start Featured Area Wrapper ==-->
    
    <!--== End Featured Area Wrapper ==-->
  </main>






























<?php
include("footer.php");
?>