<?php
$x = 0;
$counter = $_POST['counter'];
$txtfinal = "";
$array = array();
$dom = fopen("atoc.txt", "r");
while(!(feof($dom))){
    $array[] = trim(fgets($dom));
}

?>

<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <title>STUDENT COUNCIL RAFFLE</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="assets/css/demo.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body class="page-error">
<!-- WRAPPER -->
<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle">
            <h1>
					<span class="clearfix title">
                        <span class="number" id="idnum">00000</span>
                        <br>
                        <?php
							for($uy=0;$uy<$counter;$uy++){
                                $x = rand(1,count($array));
                                //echo $x . " ";
                                $txtfinal .= $array[$x - 1] . "a";
                            }

                            echo "<span id=\"idn\" hidden>$txtfinal</span>";
                            fclose($dom);
                        ?>
                        <br>
                    </span>
            </h1>
            <div id="txtHint"></div>
            <div class="margin-bottom-30"></div>
            <p>
                <button class="btn btn-danger" onclick="getID()">GENERATE ID NUMBER</button>
            </p>
        </div>
    </div>
</div>

<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/metisMenu/metisMenu.js"></script>
<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/vendor/jquery-sparkline/js/jquery.sparkline.min.js"></script>
<script src="assets/vendor/bootstrap-progressbar/js/bootstrap-progressbar.min.js"></script>
<script src="assets/vendor/chartist/js/chartist.min.js"></script>
<script src="assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js"></script>
<script src="assets/vendor/chartist-plugin-axistitle/chartist-plugin-axistitle.min.js"></script>
<script src="assets/vendor/chartist-plugin-legend-latest/chartist-plugin-legend.js"></script>
<script src="assets/vendor/toastr/toastr.js"></script>
<script src="assets/scripts/common.js"></script>
<script src="jquery.animateNumber.js"></script>
<script src="require.js"></script>

<script type="text/javascript">
    var x = 0;
    function getID(){
        var txtbyte = $('#idn').text().split('a');

        $({ Counter: 0 }).animate({
            Counter: txtbyte[x]
        }, {
            duration: 6000,
            easing: 'swing',
            step: function() {
                $('#idnum').text(Math.ceil(this.Counter));
            }
        });
        x++;
    }
</script>
</body>
</html>
