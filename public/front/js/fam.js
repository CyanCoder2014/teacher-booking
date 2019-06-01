
$(document).ready(function () {
    $( ".myFilter" ).click(function() {
        $( ".dis-norm" ).toggleClass('display-filter')

    });
    if ($(window).width() < 992) {
        $( ".windowlink" ).click(function() {
            $( ".window-drop" ).toggleClass('apear')
        });
        $( ".closeLink" ).click(function() {
            $( ".window-drop" ).toggleClass('apear')
        });
    }
    if ($(window).width() > 992) {
        $( ".windowlink" ).mouseover(function() {
            $( ".window-drop" ).addClass('apear')
        });
        $( ".window-drop" ).mouseover(function() {
            $( this ).addClass('apear')
        });
        $( ".window-drop" ).mouseleave(function() {
            $( this ).removeClass('apear')
        });
        $( ".windowlink" ).mouseleave(function() {
            $( ".window-drop" ).removeClass('apear')
        });

    }
    $( "#list-tab" ).click(function() {
        $( ".mother1" ).removeClass( "col-md-4" ).addClass( "col-md-12" );
        $( ".mother2" ).removeClass( "col-md-12" ).addClass( "col-md-6" );
        $( ".ds-changeable-n" ).removeClass( "ds-none" );
        $( ".ds-changeable" ).addClass( "ds-none" );

    });
    $( "#grid-tab" ).click(function() {
        console.log('lll')
        $( ".mother1" ).removeClass( "col-md-12" ).addClass( "col-md-4" );
        $( ".mother2" ).removeClass( "col-md-6" ).addClass( "col-md-12" );
        $( ".ds-changeable-n" ).addClass( "ds-none" );
        $( ".ds-changeable" ).removeClass( "ds-none" );

    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
})
function openCity(evt, depName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(depName).style.display = "block";
    evt.currentTarget.className += " active";
}
$(window).scroll(scrollHandler3);

function scrollHandler3() {
    if (document.documentElement.scrollTop > 20) {
        $("#fix-tab").addClass("fix-tab")
    }

    else {
        $("#fix-tab").removeClass("fix-tab")
    }


}