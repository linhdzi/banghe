$('#Brand').off('change').on('change', function(){
    var gt = $(this).val();
    url = "shop.php?cateBrand=" + gt;
    window.location.href=url;

})