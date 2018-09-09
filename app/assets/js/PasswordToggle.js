function TogglePass() {
    var x = document.getElementById("UserPass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}