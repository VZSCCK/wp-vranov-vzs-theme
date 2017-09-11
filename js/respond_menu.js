document.getElementById('menu-button').addEventListener("click", function() {
    var x = document.getElementById("menu-top");
    if (x.className === "menu") {
        x.className += " responsive";
    } else {
        x.className = "menu";
    }
} );

