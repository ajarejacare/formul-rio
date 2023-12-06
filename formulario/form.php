<?php

if(empty($_POST['name']) && empty($_POST['email'])){

echo  "<br/> carregando..............";

}else{

    $name = $_GET ['name']
    $email = $_get ['email']
    echo ('ola'. $name . '<br/>')
    echo ('esse é: seu email: ' .$email. '<br/>')

}

?>