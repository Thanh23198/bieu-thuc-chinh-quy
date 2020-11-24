<?php
function isClassName($str){
    $regexp='/^[C|A|P]\d{4}[G|H|I|K|L|M]$/';
    if(preg_match($regexp,$str)){
        echo "ClassName is allowed";
    }
    else{
        echo "ClassName is not allowed";
    }
}
isClassName('C0318G');
isClassName('C031G');
isClassName('C03187988G');
isClassName('M031KLJLLK8G');