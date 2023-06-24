var wishlist = {
    init: function() {
        wishlist.registerEvents();
    },
    registerEvents: function() {
        $('.Add-to-wishlist').off('click').on('click', function() {
            var id = $(this).attr('product-id');
            wishlist.saveToWishlist(id);
        });
        $('.Remove-from-wishlist').off('click').on('click', function() {
            var id = $(this).attr('product-id');
            wishlist.removeFromWishlist(id);
        });
    },
    saveToWishlist: function(id) {
        var wishlistItems = [];
        if (localStorage.getItem('Wishlist') !== null) {
            wishlistItems = JSON.parse(localStorage.getItem('Wishlist'));
        }
        if (wishlistItems.indexOf(id) === -1) {
            wishlistItems.push(id);
            localStorage.setItem('Wishlist', JSON.stringify(wishlistItems));
            alert('Added to wishlist!');
        } else {
            alert('This item is already in your wishlist.');
        }
    },
    removeFromWishlist: function(id) {
        var wishlistItems = [];
        if (localStorage.getItem('Wishlist') !== null) {
            wishlistItems = JSON.parse(localStorage.getItem('Wishlist'));
            var index = wishlistItems.indexOf(id);
            if (index !== -1) {
                wishlistItems.splice(index, 1);
                localStorage.setItem('Wishlist', JSON.stringify(wishlistItems));
                alert('Removed from wishlist!');
                var url = "compare.php?ProductId=" + compareList.toString();
      window.location.href = url;
            }
        }
    }
};

wishlist.init();