var loader = document.getElementById("dreamart-loader");
function myloader(){
    loader.style.display = 'none';
}

var  scroll = document.getElementsByClassName("scroll-top-btn");

function scrolltop(){
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

hljs.initHighlightingOnLoad();