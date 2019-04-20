$(window).scroll(scrollHandlerOne);

function scrollHandlerOne() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("nav-blog").style.top = "-40px";
    } else {
        document.getElementById("nav-blog").style.top = "0";
    }
}
