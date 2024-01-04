<?php

namespace Codeir\Test;

use PHPUnit\Framework\TestCase;

class CounterStaticTest extends TestCase
{
    public static Counter $counter;

    // 12. sharing fixture (setUpBeforeclass & tearDownAfterCLass)
    // method setUpBeforeClass akan dijalankan sekali, tidak meng-overide
    // berbeda dengan method setUp()
    public static function setUpBeforeClass(): void
    {
        self::$counter = new Counter();
    }

    public function testFirst()
    {
        self::$counter->increment();
        self::assertEquals(1, self::$counter->getCounter());
    }

    public function testSecond()
    {
        self::$counter->increment();
        self::assertEquals(2, self::$counter->getCounter());
    }

    public static function tearDownAfterClass(): void
    {
        echo "Unit Test Selesai". PHP_EOL;
    }
}