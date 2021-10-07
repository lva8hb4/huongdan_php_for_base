<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài tập 2</title>
</head>
<body>
    <?php
        $startDOT = "<div style='width: 10px; height: 10px; border-radius: 0px; background-color: red;";
        $startDOT1 = "<div style='width: 10px; height: 10px; border-radius: 5px; background-color: transparent;";
        $float_left = "float: left;";
        $clear_left = "clear: left";
        $endDOT = "'></div>";

        for($i = 0; $i < 15; $i++){
            for($j = 0; $j <= 30; $j++){
                if($i == 0 || $i == 14){
                    if($j == 30){
                        echo "<div style='clear:left;'></div>";
                    }
                    else{
                        echo $startDOT . $float_left . $endDOT;
                    }
                }
                else{
                    if($j == 0 || $j == 29){
                        echo $startDOT . $float_left . $endDOT;
                    }
                    else if($j == 30){
                        echo "<div style='clear:left;'></div>";
                    }
                    else{
                        echo $startDOT1 . $float_left . $endDOT;
                    }
                }
            }

        }
    ?>
</body>
</html>
