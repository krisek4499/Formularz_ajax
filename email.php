
<?php

 require_once 'conect.php';
 require_once 'send.php';
$emails=$_POST['email'];
$info=send::Inf($emails);

/*$instance=connect_DB::getInstance();
$q = "SELECT email FROM testowa where email='$emails'";
$stm = $instance->prepare($q);
$stm->execute();
$data = $stm->fetchAll(PDO::FETCH_OBJ);
if($data!=null) $jest="tak";
else $jest="Formularz wypelniony pomyslnie";


echo json_encode($jest);*/
echo json_encode($info);
?>


