<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đề bài 1</title>
    <link rel="stylesheet" href="Exercise1.css">
</head>
<body>
    <?php
        $infoCode = "<code style='color: dodgerblue; font-weight: bold'>";
        $endCode = "</code>";

        $message = "";
        $feedback_color = "invalid";
        $originArr = [];
        $originArrJson = "";
        $max = $max_index = $min = $min_index = 0;
        $txtInput = "50, 60, 15, 70, 25, 40, 100, 85, 90, 35";
        $descArr = [];
        $descArrJson = "";
        $arrayFive = [];
        $arrayFiveJson = "";
        if(isset($_REQUEST['btnSubmit'])){
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $txtInput = $_POST['txtInput'];
                if(strlen($txtInput) == 0){
                    $message = "Chuỗi nhập vào không thể để trống";
                    $feedback_color = "invalid";
                }
                else{
                    $feedback_color = "valid";
                    $message = "Good to go";
                    $txtInput = trim($txtInput);
                    $txtInput = str_replace(" ", "", $txtInput);
                    $arr = explode(",", $txtInput);
                    foreach($arr as $val){
                        array_push($originArr, floatval($val));
                    }
                    $originArrJson = json_encode($originArr);
                    $originArrJson = $infoCode . $originArrJson . $endCode;

//                    $max = max($originArr);
                    $max = -INF;
                    for($i = 0; $i < count($originArr); $i++){
                        if($originArr[$i] > $max){
                            $max = $originArr[$i];
                        }
                    }
//                    $min = min($originArr);
                    $min = INF;
                    for($i = 0; $i < count($originArr); $i++){
                        if($originArr[$i] < $min){
                            $min = $originArr[$i];
                        }
                    }
//                    $max_index = array_search($max, $originArr);
                    for($i = 0; $i < count($originArr); $i++){
                        if($originArr[$i] == $max){
                            $max_index = $i;
                        }
                        if($originArr[$i] == $min){
                            $min_index = $i;
                        }
                    }
                    $descArr = $originArr;
                    rsort($descArr);
                    $descArrJson = $infoCode . json_encode($descArr) . $endCode;

                    for($i = 0; $i < count($originArr); $i++){
                        $val = strval($originArr[$i]);
                        if(strpos($val, "5") > -1){
                            array_push($arrayFive, $originArr[$i]);
                        }
                    }
                    rsort($arrayFive);
                    $arr = [];
                    for($i = 0; $i < 3; $i++){
                        array_push($arr, $arrayFive[$i]);
                    }
                    $arrayFiveJson = $infoCode . json_encode($arr) . $endCode;
                }
            }
        }
    ?>
    <div class="container">
        <fieldset>
            <legend>Nhập dãy số vào ô bên dưới</legend>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-l">
                        <label for="txtInput">Nhập chuỗi:</label>
                    </div>
                    <div class="col-r">
                        <input value="<?= $txtInput; ?>" placeholder="1, 2, 3, 4, 5,..." type="text" name="txtInput" id="txtInput">
                        <div class="feedback <?= $feedback_color; ?>"><?= $message; ?></div>
                    </div>
                </div>
                <div class="row center-align" style="padding-top: 10px;">
                    <button name="btnSubmit" id="btnSubmit">Thực hiện</button>
                </div>
            </form>
            <ul>
                <li>Mảng từ chuỗi nhập vào: <?= $originArrJson; ?></li>
                <li>Giá trị lớn nhất là: <?= $infoCode . $max . $endCode; ?>, ở vị trí: <?= $infoCode . $max_index . $endCode; ?></li>
                <li>Giá trị nhỏ nhất là: <?= $infoCode . $min . $endCode; ?>, ở vị trí: <?= $infoCode . $min_index . $endCode; ?></li>
                <li>Các phần tử trong mảng được sắp xếp theo thứ tự giảm dần: <?= $descArrJson; ?></li>
                <li>Các phần tử trong mảng có chứa số 5 và 3 số lớn nhất là: <?= $arrayFiveJson; ?></li>
                <li>Số lần số 5 xuất hiện trong chuỗi là: <?= $infoCode . count($arrayFive) . $endCode; ?></li>
            </ul>
        </fieldset>
    </div>
</body>
</html>