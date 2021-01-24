<?php

declare(strict_types=1);

use AfaanBilal\RandomString\RandomString;
use PHPUnit\Framework\TestCase;

final class RandomStringTest extends TestCase
{
    public function testIsAString(): void
    {
        $this->assertIsString((new RandomString())->generate());
    }

    public function testIsOfCorrectLength(): void
    {
        $this->assertEquals(
            10, 
            strlen((new RandomString(10))->generate())
        );
    }
}
