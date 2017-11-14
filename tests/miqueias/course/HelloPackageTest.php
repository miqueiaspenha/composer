<?php

namespace Miqueias\course;

use PHPUnit\Framework\TestCase;

class HelloPackageTest extends TestCase
{
    public function testGetHello()
    {
        $hello = new HelloPackage;
        $retorno = $hello->getHello();
        $this->assertNotNull($retorno);
        $this->assertInternalType('string', $retorno);
        $this->assertNotEquals('0', strlen($retorno));
    }
}
