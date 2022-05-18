<?php 
  
// Original input string 
$original_string = "Write any topic .";
  
// Pattern to be searched
$string_pattern = "(.*)any(.*)"; 
  
// Replace string
$replace_string = " own yours own \\1biography\\2"; 
  
echo ereg_replace($patternstrVal, $replacesstrVal, $stringVal); 

function __autoload($className) {
     include $className . '.php';
}

$customClass = new CustomClass;
?>
