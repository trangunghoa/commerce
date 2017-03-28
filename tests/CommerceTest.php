<?php
 
use Trangunghoa\Commerce;
 
class CommerceTest extends PHPUnit_Framework_TestCase {
 
  public function testCommerceHasCheese()
  {
    $commerce = new Commerce;
    $this->assertTrue($commerce->hasCheese());
  }
 
}