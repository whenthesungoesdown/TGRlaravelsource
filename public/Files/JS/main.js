var boxes = document.querySelectorAll(".boxes");
var cartButton = document.querySelectorAll(".cart");
var wishlistButton = document.querySelectorAll(".wishlist");
var remove = document.querySelectorAll(".trash");
var wishlist = document.querySelectorAll(".item");
var price = document.querySelectorAll(".price");
var chosenBox = document.querySelector(".chosenBox");
var selectedItems = document.querySelectorAll(".selectedItems");
var productTitle = document.querySelectorAll(".productTitle");
var clickToCart = document.querySelector(".clickToCart");
var cartButton = document.querySelector(".cartButton");
var selectedBox;
var totalPrice;

//function for selection box type and storing chosen box's value.
for (var i = 0; i < boxes.length; i++) {
    boxes[i].addEventListener("click", function() {
        boxes[0].classList.remove("selected");
        boxes[1].classList.remove("selected");
        this.classList.add("selected");
        selectedBox = this.src.split("/").pop();
        console.log(selectedBox);
        var chosenBoxUrl = document
            .querySelector(".chosenBox")
            .src.split("/")
            .pop();
        console.log(chosenBoxUrl);
        chosenBox.src = selectedBox;
    });
}

//function to make final box same as selected box
clickToCart.addEventListener("click", function() {
    cartButton.classList.remove("d-none");
    clickToCart.classList.add("d-none");
});



