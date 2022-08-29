<?php 

$text= 'Giuseppe ha mangiato tutte le mele comprate al supermercato! 
dovremmo passare al supermercato a prendere delle
mele per fare la torta alle mele a Giuseppe.';

//text & length
echo $text;
echo '<br> </br>';
echo strlen($text);

//query
$bad_word = $_GET['word'];

//replace
$new_text= str_replace($bad_word, '***', $text);

//new text
echo '<br> </br>';
echo $new_text;
echo '<br> </br>';
echo strlen($new_text);

?>