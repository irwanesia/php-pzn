<?php 

namespace Codeir\Test;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

class CounterFixtureTest extends TestCase
{
    private Counter $counter;
    
    // 11. Fixture
    // menggunakan function setUp()
    // fitur fixture ini digunakan untuk meringkas kode yg berulang-ulang
    protected function setUp(): void
    {
        $this->counter = new Counter();
        echo "Membuat Counter". PHP_EOL;
    }

    // 13. penggunaan Incomplete Test
    // fungsinya untuk memberi tau jika unit test belum complete
    public function testIncrement()
    {
        self::assertEquals(0, $this->counter->getCounter());
        self::markTestIncomplete("TODO do counter again");
    }

    public function testCounter()
    {
        $this->counter->increment();
        $this->counter->increment();
        
        Assert::assertEquals(2, $this->counter->getCounter());
       
        $this->counter->increment();
        Assert::assertEquals(3, $this->counter->getCounter());
        $this->counter->increment();
        $this->assertEquals(4, $this->counter->getCounter());
        $this->counter->increment();
        self::assertEquals(5, $this->counter->getCounter());
    }

    /**
     * @test
     */
    public function increment()
    {
        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());
    }

    public function testFirst(): Counter
    {
        $this->counter->increment();
        $this->assertEquals(1, $this->counter->getCounter());

        return $this->counter;
    }

    /**
     * @depends testFirst
     */
    public function testSecond(Counter $counter): void
    {
        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());
    }

    // 11. penggunaan tearDown() dan after pada fixture
    public function tearDown(): void
    {
        echo "Tear Down". PHP_EOL;
    }

    /**
     * @after
     */
    public function after(): void
    {
        echo "After". PHP_EOL;
    }

}