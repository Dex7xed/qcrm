<?php

$backgroundArray = array('flowers','flowers2');

function setBackground($backgroundName){
    setcookie("backgroundName", (time()+3600*8).'_'.$backgroundName, time()+3600*8);
    return $backgroundName;
}
if(isset($_COOKIE['backgroundName']))
{
    $cookie = explode('_', $_COOKIE['backgroundName']);
    if(time()<$cookie[0]) $backgroundName = $cookie[1];
    else{
        if($cookie[1] == $backgroundArray[0])$backgroundName = setBackground('flowers');
        else $backgroundName = setBackground('flowers2');
    }
}
else if(random_int(1, 2)==1) $backgroundName = setBackground('flowers');
else $backgroundName = setBackground('flowers2');
echo $$backgroundName;