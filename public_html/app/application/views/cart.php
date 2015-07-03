
<div class="top-image">
    <img src="../images/single-page-top2.jpg" alt="" />
</div><!-- Page Top Image -->

<section class="inner-page">
    <div class="container">
        <div class="page-title">
            <h1>My <span>Cart</span></h1>
        </div><!-- Page Title -->
        <div class="row">
            <div class="left-content col-md-9">
                <?php if(!$this->cart->contents()):
                    echo 'You don\'t have any items yet.';
                else:
                ?>

                <?php echo form_open('relay/update_cart'); ?>
                <table width="100%" cellpadding="0" cellspacing="0">
                    <thead>
                    <tr>
                        <td>Quantity</td>
                        <td>Item Description</td>
                        <td>Item Price</td>
                        <td>Sub-Total</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; // Keep track of the amount of loops ?>
                    <?php foreach($this->cart->contents() as $items):  // break the cart contents into parts ?>

                        <?php echo form_hidden('rowid[]', $items['rowid']); // hidden field with unique id, needed in order to update?>
                        <tr <?php if($i&1){ echo 'class="alt"'; }?>>
                            <td>
                                <?php echo form_input(array('name' => 'qty[]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?>
                            </td>

                            <td><?php echo $items['name']; ?></td>

                            <td>Ksh.<?php echo $this->cart->format_number($items['price']); ?></td>
                            <td>Ksh.<?php echo $this->cart->format_number($items['subtotal']); ?></td>
                        </tr>

                        <?php $i++; ?>
                    <?php endforeach; ?>

                    <tr>
                        <td</td>
                        <td></td>
                        <td><strong>Total</strong></td>
                        <td>Ksh.<?php echo $this->cart->format_number($this->cart->total()); ?></td>
                    </tr>
                    </tbody>
                </table>

                <p><?php echo form_submit('', 'Update your Cart'); echo anchor('relay/empty_cart', 'Empty Cart', 'class="empty"');?></p>
                <p><small>If the quantity is set to zero, the item will be removed from the cart.</small></p>
<?php
                    echo form_close();
                endif;
                ?>
</div>

        </div>
    </div>


</section>