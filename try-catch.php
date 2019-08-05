<?php
function calculator($x,$y){
    if($x == 0 && $y == 0){
        throw new Exception("Number x,y must different 0");
    }
    else{
        $total = $x+$y;
        $sub = $x-$y;
        $multi = $x*$y;
        $div = $x/$y;
        echo "Tong 2 so x,y la $total <br/>" ,"Hieu la $sub <br/>", "Tich la $multi <br>", "Thuong la $div";
    };
}
try {
    calculator(2,3);
}catch (Exception $e){
    echo "Message: ".$e->getMessage();
}
