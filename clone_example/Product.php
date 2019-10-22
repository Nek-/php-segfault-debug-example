<?php

require_once "ClonableObject.php";

class Product extends ClonableObject
{
    protected $card;

    public function __construct(Card $card)
    {
        $this->card = $card;
    }

    protected function getProperties()
    {
        return array_keys(get_object_vars($this));
    }
}
