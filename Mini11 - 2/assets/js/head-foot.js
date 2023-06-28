document.addEventListener("DOMContentLoaded", function () {
    var xhrHeader = new XMLHttpRequest();
    var xhrFooter = new XMLHttpRequest();

    xhrHeader.onload = function () {
        if (xhrHeader.status === 200) {
            document.getElementById("header").innerHTML = xhrHeader.responseText;
        }
    };

    xhrFooter.onload = function () {
        if (xhrFooter.status === 200) {
            document.getElementById("footer").innerHTML = xhrFooter.responseText;
        }
    };

    xhrHeader.open("Get", "header.php", true);
    xhrFooter.open("Get", "footer.php", true);

    xhrHeader.send();
    xhrFooter.send();
});