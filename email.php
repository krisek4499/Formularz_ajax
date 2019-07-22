
<?php

 require_once 'conect.php';
 require_once 'send.php';
$emails=$_POST['email'];
$info=send::Inf($emails);


echo json_encode($info);
?>


