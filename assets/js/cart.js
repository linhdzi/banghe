
var cart = {
    
    init: function() {
        cart.registerEvents();
    },
    registerEvents: function() {
        $('.Add-to-cart').off('click').on('click', function() {
            var id = $(this).attr('product-id');
            cart.addToCart(id);
        });
        $('.Remove-from-cart').off('click').on('click', function() {
            var id = $(this).attr('product-id');
            cart.removeFromCart(id);
        });

        
    },
    addToCart: function(id) {
        var cartItems = [];
        if (localStorage.getItem('Cart') !== null) {
            cartItems = JSON.parse(localStorage.getItem('Cart'));
        }
        if (cartItems.indexOf(id) === -1) {
            cartItems.push(id);
            localStorage.setItem('Cart', JSON.stringify(cartItems));
            alert('Added to cart!');

            //change to cart page
        var listProduct = JSON.parse(localStorage.getItem('Cart'));
        //change form array to string
        var listProduct_string = listProduct.toString();
        var url = 'cart.php?ProductId=' + listProduct_string;
        window.location.href=url;
        } else {
            alert('This item is already in your cart.');
        }
        
    },
    removeFromCart: function(id) {
        var cartItems = [];
        if (localStorage.getItem('Cart') !== null) {
            cartItems = JSON.parse(localStorage.getItem('Cart'));
            var index = cartItems.indexOf(id);
            if (index !== -1) {
                cartItems.splice(index, 1);
                localStorage.setItem('Cart', JSON.stringify(cartItems));
                alert('Removed from cart!');
                var url = "cart.php?ProductId=" + cartItems.toString();
                window.location.href = url;
            }
        }
    }

    
};

cart.init();



document.getElementById("SearchByCateBrand").onclick = function() {
    var searchInput = document.getElementById("Brand").value;
    window.location.href = "shop.php?cateBrand=" + encodeURIComponent(searchInput);
  };




