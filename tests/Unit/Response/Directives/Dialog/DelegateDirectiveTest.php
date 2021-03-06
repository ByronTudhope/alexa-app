<?php

namespace ByronTudhope\Tests\Response\Directives\Dialog;

use ByronTudhope\AlexaApp\Response\Directives\Dialog\Delegate;
use ByronTudhope\Tests\BaseTestCase;

class DelegateDirectiveTest extends BaseTestCase
{
    /** @var  Delegate */
    protected $directive;

    public function setUp()
    {
        parent::setUp();
        $this->directive = new Delegate();
    }

    /** @test */
    public function it_is_an_instance_of_dialog_directive()
    {
        $this->assertInstanceOf(Delegate::class, $this->directive);
    }

    /** @test */
    public function it_has_a_delegate_directive_type()
    {
        $this->assertEquals('Dialog.Delegate', $this->directive->getType());
    }
}