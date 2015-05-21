/**
 * Created by Garrett on 5/20/2015.
 */

$(document).ready(function(){

    var docWidth= $(document).width();
    var docHeight = $(document).height();

    var pearls = $(".pearl").width(docWidth/8).height(docWidth/8).css("border-radius", docWidth/16 + "px");
    var necklace = $(".necklace").width(docWidth).height(docWidth/2);

    var mid = Math.floor(pearls.length/2);
    var circleCenter = docWidth/4;

    //circle x = center docWidth/4 * cos(%circle)
    //circle y = center docWidth/4 * cos(%circle)

    for(var i = 0; i < pearls.length; i++){
        pearls[i].style.width = docWidth/8 -(Math.abs((i-mid))*20) + "px";
        pearls[i].style.height = docWidth/8 -(Math.abs((i-mid))*20) + "px";

        if(i-mid > 0)
            pearls[i].style.left = Math.cos((360 - (i+1-mid)*90/pearls.length))*docWidth/2 + docWidth/2 - docWidth/4 - docWidth/5 + "px";
        else if(i-mid < 0)
            pearls[i].style.left = Math.cos((270 - Math.abs((i-1-mid))*90/pearls.length))*docWidth/2 + docWidth/4 + docWidth/5 + "px";
        else
            pearls[i].style.left =docWidth/2 - docWidth/64 +"px";

        if(i == mid) {
            pearls[i].style.top = docWidth/10 + "px";
        }
        else if(Math.abs(i - mid) == pearls.length-mid){
            pearls[i].style.top = "0px";
        }
        else if(i-mid > 0){
            pearls[i].style.top = Math.sin(180 + Math.abs((i-1-mid))*90/pearls.length) * docWidth/2 + docWidth/2 + "px";
        }else if(i-mid < 0){
            pearls[i].style.top = Math.sin(180 + Math.abs((i+1-mid))*90/pearls.length) * docWidth/2 + docWidth/2 + "px";
        }


        pearls[i].style.zIndex = Math.abs(i-mid)*-1;

    }

});