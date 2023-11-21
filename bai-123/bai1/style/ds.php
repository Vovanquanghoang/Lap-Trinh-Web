<?php
include '/bai1/inc/connect.inc';
$lop = $_GET['lop'];

$sql = "SELECT * FROM sinhvien WHERE lop='{$lop}'";
$rs = mysqli_query($con, $sql);
$str = "<table>
            <tr>
                <td>TT</td>
                <td>FullName</td>
                <td>Address</td>
            </tr>";
$tt=1;
while($row= mysqli_fetch_array($rs)){
    $str.= "<tr>
                <td>{$tt}</td>    
                <td>{$row['masv']}</td>
                <td>{$row['hoten']}</td>
                <td>{$row['diachi']}</td>
            </tr>";
            $tt++;
}
$str."</table>";

echo $str;