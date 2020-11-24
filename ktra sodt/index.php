<?php
function isPhoneNumber($str){
    $regexp = '/^[0-9]{2}+(\-[0-9]{10}+)$/';
    if(preg_match($regexp,$str)){
        echo "PhoneNumber is allowed";
    }
    else{
        echo "PhoneNumber is not allowed";
    }
}
isPhoneNumber('(84)-(0978489648)');