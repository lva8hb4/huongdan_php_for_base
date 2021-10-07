<?php

include("header.php");

$img="";

?>
<form action="phim-action.php" method="post"  enctype="multipart/form-data">
<table width="100%">
<tr>
<td style="width:20%;">
Tiêu đề
</td>
<td style="width:80%;">
<input type="text" name="txtTieuDe" style="width:100%;"/>
</td>
</tr>
<tr>
<td>
Mô tả
</td>
<td>
<input type="text" name="txtMoTa" style="width:100%;"/>
</td>
</tr>
<tr>
<td>
Tác giả
</td>
<td>
<input type="text" name="txtTacGia"/>
</td>
</tr>
<tr>
<td>
Chọn ảnh đại diện
</td>
<td>
<input type="file" name="file" id="file" />
<input type="hidden" name="hfile" id="hfile" value="<?php echo $img ?>" /><br/>
<img width="200" height="150" src='images/<?php echo $img ?>'/>
</td>
</tr>
<tr>
<td>
Nội dung
</td>
<td>
</td>
</tr>
<tr>
<td>

</td>
<td>
<input type="submit" name="btnCapNhat" value="Cập nhật"/>
</td>
</tr>
</table>
</form>
<?php
include("footer.php");
?>