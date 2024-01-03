<?php

namespace Codeir\Test;

use PHPUnit\Framework\TestCase;

class PersonFixtureTest extends TestCase
{
    private Person $person;
    
    // 11. penggunaan fixture
    public function setUp(): void
    {

    }

    // penggunaan annotaion @before pada fixture
    /**
     * @before
     */
    public function createPerson()
    {
        $this->person = new Person("Andi");
    }

    // kondisi jika test nya sukses
    public function testSuccess()
    {
        self::assertEquals("Hello Irwan, my name is Andi", $this->person->sayHello("Irwan"));
    }

    // kondisi jika test nya mengandung exception, maka hasilnya harus salah
    // jika tidak exception maka unit test nya akan gagal
    // 09. penggunaan Test-Exception
    public function testException()
    {
        self::expectException(\Exception::class);
        $this->person->sayHello(null);
    }

    // 10. Test-Output
    // jika sebuat method tidak mengembalikan nilai maka untuk Unit test nya
    // gunakan expectOutputString
    public function testOutput()
    {
        self::expectOutputString("Good bye Adel". PHP_EOL);
        $this->person->sayGoodBye("Adel");
    }
    
}