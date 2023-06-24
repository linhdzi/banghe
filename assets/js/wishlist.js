var wishlist = {
    init: function() {
        wishlist.registerEvent();
    },
    registerEvent: function() {
        $('.Wishlist-product').off('click').on('click', function() {
            var id = $(this).attr('product-id');
            wishlist.saveWishlistWithSS(id);
        });
    },
    saveWishlistWithSS: function(id) {
        // create array_wishlist to save wishlist
        var array_wishlist = [];
        // check if wishlist exists
        if (localStorage.getItem('Wishlist') !== null) {
            // get wishlist
            var listIdSave = JSON.parse(localStorage.getItem('Wishlist'));
            // push new id in listIdSave
            listIdSave.push(id);
            // save array_wishlist
            localStorage.setItem('Wishlist', JSON.stringify(listIdSave));
        } else {
            // create wishlist
            array_wishlist.push(id);
            localStorage.setItem('Wishlist', JSON.stringify(array_wishlist));
        }
        // go to wishlist page
        var listProduct = JSON.parse(localStorage.getItem('Wishlist'));
        // change from array to string
        var listProduct_string = listProduct.toString();
        var url = 'wishlist.php?ProductId=' + listProduct_string;
        window.location.href = url;
    }
};

wishlist.init();