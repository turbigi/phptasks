<?php
ob_start();
?>
<html>
<head>
    <style>
        body {
            width: 100%;
        }

        div {
            width: 200px;
            border-style: solid;
            border-width: 3px;
            margin-bottom: 20px;
        }

        #main {
            border: 0;
        }
    </style>
</head>
<body>
<div id="main">
    <?php
    if (isset($_POST['pagination'])) {
        ob_end_clean();
    }
    ob_start();
    $array = array(
        "0" => "text text 1 text 1",
        "1" => "text text 2 text 1",
        "2" => "text text 3 text 1",
        "3" => "text text 4 text 1",
        "4" => "text text 5 text 1",
        "5" => "text text 6 text 1",
        "6" => "text text 7 text 1",
        "7" => "text text 8 text 1",
        "8" => "text text  9 text 1",
        "9" => "text text 10 text 1",
        "10" => "text text 11 text 1",
        "11" => "text text 12 text 1",
    );

    if (isset($_POST['pagination'])) {
        for ($i = $_POST['start']; $i < $_POST['pagination'] + $_POST['start']; $i++) {
            if ($i >= count($array)) {
                break;
            }
            echo "<div>$array[$i]</div>";
        }
    }

    if (isset($_POST['pagination'])) {
        die();
    }
    ob_start();
    ?>

</div>

<p><input type="submit" id="elem" value="Добавить"></p>

<script type="text/javascript">
    var xmlhttp = new XMLHttpRequest();
    var start = 0;
    var pagination = 3;
    var elem = document.getElementById("elem");
    elem.addEventListener("click", function () {
        var params = "pagination=" + pagination + "&start=" + start;
        xmlhttp.open("POST", "index.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(params);
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var main = document.getElementById("main");
                main.innerHTML += this.responseText;
                start += pagination;
            }
        };
    });
    elem.click();
</script>
</body>
</html>


