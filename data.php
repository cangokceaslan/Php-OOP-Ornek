<?php 
require('./index.php');

?>
<?php 
function hepsiniTopla($element){
    if(gettype($element) == "array"){
        foreach($element as $element1){
            if(gettype($element1) == "array"){
                $sum += hepsiniTopla($element1);
            }else{
                $sum += $element1;
            }
        }
        return $sum;
    }
    else{
        return $element;
    }
}
?>
<html>
<head>
asdifjadsof
</head>
<body>
adosfpkadspfsadkfp
</body>
</html>