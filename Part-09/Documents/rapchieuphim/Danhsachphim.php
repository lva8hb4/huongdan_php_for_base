<?php

include("header.php");

?>
<form action="phimaction.php" method="post">
<table width="100%" border="1" style="border-collapse:collapse;">
<tr>
<th>
Tiêu đề
</th>
<th>
Mô tả
</th>
<th>
Tác giả
</th>
</tr>
<?php

include("connect.php");

$rs = mysqli_query($conn, "Select * from thongtinphim");

while($row= mysqli_fetch_array($rs))
{
	echo "<tr><td>" . $row['TenPhim'] . "</td><td>" . $row['MoTa'] . "</td><td>" . $row['TacGia'] . "</td></tr>";
}

mysqli_close($conn);

?>
</table>
</form>
<?php
include("footer.php");
?>