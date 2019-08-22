var boxes = document.querySelectorAll(".boximg");
var selectedboxurl;

for (var i = 0; i < boxes.length; i++) {
    boxes[i].addEventListener("click", function() {
        for (var x = 0; x < boxes.length; x++) {
            boxes[x].classList.remove("selected");
        }
        this.classList.add("selected");
    });
}
