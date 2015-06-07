/**
 * Created by Garrett on 5/10/2015.
 */
$(document).ready(function(){
    //Make the content the exact height of the page
    resizePage();

    $("#subscribe_button").click(function(){
        alert("Not Impemented Yet");
    });

    $("#stats_button").click(function(){
       alert("Not Implemented Yet");
    });


});


$(window).resize(function () {
    waitForFinalEvent(function(){
        resizePage();
        //...
    }, 500, "resize");
});


function resizePage(){
    $(".blog-content").height($(document).height() - $(".navbar").height());

    //set profile height
    $('#profile').height($('#profile').width());
    $("#profile_pic").width($('#profile').width() *.6).height($('#profile').height *.6);
    $('#profile_info').width($('#profile').width() - $('#profile_pic').width()-18);


    //set album height
    $("#album").height($('#sidebar').height() - $('#profile').height() - 15);

    //set feed width
    $("#feed").width($('.blog-content').width() - $("#profile").width()-40);

    //set photo width/height
    $(".album-photo").height($("#album").width()/3 - 5).width($("#album").width()/3 - 5)
}