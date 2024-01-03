<?php

namespace Codeir\Test;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testManual()
    {
        self::assertEquals(10, Math::sum([5,5]));
        self::assertEquals(12, Math::sum([4,8]));
        self::assertEquals(5, Math::sum([2,3]));
        self::assertEquals(210, Math::sum([5,205]));
        self::assertEquals(23, Math::sum([10,13]));
    }

    // 08. cara menggunakan data provider
    /**
     * @dataProvider mathSumData
     */
    public function testDataProvider(array $values, int $expected)
    {
        self::assertEquals($expected, Math::sum($values));
    }
    
    public function mathSumData(): array
    {   
        return [
            [[10,13], 23],
            [[5,205], 210],
            [[2,3], 5],
            [[4,8], 12],
            [[5,5], 10],
        ];
    }
    
    // 08. penggunaan @testWith 
    /**
     * @testWith [[10,13], 23]
    *          [[5,205], 210]
    *          [[2,3], 5]
    *          [[4,8], 122]
    *          [[5,5], 10]
     *
     */
    public function testWith(array $values, int $expected)
    {
        self::assertEquals($expected, Math::sum($values));
    }
}