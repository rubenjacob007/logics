<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<input type="text" value="" name="L">
<!-- <input type="text" value="" name="lift"> -->

<!-- <input type="text" value="" name="lift1"> -->

<input type="submit" name="submit" value="submit">

</form>
<?php
if(isset($_POST['submit'])) {
    $item = $_POST['L'];
  
  if ($item = 0){
    return null;
  } 
  $largest = '';
 
    if ($item > $largest){
      $largest = $item;
    }
  echo $largest;

}

/*if(isset($_POST['submit'])) 
{ 
    $lift = $_POST['lift'];
    $lift1 = $_POST['lift1'];
    
    switch ($lift) {
    case "1":
        echo "Your are in floor 1!";
        break;
    case "2":
        echo "Your are in floor 2!";
        break;
    case "3":
        echo "Your are in floor 3!";
        break;

    default:
        echo "Ground Floor!";




}

function diff($v1, $v2) {
    return ($v1-$v2) < 0 ? (-1)*($v1-$v2) : ($v1-$v2);
}


if($lift1!=='null' || $lift1!=='0'){
echo diff($lift, $lift1); // 28

if(diff($lift, $lift1)=='0'){

    echo "You are in same Floor";
}else if(diff($lift, $lift1)=='1'){
    echo "will reach soon";
}else if(diff($lift, $lift1)>=2){
     echo "The lift is in" .$lift;
}

}




}*/
?>