
var cart = {
    
    init: function() {
<<<<<<< HEAD
        cart.loadCartInfo();
=======
>>>>>>> 1d8bbda4ff7828f2aed4e5f7413364afaaea8d04
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
<<<<<<< HEAD
        $('.btn-cart-header').off('click').on('click', function(){
            var cartItems = [];
            if (localStorage.getItem('Cart') !== null) {
                cartItems = JSON.parse(localStorage.getItem('Cart'));
            }
            var productIdsParams = cartItems.toString();
            var url = "cart.php?ProductId=" + productIdsParams;
            window.location.href=url;
        })
      

        
    },
    loadCartInfo(){
        var cartItems = [];
        if (localStorage.getItem('Cart') !== null) {
            cartItems = JSON.parse(localStorage.getItem('Cart'));
        }
        var listId = cartItems.toString();
        $.post('cartheader.php',{
            ProductId: listId
        }, function(response){
            var data = JSON.parse(response);
            console.log(data);
            //mini-cart-total
            var total = 0;
            data.forEach((e) => {
                total += parseInt(e.price)*1;
            })
            // alert(total);
            var show_header = `$ ${total} (${data.length})`;
            $('.mini-cart-total').text(show_header);

            var html = "";
            data.forEach((e) => {
                html = html + `
                <li class="single-cart-item">
                    <div class="cart-img">
                        <a href="singleProduct.php?productId=${e.id}"><img src="${e.picture}" alt=""></a>
                    </div>
                    <div class="cart-content">
                        <h5 class="product-name"><a href="singleProduct.php?productId=${e.id}">${e.name}</a></h5>
                        <span class="number-product-incart">1 ×</span>
                        <span class="product-price">$ ${e.price}</span>
                    </div>
                    <div class="cart-item-remove">
                        <a title="Remove" class="Remove-from-cart" href="javascript:void(0)" product-id="${e.id}"><i class="fa fa-trash"></i></a>
                    </div>
                </li>
                `;
            }) 
            $('.header-cart-items').html('').html(html);
            cart.registerEvents();
        })
    },
=======

        
    },
>>>>>>> 1d8bbda4ff7828f2aed4e5f7413364afaaea8d04
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




<<<<<<< HEAD


=======
>>>>>>> 1d8bbda4ff7828f2aed4e5f7413364afaaea8d04
