//*js for custom box page
var boxes = document.querySelectorAll(".boximg");
for (var i = 0; i < boxes.length; i++) {
    boxes[i].addEventListener("click", function() {
        for (var x = 0; x < boxes.length; x++) {
            boxes[x].classList.remove("selected");
        }
        this.classList.add("selected");
    });
}

//*js for cart page
var quantityProduct = document.querySelector(".productQty-product");
var plusProduct = document.querySelector(".plus-product");
var minusProduct = document.querySelector(".minus-product");
var finalquantityProduct = document.querySelector(".finalquantityProduct");
var countProduct = 1;
quantityProduct.value = countProduct;
finalquantityProduct.value = countProduct;

function quantityUpdateProduct() {
    quantityProduct.value = countProduct;
    finalquantityProduct.value = countProduct;
}

plusProduct.addEventListener("click", function() {
    if (countProduct < 10) {
        countProduct++;
        quantityUpdateProduct();
    }
});

minusProduct.addEventListener("click", function() {
    if (countProduct > 1) {
        countProduct--;
        quantityUpdateProduct();
    }
});


//*js for cart page
var quantityCart = document.querySelectorAll(".productQty-cart");
var plusCart = document.querySelectorAll(".plus-cart");
var minusCart = document.querySelectorAll(".minus-cart");

var countCart = [1];
function quantityUpdateCart() {
    quantityCart.value = countCart;
}

// var minus = document.querySelector(".minus");
// var plus = document.querySelector(".plus");
// var quantity = document.querySelector(".productQty");
// var count = 1;
// quantity.value = count;
// //add click listners
// plus.addEventListener("click", function() {
//     if (count < 10) {
//         count++;
//     }
//     quantity.value = count;
//     // total.textContent = totalprice;
//     // console.log(count);
// });

// minus.addEventListener("click", function() {
//     if (count > 1) {
//         count--;
//     }
//     quantity.value = count;
//     // total.textContent = totalprice;
//     // console.log(count);
// });

// // console.log(quantity.value);
