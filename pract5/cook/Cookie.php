<?php

namespace Cook;

class Cookie
{
    private $type;
    public function setType($type) {
        $validTypes = ['Chocolate', 'Peanut Butter', 'Coffee'];
        if (in_array($type, $validTypes)) {
            $this->type = $type;
        } else {
            echo 'Таких печенек нету(';
        }
    }
    public function getType() {
        return $this->type;
    }
}