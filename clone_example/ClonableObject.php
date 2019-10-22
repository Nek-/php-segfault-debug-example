<?php

abstract class ClonableObject
{
    public function __clone ()
    {
        $properties = $this->getProperties();

        foreach ($properties as $name) {
            $value = $this->{$name};
            if (is_object($value) || is_array($value)) {
                $this->{$name} = $this->cloneArray($value);
            }
        }
    }

    abstract protected function getProperties();

    private function cloneArray($data)
    {
        if (is_array($data) && is_object(reset($data)) || is_array($data)) {
            foreach ($data as $item) {
                return $this->cloneArray($item);
            }
        }
        if (is_object($data)) {
            return clone $data;
        }

        return $data;
    }
}
