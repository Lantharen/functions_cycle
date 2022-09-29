<?php
$os = ["Mac", "NT", "Irix", "Linux"];

//if (in_array("Irix", $os)) {
    //echo "Нашёл Irix";
//}
//if (in_array("mac", $os)) {
//    echo "Нашёл mac";
//}
//
/*foreach ($os as $value){
    if ($value == 'NT'){
        echo "Ya nawel NT";
    }
    if ($value == 'Mac'){
        echo "Ya nawel Mac";
    }
}*/
for ($i = 0; $i < count($os); $i++){
    if ($os[$i] == 'NT') echo "Нашёл NT";
}


?>
