<?php
/**
 * Created by PhpStorm.
 * User: Administration
 * Date: 2018/9/15
 * Time: 14:06
 */
if(isset($_POST['sub'])){
     $str = "111lyt";
     $stri = (int)$str;
//    $year = $_POST['year'];
//    echo $year;
//    if($year %400 == 0 || $year % 4 == 0 && $year %100 != 0){
//        echo $year."不是闰年";
//    }else{
//        echo $year."是闰年";
//    }
}
?>

<meta charset="utf-8">
<form action="03_test.php" method="post">
    year:<input type="text" name="year">
    <button type="submit" name="sub" value="验证">验证</button>
</form>
