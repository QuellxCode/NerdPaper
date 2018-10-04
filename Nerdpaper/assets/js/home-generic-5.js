var myCircle1=Circles.create( {
    id:"circles-1", radius:60, value:43, maxValue:100, width:5, text:function(e) {
        return e+"%"
    }
    , colors:["rgba(255,255,255,0.3)", "#fff"], duration:1e3, wrpClass:"circles-wrp", textClass:"circles-text"
}

),
myCircle2=Circles.create( {
    id:"circles-2", radius:60, value:60, maxValue:100, width:5, text:function(e) {
        return e+"%"
    }
    , colors:["rgba(255,255,255,0.3)", "#fff"], duration:1e3, wrpClass:"circles-wrp", textClass:"circles-text"
}

),
myCircle3=Circles.create( {
    id:"circles-3", radius:60, value:80, maxValue:100, width:5, text:function(e) {
        return e+"%"
    }
    , colors:["rgba(255,255,255,0.3)", "#fff"], duration:1e3, wrpClass:"circles-wrp", textClass:"circles-text"
}

),
myCircle4=Circles.create( {
    id:"circles-4", radius:60, value:100, maxValue:100, width:5, text:function(e) {
        return e+"%"
    }
    , colors:["rgba(255,255,255,0.3)", "#fff"], duration:1e3, wrpClass:"circles-wrp", textClass:"circles-text"
}

);
$(document).ready(function() {
    $(".owl-carousel").owlCarousel( {
        loop:!0, margin:30, autoplay:!0, autoplayHoverPause:!0, slideBy:3, mouseDrag:!1, dotsContainer:".owl-dots", responsive: {
            0: {
                items: 1
            }
            , 768: {
                items: 2
            }
            , 992: {
                items: 2
            }
            , 1200: {
                items: 3
            }
        }
    }
    )
}

);