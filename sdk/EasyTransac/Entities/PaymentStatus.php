<?php

namespace EasyTransac\Entities;

class PaymentStatus extends Entity
{
    /** @map:Tid **/
    protected $tid = null;
    /** @map:Language **/
    protected $language = null;

    public function setLanguage($value)
    {
        $this->language = $value;
        return $this;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setTid($value)
    {
        $this->tid = $value;
        return $this;
    }

    public function getTid()
    {
        return $this->tid;
    }
}

?>