<?php

namespace Statamic\Events;

class BlueprintCreated extends Event
{
    public $blueprint;

    public function __construct($blueprint)
    {
        $this->blueprint = $blueprint;
    }
}
