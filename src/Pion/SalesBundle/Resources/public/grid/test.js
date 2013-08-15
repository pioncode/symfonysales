/* 
 Grid test function
 */



$(function(){
    $.ajax({
    type:"GET",
    url: "http://localhost:8888/~website/Symfony/web/app_dev.php/sales/transaction/ajax/index",
    dataType:"json",
    success: function(){
        $("#response").html(data);
    }
});

});    
