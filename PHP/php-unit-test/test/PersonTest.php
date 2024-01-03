<?php

namespace Codeir\Test;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    // kondisi jika test nya sukses
    public function testSuccess()
    {
        $person = new Person("Andi");
        self::assertEquals("Hello Irwan, my name is Andi", $person->sayHello("Irwan"));
    }

    // kondisi jika test nya mengandung exception, maka hasilnya harus salah
    // jika tidak exception maka unit test nya akan gagal
    // 09. penggunaan Test-Exception
    public function testException()
    {
        $person = new Person("Andi");
        self::expectException(\Exception::class);
        $person->sayHello(null);
    }

    // 10. Test-Output
    // jika sebuat method tidak mengembalikan nilai maka untuk Unit test nya
    // gunakan expectOutputString
    public function testOutput()
    {
        $person = new Person("Irwan");
        self::expectOutputString("Good bye Adel". PHP_EOL);
        $person->sayGoodBye("Adel");
    }
    
}