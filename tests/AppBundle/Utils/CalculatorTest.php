<?php
/**
 * Created by PhpStorm.
 * User: jaca
 * Date: 12.04.18
 * Time: 14:49
 */

namespace Tests\AppBundle\Utils;

use PHPUnit\Framework\TestCase;
use AppBundle\Util\Calculator;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(12, 22);

        $this->assertEquals(34, $result);
    }
}