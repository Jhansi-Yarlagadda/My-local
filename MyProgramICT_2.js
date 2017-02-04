// // /* 
// // Name :Jhansi Yarlagadda
// // Course Name: Advanced Website Design and Management 
// // Date: 23-01-2017
// // TDescription : This script is called by MyprogramICT_2.html its returns the forms elements*/



$(document).ready(function(){
    $("button").click(function(){
        var x = $("form").serializeArray();
        $.each(x, function(i, field){
            $("#results").append(field.name + ":" + field.value + " ");
        });
    });
     $("button").click(function(){
        alert("Thank you entering the values.");
    });

    $(".btn2").click(function(){
        $("p").fadeIn();
    });
     $("#btn").click(function(){
/* Single line Reset function executes on click of Reset Button */
$("#form")[0].reset();
});
});
