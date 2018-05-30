<?php

namespace ByronTudhope\AlexaApp\Response\Directives\Dialog;

use ByronTudhope\AlexaApp\Response\Directives\Directive;
use ByronTudhope\AlexaApp\Request\AlexaRequest;

abstract class DialogDirective extends Directive
{
    /** @var AlexaRequest */
    private $alexaRequest;

    /**
     * Get the dialog directive type
     *
     * @return mixed
     */
    abstract public function getType();

    /**
     * Get the alexa request
     *
     * @return AlexaRequest
     */
    public function request()
    {
        if (!isset($this->alexaRequest)) {
            $this->alexaRequest = function_exists('app') ?
                app(AlexaRequest::class) : new AlexaRequest();
        }

        return $this->alexaRequest;
    }

    public function toArray()
    {
        return [
            'type' => $this->getType(),
            'updatedIntent' => [
                'name' => $this->request()->getIntent(),
                'confirmationStatus' => $this->request()->getConfirmationStatus(),
                'slots' => $this->request()->slots(),
            ],
        ];
    }
}
