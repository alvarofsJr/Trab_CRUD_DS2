document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("showPassword").addEventListener("change", function() {
        var senhaInput = document.getElementById("senha");
        if (this.checked) {
            senhaInput.type = "text";
        } else {
            senhaInput.type = "password";
        }
    });
});