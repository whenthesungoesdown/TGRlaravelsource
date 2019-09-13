var cart = document.querySelectorAll(".hover-image__icons-cart");
var imgProduct = document.querySelectorAll(".productimage");
var selectedProduct = document.querySelectorAll(".boxImage");

for (var i = 0; i < cart.length; i++) {
    cart[i].addEventListener("click", function() {
        var a = imgProduct[i].currentSrc;
        console.log(a);
    });
}

// *variables for custom box
var boxes = document.querySelectorAll(".boximg");
var selectedboxurl;
// *javascript for custombox page

for (var i = 0; i < boxes.length; i++) {
    boxes[i].addEventListener("click", function() {
        for (var x = 0; x < boxes.length; x++) {
            boxes[x].classList.remove("selected");
        }
        this.classList.add("selected");
    });
}