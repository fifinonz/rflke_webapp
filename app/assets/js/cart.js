/**
 * Created by Muthoni on 03/07/15.
 */

/*** SHOPPING CART ADD ITEMS ***/

$(document).ready(function() {
    /*place jQuery actions here*/
    var link = "http://localhost/relayforlifekenya.org/app/"; // Url to application

    $("ul.products form").submit(function() {
        // Get the product ID and the quantity
        var id = $(this).find('input[name=productID]').val();
        var qty = $(this).find('input[name=quantity]').val();
        alert('Item Added to Cart!');
        $.post(link + "relay/add_cart_item", { productID: id, quantity: qty, ajax: '1' },
            function(data){
                // Interact with returned data
                if(data == 'true'){

                    $.get(link + "relay/view_cart", function(cart){ // Get the contents of the url cart/show_cart
                        $("#cart_content").html(cart); // Replace the information in the div #cart_content with the retrieved data
                    });

                }else{
                    alert("Product does not exist");
                }
            });

        return false; // Stop the browser of loading the page defined in the form "action" parameter.
    });
    $("ul.slides form").submit(function() {
        // Get the product ID and the quantity
        var id = $(this).find('input[name=productID]').val();
        var qty = $(this).find('input[name=quantity]').val();
        alert('Item Added to Cart!');
        $.post(link + "relay/add_cart_item_home", { productID: id, quantity: qty, ajax: '1' },
            function(data){
                // Interact with returned data
                if(data == 'true'){

                    $.get(link + "relay/view_cart", function(cart){ // Get the contents of the url cart/show_cart
                        $("#cart_content").html(cart); // Replace the information in the div #cart_content with the retrieved data
                    });

                }else{
                    alert("Product does not exist");
                }
            });

        return false; // Stop the browser of loading the page defined in the form "action" parameter.
    });

});