<?php 
$data = [];
if(isset($_GET['option'])){
switch($_GET['option']){
    case 'api2':
        header ('location: index2.php');
        break;
        case 'api':
            header ('location: index.php');
            break;
}
}
?>