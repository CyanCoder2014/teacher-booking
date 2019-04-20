$( document ).ready(function() {
    $( ".icon-change" ).click(function() {
        $(".icon").not($(this).find('.icon')).removeClass("fa-minus");
        $(".icon").not($(this).find('.icon')).addClass("fa-plus");
        $(this).find('.icon').toggleClass('fa-plus fa-minus');
    });

    $( function() {
        $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 500,
            values: [ 75, 300 ],
            slide: function( event, ui ) {
                $( "#amount" ).val( "mm" + ui.values[ 0 ] + " - mm" + ui.values[ 1 ] );
            }
        });
        $( "#amount" ).val( "mm" + $( "#slider-range" ).slider( "values", 0 ) +
            " - mm" + $( "#slider-range" ).slider( "values", 1 ) );
    } );
    $( ".close-btn" ).click(function() {
        $(".sidefilter").css('right','-250px')
        $(".pr-cont").css('paddingRight','0px')
    });
    $( ".open-btn" ).click(function() {
        $(".sidefilter").css('right','0px')
        $(".pr-cont").css('paddingRight','170px')
    });






        var native_width = 0;
        var native_height = 0;
        $(".large").css("background","url('" + $(".small").attr("src") + "') no-repeat");

        //Now the mousemove function
        $(".magnify").mousemove(function(e){
            //When the user hovers on the image, the script will first calculate
            //the native dimensions if they don't exist. Only after the native dimensions
            //are available, the script will show the zoomed version.
            if(!native_width && !native_height)
            {
                //This will create a new image object with the same image as that in .small
                //We cannot directly get the dimensions from .small because of the
                //width specified to 200px in the html. To get the actual dimensions we have
                //created this image object.
                var image_object = new Image();
                image_object.src = $(".small").attr("src");

                //This code is wrapped in the .load function which is important.
                //width and height of the object would return 0 if accessed before
                //the image gets loaded.
                native_width = image_object.width;
                native_height = image_object.height;
            }
            else
            {
                //x/y coordinates of the mouse
                //This is the position of .magnify with respect to the document.
                var magnify_offset = $(this).offset();
                //We will deduct the positions of .magnify from the mouse positions with
                //respect to the document to get the mouse positions with respect to the
                //container(.magnify)
                var mx = e.pageX - magnify_offset.left;
                var my = e.pageY - magnify_offset.top;

                //Finally the code to fade out the glass if the mouse is outside the container
                if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
                {
                    $(".large").fadeIn(100);
                }
                else
                {
                    $(".large").fadeOut(100);
                }
                if($(".large").is(":visible"))
                {
                    //The background position of .large will be changed according to the position
                    //of the mouse over the .small image. So we will get the ratio of the pixel
                    //under the mouse pointer with respect to the image and use that to position the
                    //large image inside the magnifying glass
                    var rx = Math.round(mx/$(".small").width()*native_width - $(".large").width()/2)*-1;
                    var ry = Math.round(my/$(".small").height()*native_height - $(".large").height()/2)*-1;
                    var bgp = rx + "px " + ry + "px";

                    //Time to move the magnifying glass with the mouse
                    var px = mx - $(".large").width()/2;
                    var py = my - $(".large").height()/2;
                    //Now the glass moves with the mouse
                    //The logic is to deduct half of the glass's width and height from the
                    //mouse coordinates to place it with its center at the mouse coordinates

                    //If you hover on the image now, you should see the magnifying glass in action
                    $(".large").css({left: px, top: py, backgroundPosition: bgp});
                }
            }
        })
    $(".w").hover(function() {
        var att=$(this).attr('src');
        $( '.ort' ).attr("src",att);
        $(".large").css("background","url('" + $(".small").attr("src") + "') no-repeat");
        native_width = 0;
        native_height = 0;
    });

    $(window).scroll(scrollHandler3);

    function scrollHandler3() {
        if (document.documentElement.scrollTop > 130) {
            $("#fix-tab").addClass("fix-tab")
        }

        else {
            $("#fix-tab").removeClass("fix-tab")
        }


    }

    $(".alphabet").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
    $( ".remove" ).click(function() {
        $(this).parent().parent().remove()

    });
});
