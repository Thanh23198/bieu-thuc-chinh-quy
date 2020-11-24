<?php
function isValidateEmail($str){
    $regexp='/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/';
    if(preg_match($regexp,$str)){
        echo "Email is allowed";
    }
    else{
        echo "Email is not allowed";
    }
}
isValidateEmail('@#abc@gmail.com');