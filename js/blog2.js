/**
 * Created by Garrett on 5/20/2015.
 */

$(document).ready(function(){

    var docWidth= $(document).width();
    var docHeight = $(document).height();

    $(".pearl").width(docWidth/8).height(docWidth/8).css("border-radius", docWidth/16 + "px");

});