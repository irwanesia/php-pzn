<?php 

namespace Codeir\Test;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

class CounterTest extends TestCase
{
    public function testCounter()
    {
        $counter = new Counter();
        $counter->increment();
        $counter->increment();
        // echo $counter->getCounter(). PHP_EOL;
        
        // 05. assertions adalah mengecek apakah sebuah kondisi terpenuhi
        // jika tidak terpenuhi maka unit test gagal
        Assert::assertEquals(2, $counter->getCounter());
        
        // 3 cara penggunaan assert di test case
        $counter->increment();
        Assert::assertEquals(3, $counter->getCounter());
        $counter->increment();
        $this->assertEquals(4, $counter->getCounter());
        $counter->increment();
        self::assertEquals(5, $counter->getCounter());
    }

    // 06. penggunaan annotation
    /**
     * @test
     */
    public function increment()
    {
        $counter = new Counter();
        $counter->increment();
        Assert::assertEquals(1, $counter->getCounter());

    }

    public function testFirst(): Counter
    {
        $counter = new Counter();
        $counter->increment();
        $this->assertEquals(1, $counter->getCounter());

        return $counter;
    }

    // 07. membuat test dependency
    // yaitu kondisi unitest yg bergantung dari hasil unit test lain
    /**
     * @depends testFirst
     */
    public function testSecond(Counter $counter): void
    {
        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());
    }


    
}

