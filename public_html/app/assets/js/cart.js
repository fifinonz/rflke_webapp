/**
 * Created by Muthoni on 03/07/15.
 */

/*** SHOPPING CART ADD ITEMS ***/

$(document).ready(function() {
    /*place jQuery actions here*/
    var link = "http://localhost/relayforlifekenya.org/public_html/app/index.php"; // Url to application

    $("ul.products form").submit(function() {
        // Get the product ID and the quantity
        var id = $(this).find('input[name=productID]').val();
        var qty = $(this).find('input[name=quantity]').val();

        $.post(link + "relay/add_cart_item", { productID: id, quantity: qty, ajax: '1' },
            function(data){
                // Interact with returned data
            });

        return false; // Stop the browser of loading the page defined in the form "action" parameter.
    });

});