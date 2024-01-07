<?php

namespace Codeir\Test;

use PHPUnit\Framework\TestCase;

class ProductServiceMockObjectTest extends TestCase
{
    private ProductRepository $repository;
    private ProductService $service;

    protected function setUp(): void
    {
        // 16. Mock Object
        // penggunaan Mock Object, improvisasi dari Stub
        // mock digunakan untuk mengetahui berapa kali instraksi terjadi
        $this->repository = $this->createMock(ProductRepository::class);
        $this->service = new ProductService($this->repository);
    }

    public function testMock()
    {
        $product = new Product();
        $product->setId("1");

        $this->repository->expects(self::once())
            ->method("findById")
            ->willReturn($product)
            ->with(self::equalTo("1"));

        $result = $this->repository->findById("1");
        self::assertSame($product, $result);

        // $result = $this->repository->findById("1");
        // apabila $result findById dijalankan lagi maka akan error, 
        // di sebabkan invocation rule menggunakan once()
    }

    public function testDeleteSuccess()
    {

        $product = new Product();
        $product->setId("1");

        // 16. penggunaan class constraint pada mock object
        // dengan tambah with
        // with digunakan untuk memastikan parameter yg dikirim benar, 
        // sehingga with ini dapat memastikan kesalahan jika parameternya yg digunakan salah 
        // constraint ini class static
        $this->repository->expects(self::once())
            ->method("delete")
            ->with(self::equalTo($product));

        $this->repository->method("findById")
            ->willReturn($product)
            ->with(self::equalTo("1"));

        $this->service->delete("1");
        self::assertTrue(true, "Success Delete!");
    }

    public function testDeleteFailure()
    {
        $this->repository->expects(self::never())
            ->method("delete")
            ->with(self::equalTo("1"));

        $this->expectException(\Exception::class);
        $this->repository->expects(self::once())
            ->method("findById")
            ->with(self::equalTo("1"))    
            ->willReturn(null);

        $this->service->delete("1");
    }

}
