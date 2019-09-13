// variable for buttons
var minus = document.querySelector(".minus");
var plus = document.querySelector(".plus");
var total = document.querySelector(".totalprice");
var price = document.querySelector(".price").textContent;
var final = document.querySelector(".finaltotal").textContent;
var couponinput = document.querySelector(".coupon");
var submitbutton = document.querySelector(".submit");




//variables
var totalprice = count * price ;
var finalprice;
var discount;
var newtotal;
var finaltotal = 0;

//defined values

function quantityUpdate() {
    quantity.value = count;
    totalprice = count * price;
    total.textContent = totalprice;
    return totalprice;
}

var coupons = [
    {
        couponName: "Rakhi50",
        discount: 1 / 5
    },
    {
        couponName: "Diwali50",
        discount: 1 / 2
    },
    {
        couponName: "abcd",
        discount: 1 / 5
    }
];



//select the form
var quantity = document.querySelector(".productQty");

// initiate the forms value from 1
var count = 1;
quantity.value = count;
//add click listners
plus.addEventListener("click", function() {
    quantityUpdate();
});

minus.addEventListener("click", function() {
    quantityUpdate();
});

submitbutton.addEventListener("click", function() {
    for (var i = 0; i < coupons.length; i++) {
        if (coupons[i].couponName === couponinput.value) {
            finalprice = totalprice * Number(coupons[i].discount);
            console.log(finalprice);
        }
    }
});