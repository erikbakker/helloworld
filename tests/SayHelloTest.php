<?php 
use PHPUnit\Framework\TestCase;

/**
*  Corresponding Class to test SayHello class
*
*  For each class in your library, there should be a corresponding Unit-Test for it
*  Unit-Tests should be as much as possible independent from other test going on.
*
*  @author yourname
*/
class SayHelloTest extends TestCase
{
	
  /**
  * Just check if the SayHello has no syntax error 
  *
  * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
  * any typo before you even use this library in a real project.
  *
  */
  public function testIsThereAnySyntaxError()
  {
	$var = new Piet\SayHello;
	$this->assertTrue(is_object($var));
	unset($var);
  }
  
  /**
  * Just check if the SayHello has no syntax error 
  *
  * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
  * any typo before you even use this library in a real project.
  *
  */
  public function testSayHello()
  {
	$var = new Piet\SayHello;
	$this->assertTrue($var->world("Hello World") == "Hello World");
	unset($var);
  } 
}
