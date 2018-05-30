<?php

namespace ByronTudhope\AlexaApp\Http\Routing\Matching;

use ByronTudhope\AlexaApp\Http\Routing\AlexaRoute;
use Illuminate\Http\Request;
use Illuminate\Routing\Matching\ValidatorInterface;
use Illuminate\Routing\Route;

class AlexaValidator implements ValidatorInterface
{
    /**
     * Validate a given rule against a route and request.
     *
     * @param  \ByronTudhope\AlexaApp\Http\Routing\AlexaRoute $route
     * @param  \ByronTudhope\AlexaApp\Request\AlexaRequest    $request
     *
     * @return bool
     */
    public function matches(Route $route, Request $request)
    {
        // If this isn't an Alexa Route then it doesn't match!
        if (!$route instanceof AlexaRoute) {
            return false;
        }

        if (!$request->isPromptResponse()) {
            return ($request->getRequestType() . $request->getIntent() == $route->getRouteIntent());
        } else {
            return ($request->getRequestType() . $request->getPromptResponseIntent() == $route->getRouteIntent());
        }
    }
}
