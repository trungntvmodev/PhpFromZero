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

/**
 * @deprecated  As of release 1.3, replaced by {@link #Fee}
 */
@Deprecated
public class Fum { ... }

public class Foo {
  /**
   * @deprecated  As of release 1.7, replaced by {@link #doTheThingBetter()}
   */
  @Deprecated
  public void doTheThing() { ... }

  public void doTheThingBetter() { ... }
}

public class Bar extends Foo {
  public void doTheThing() { ... } // Noncompliant; don't override a deprecated method or explicitly mark it as @Deprecated
}

public class Bar extends Fum {  // Noncompliant; Fum is deprecated

  public void myMethod() {
    Foo foo = new Foo();  // okay; the class isn't deprecated
    foo.doTheThing();  // Noncompliant; doTheThing method is deprecated
  }
}
?>
