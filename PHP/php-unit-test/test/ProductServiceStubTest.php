<?php

namespace Codeir\Test;

use PHPUnit\Framework\TestCase;

class ProductServiceStubTest extends TestCase
{
    private ProductRepository $repository;
    private ProductService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createStub(ProductRepository::class);
        $this->service = new ProductService($this->repository);
    }

    // 15. penggunaan STUB
    // dengan membuat dummy atau method tiruan
    public function testStub()
    {
        $product = new Product();
        $product->setId("1");

        // willreturn merupakan salah satu invocation Stubber
        // jika method findById nya dipanggil maka dia harus kembalikan willReturn() product
        // dimana disini kembaliannya product = new Product()
        $this->repository->method("findById")->willReturn($product);

        $result = $this->repository->findById("1");

        self::assertSame($product, $result);
    }

    public function testStubMap()
    {
        $product1 = new Product();
        $product1->setId("1");

        $product2 = new Product();
        $product2->setId("2");

        $map = [
            ["1", $product1],
            ["2", $product2],
        ];

        $this->repository->method("findById")
                        ->willReturnMap($map);

        self::assertSame($product1, $this->repository->findById("1"));
        self::assertSame($product2, $this->repository->findById("2"));
    }

    public function testStubCallback()
    {
        $this->repository->method("findById")
                ->willReturnCallback(function (string $id){
                    $product = new Product();
                    $product->setId($id);
                    return $product;
                });
        
        self::assertSame("1", $this->repository->findById("1")->getId());
        self::assertSame("2", $this->repository->findById("2")->getId());
        self::assertSame("3", $this->repository->findById("3")->getId());

        // var_dump($this->repository->findById("1"));
    }

    public function testRegisterSuccess()
    {
        $this->repository->method("findById")->willReturn(null);
        $this->repository->method("save")->willReturnArgument(0);

        $product = new Product();
        $product->setId("1");
        $product->setName("Contoh");

        $result = $this->service->register($product);

        self::assertEquals($product->getId(), $result->getId());
        self::assertEquals($product->getName(), $result->getName());
    }

    public function testRegisterFailure()
    {
        $this->expectException(\Exception::class);
        
        $productInDB = new Product();
        $productInDB->setId("1");

        $this->repository->method("findById")->willReturn($productInDB);

        $product = new Product();
        $product->setId("1");

        $this->service->register($product);
    }

    public function testDeleteSuccess()
    {
        $product = new Product();
        $product->setId("1");

        $this->repository->method("findById")->willReturn($product);

        $this->service->delete("1");
        self::assertTrue(true, "Success Delete!");
    }

    public function testDeleteFailure()
    {
        $this->expectException(\Exception::class);
        $this->repository->method("findById")->willReturn(null);

        $this->service->delete("1");
    }
}
