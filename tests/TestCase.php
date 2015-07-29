<?php

require __DIR__ . '/Objects/TestObject.php';

class TestCase extends PHPUnit_Framework_TestCase
{
    /**
     * Asserts that a variable is of a Borter\SmartObject\Obj instance.
     *
     * @param mixed $actual
     */
    public function assertSmartObject($actual)
    {
        $this->assertInstanceOf('Borter\SmartObject\Obj', $actual);
    }

    public function testConstruct()
    {
        $smartobject = new TestObjectWithGetterSetterDynamicMethodTrait();
        $this->assertSmartObject($smartobject);
    }

    public function testSetterTrait()
    {
        $smartobject = new TestObjectWithGetterSetterDynamicMethodTrait();
        $smartobject->setFoo('bar');
        $this->assertEquals('bar', $smartobject->foo);
    }

    public function testGetterTrait()
    {
        $smartobject = new TestObjectWithGetterSetterDynamicMethodTrait();
        $smartobject->foo = 'bar';
        $this->assertEquals('bar', $smartobject->getFoo());
    }
}
