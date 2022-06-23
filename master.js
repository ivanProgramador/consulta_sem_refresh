$(function(){

    $(".btn").on("click",function(){

        $.ajax({
            url: "load.php",
            success: function(result){
                $(".result").html(result);

            },
            error: function(result){
                $(".result").html("Erro");

            }
        });


    });

});