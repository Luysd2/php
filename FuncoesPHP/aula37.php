<?php
//funções anonimas
function test($callback){
    //processo lento
    $callback();
}
test(function(){
    echo "Terminou";
});
echo "<br>";
$fn = function($a){
    var_dump($a);
};
$fn("oi");
?>