<div class="top-image">
<!--    <img src="../images/single-page-top2.jpg" alt="" />-->

</div><!-- Page Top Image -->

<section class="inner-page">
    <div class="container">
        <div class="page-title">
            <h1>OUR <span>MERCHANDISE</span></h1>
        </div><!-- Page Title -->
        <div class="row">
            <div class="left-content col-md-9">

                <div class="featured-products">
                    <h3 class="sub-head">Buy these products to help us raise Fundraise.</h3>
                    <p>T-shirts come in small, medium, large and extra large sizes. Beautiful wristbands in a variety of colours to keep it stylish while showing your support in the fight against cancer. </p>

                    <div class="row">
                        <ul class="products">
                            <?php foreach($products as $p): ?>
                        <li class="col-md-4">
                            <img src="<?php echo base_url();?>assets/images/<?php echo $p['image']; ?>" alt="rfl_products" />
                            <h4><?php echo $p['product_name']; ?></h4>
                            <p><?php echo $p['product_desc']; ?></p>
                            <div class="ratings">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </div>
                            <div class="product-price">

                                <p>Ksh. <?php echo $p['unit_price']; ?></p>
                                <?php echo form_open('relay/add_cart_item'); ?>
                                <br>
                                <br/>
                                <fieldset>
                                    <label>Quantity</label>
                                    <?php echo form_input('quantity', '1', 'maxlength="3"'); ?>
                                    <?php echo form_hidden('productID', $p['productID']); ?>
                                    <?php echo form_submit('add', 'Add to Cart'); ?>
                                </fieldset>
                                <?php echo form_close(); ?>
                            </div>
                        </li><!--Product-->
                            <?php endforeach;?>
                        </ul>

                    </div>

                </div>

            </div>


        </div>


</section>
</div>