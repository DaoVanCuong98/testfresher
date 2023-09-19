<?php 
    $array = [ 1, 2 , 3, 4 , 5];
    $array1 = [];
    for($i = 0 ; $i <= count($array) ; $i++){
        if($array[$i]%2==0){
            array_push($array1,$array[$i]);
        }
    echo array_sum($array1);
    }
?>

<?php 
    $array = ['Cuong','Lam' , 'Luan' , 'Hao' , 'Hung'];
    $array1 = [];
    for($i = 0 ; $i <= count($array) ; $i++){
        if(strlen( $array[$i])==strlen($array[$i+1])){
            array_push($array1,$array[$i]);
        }
    return $array1;
    }

?>