<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 1</title>
    <style type="text/css">
        * {
            margin: auto;
            font-family: sans-serif;
            font-size: 20px;
        }
        body {
            background-color: #ccc;
        }
        form {
            width: 700px;
            padding: 25px;
        }
        input[type='text'] {
            width: 400px;
        }
    </style>
</head>
<body>
<?php
$max = ""; $min = ""; $daySo = "";

if (isset($_REQUEST['btnThucHien'])) {
    $mang = array();
    for ($i = 0; $i < 10; $i++) {
        $giaTri = $_POST['txtDaySo'];
        $temp = explode(",", $giaTri);
        array_push($mang, floatval($temp));
    }
    $daySo = $giaTri;
    //print_r($temp);

    $max = $mang[0]; $min = $mang[0];

    for ($i = 0; $i < count($mang); $i++) {
        if ($mang[$i] < $min) { $min = $mang[$i];}
        if ($mang[$i] > $max) { $max = $mang[$i];}
    }

    rsort($mang);

}
?>
<form method="post">
    <fieldset>
        <legend>Nhập dãy số</legend>
        <table>
            <tr>
                <td>Dãy số:</td>
                <td><input type="text" name="txtDaySo" value="<?php echo $daySo?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Thực hiện" name="btnThucHien"></td>
            </tr>
            <tr>
                <td>Giá trị nhỏ nhất là:</td>
                <td><input type="text" value="<?php echo $min?>" disabled></td>
            </tr>
            <tr>
                <td>Giá trị lớn nhất là:</td>
                <td><input type="text" value="<?php echo $max?>" disabled></td>
            </tr>
            <tr>
                <td>Dãy giảm dần:</td>
                <td><!--<?php foreach ($mang as $value) {
                        echo $value . " ";
                    }?>--></td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>