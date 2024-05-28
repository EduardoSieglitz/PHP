<?php 
$data = [];
if(isset($_GET['option'])){
switch($_GET['option']){
    case 'status':
        $data['Resposta'] = "Ok";
        header ('location: API.html');
        break;
}
}else{
    $data['Resposta'] = "Error";
    echo "<center><h2>" . $data['Resposta'] . "</h2><hr></center>";
}
?>