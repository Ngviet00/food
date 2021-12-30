$(document).ready(function(){
    $("#myBtn").on("click", function(){
        $("#myModal").show();
    });
    $(".close").on("click", function(){
        $("#myModal").hide();
    })
});
