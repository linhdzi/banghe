var compare = {
init : function(){
    compare.registereven();


},
registereven : function(){
    $('.Compare-product').off('click').on('click', function(){
        var id = $(this).attr('product-id');
        
        compare.saveCompareWithSS(id);

    })
    
    $('.DeleProduct').off('click').on('click', function(){
        var id = $(this).attr('pro_id');
        
        compare.deleProductInCp(id);

    })


},


saveCompareWithSS : function(id){
    //create array_compare to save compare
    var array_compare = [];
    // check if  compare exists
if (localStorage.getItem('CompareList') !== null){
    // get compare
    var listIdSave = JSON.parse(localStorage.getItem('CompareList'));
    // push new id in listNameSave
    listIdSave.push(id);
    // save array_compare
    localStorage.setItem('CompareList', JSON.stringify(listIdSave));

}else{
//create  compare list
        array_compare.push(id);
      localStorage.setItem('CompareList', JSON.stringify(array_compare));
}
        //change to compare product page
    var listProduct = JSON.parse(localStorage.getItem('CompareList'));
    //change form array to string
    var listProduct_string = listProduct.toString();
    var url = 'compare.php?ProductId=' + listProduct_string;
    window.location.href=url;
},

deleProductInCp: function(idDele) {
    var compareList = JSON.parse(localStorage.getItem('CompareList')) || []; // lấy danh sách so sánh từ Local Storage hoặc khởi tạo một mảng rỗng
    var findIndex = compareList.findIndex(function(item)
    
    {
      return item.id === idDele; // tìm kiếm phần tử có ID trùng với tham số id
    });
    if (findIndex !== -1) {
      compareList.splice(findIndex, 1); // xóa phần tử khỏi danh sách so sánh
      localStorage.setItem('CompareList', JSON.stringify(compareList)); // lưu danh sách so sánh mới vào Local Storage
    }
  },




} 

compare.init();
































































// document.getElementById("SearchByCateBrand").onclick = function() {
//     var searchInput = document.getElementById("Brand").value;
//     window.location.href = "shop.php?cateBrand=" + encodeURIComponent(searchInput);
//   };