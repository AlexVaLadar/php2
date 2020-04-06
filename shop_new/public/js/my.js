function item(id){
    $.ajax({
        type: 'POST',
        url: '../controllers/Basket.php',
        data: 'id='+id,
        success: function(data){
            alert("Good added to basket!");
            $(".basket-items").html(data);
        }
    });
}