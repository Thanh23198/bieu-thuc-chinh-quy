<?php
function isAccount($str){
    $regexp="/^[_a-z0-9]{6,}$/";
    if(preg_match($regexp,$str)){
        echo "Account is allowed";
    }
    else{
        echo "Account is not allowed";
    }
}
isAccount('123abc_');