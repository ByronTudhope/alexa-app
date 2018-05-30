<?php

namespace ByronTudhope\AlexaApp\Response\Directives\AudioPlayer;

use ByronTudhope\AlexaApp\Response\Directives\Directive;

class Stop extends Directive
{
    const TYPE = 'AudioPlayer.Stop';


    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        $stopAsArray['type'] = self::TYPE;

        return $stopAsArray;
    }
}
