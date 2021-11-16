<?php
/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

namespace App\Tests\Application\src\Entity\Product;

use ProductTest;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testCreateProductWithBlankColorAttribute() : void
    {
        $test_product = new \App\Entity\Product\Product();
        $this->assertNull($test_product->getColor());
    }

    public function testCreateProductWithRedColorAttribute() : void
    {
        $test_product = new \App\Entity\Product\Product();
        $test_product->setColor($test_product::COLOR_RED);
        $this->assertTrue($test_product->getColor() == 'RED');
    }

    public function testCreateProductWithGreenColorAttribute() : void
    {
        $test_product = new \App\Entity\Product\Product();
        $test_product->setColor($test_product::COLOR_GREEN);
        $this->assertSame($test_product->getColor(), 'GREEN');
    }

    public function testCreateProductWithBlueColorAttribute() : void
    {
        $test_product = new \App\Entity\Product\Product();
        $test_product->setColor($test_product::COLOR_BLUE);
        $this->assertSame($test_product->getColor(), 'BLUE');
    }

    public function testCreateProductWithCustomColor() : void
    {
        $test_product = new \App\Entity\Product\Product();
        $test_product->setColor('PINK');
        $this->assertSame($test_product->getColor(), 'PINK');
    }
}
