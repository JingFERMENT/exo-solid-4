<?php

require_once('EventInterface.php');
require_once('ActionnableInterface.php');

class WatchEvent implements EventInterface, ActionnableInterface
{
    private $name;

    public function name() : string
    {
        return 'WatchEvent';
    }

    public function fields() : array
    {
        return [
            'name' => $this->name,
            'priority' => 100,
        ];
    }

    public function payload() : array
    {
        return [
            'cost' => 100,
            'from' => 'https://github.com/api/v3/watch-event',
        ];
    }

    public function action() : array
    {
        return [
            'comment',
            'reject',
            'close',
            'follow',
        ];
    }
}
