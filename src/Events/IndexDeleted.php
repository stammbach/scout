<?php

namespace Laravel\Scout\Events;

class IndexDeleted
{
    /**
     * The index name.
     *
     * @var string
     */
    public $index;

    /**
     * Create a new event instance.
     *
     * @param  string  $index
     * @return void
     */
    public function __construct($index)
    {
        $this->index = $index;
    }
}
