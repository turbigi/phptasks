var xmlhttp = new XMLHttpRequest();
var start = 0;
var pagination = 3;
var elem = document.getElementById("elem");
elem.addEventListener("click", function () {
    var params = "pagination=" + pagination + "&start=" + start;
    xmlhttp.open("POST", "index.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.setRequestHeader("X-Requested-With", "XMLHttpRequest");
    xmlhttp.send(params);
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == "") {
                document.getElementById("elem").style.visibility = "hidden";
                document.getElementById("elem").disabled = true;
            }
            var main = document.getElementById("main");
            main.innerHTML += this.responseText;
            start += pagination;
        }
    };
});