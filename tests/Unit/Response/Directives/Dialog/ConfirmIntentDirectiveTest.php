<?php

namespace ByronTudhope\Tests\Response\Directives\Dialog;

use ByronTudhope\AlexaApp\Response\Directives\Dialog\ConfirmIntent;
use ByronTudhope\Tests\BaseTestCase;

class ConfirmIntentDirectiveTest extends BaseTestCase
{
    /** @var  ConfirmIntent */
    protected $directive;

    public function setUp()
    {
        parent::setUp();
        $this->directive = new ConfirmIntent();
    }

    /** @test */
    public function it_is_an_instance_of_dialog_directive()
    {
        $this->assertInstanceOf(ConfirmIntent::class, $this->directive);
    }

    /** @test */
    public function it_has_a_confirm_intent_type()
    {
        $this->assertEquals('Dialog.ConfirmIntent', $this->directive->getType());
    }
}