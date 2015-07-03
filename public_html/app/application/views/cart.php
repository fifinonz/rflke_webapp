
<div class="top-image">
    <img src="<?php echo base_url();?>assets/images/single-page-top2.jpg" alt="" />
</div><!-- Page Top Image -->

<section class="inner-page">
    <div class="container">
        <div class="page-title">
            <h1>My <span>Cart</span></h1>
        </div><!-- Page Title -->
        <div class="row">
            <div class="left-content col-md-9">
                <div id="cart_content">
                <?php if(!$this->cart->contents()):
                    echo 'You don\'t have any items yet.';
                else:
                ?>

                <?php echo form_open('relay/update_cart'); ?>
                <table style="background-image: -webkit-gradient( linear, left bottom, left top, color-stop(0, rgb(232,234,235)), color-stop(0.5, rgb(237,237,238)) )" width="100%" cellpadding="5" cellspacing="0">
                    <div class="cart-table">
                    <thead>
                    <tr style="background-image: -webkit-gradient( linear, left bottom, left top, color-stop(0, rgb(232,234,235)), color-stop(0.5, rgb(237,237,238)) )">
                        <div class="cart-head">

                        <td><h4 class="product">Product</h4></td>
                        <td><h4 class="price">Price</h4></td>
                        <td><h4 class="quanity">Quantity</h4></td>
                        <td><h4 class="total">Sub-Total</h4></td>
                            </div>
                    </tr>
                    </thead>
                    </div>
                    <tbody>
                    <?php $i = 1; // Keep track of the amount of loops ?>
                    <?php foreach($this->cart->contents() as $items):  // break the cart contents into parts ?>

                        <?php echo form_hidden('rowid[]', $items['rowid']); // hidden field with unique id, needed in order to update?>
                        <tr style="background: none repeat scroll 0 0 #FCFCFC" >

                            <td class="product"><?php echo $items['name']; ?>
                                <img src="<?php echo base_url();?>assets/images/cart-thumb.jpg" alt="" />
                            </td>

                            <td class="price">Ksh.<?php echo $this->cart->format_number($items['price']); ?></td>
                            <td class="quantity">
                                <?php echo form_input(array('name' => 'qty[]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?>
                            </td>
                            <td class="total">Ksh.<?php echo $this->cart->format_number($items['subtotal']); ?></td>
                        </tr>

                        <?php $i++; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                    <tr>
                        <td</td>
                        <td></td>
                    </tr>


                <p><?php echo form_submit('', 'Update your Cart','class="cart-btn pull-right"'); echo anchor('relay/empty_cart', 'Empty Cart', 'class="cart-btn pull-right"');?></p>

                <p><small>If the quantity is set to zero, the item will be removed from the cart.</small></p>
                    <div class="cart-total cart-table">
                        <div class="cart-head">
                            <h2 style="color:#6a4d9b ">Cart Total</h2>
                        </div>
                        <ul>
                            <li><p>Cart Subtotal:</p><span>Ksh.<?php echo $this->cart->format_number($this->cart->total()); ?></span></li>
                            <li><p>Delivery </p><span>Free Delivery</span></li>
                            <li><p>Order Total:</p><span>Ksh.<?php echo $this->cart->format_number($this->cart->total()); ?></span></li>
                        </ul>
                    </div>
                    <section>
                    <a class="cart-btn pull-right" href="buy_product" title="">Back to Products</a>
                    <a class="cart-btn pull-right" href="checkout" title="">Proceed To Checkout</a>
                        </section>
                    <?php

                    echo form_close();
                endif;
                ?>
</div>

        </div>
    </div>
</div>

</section>