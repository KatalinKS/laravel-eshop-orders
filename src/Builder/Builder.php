<?php


namespace KatalinKS\Order\Builder;


use KatalinKS\Order\Contracts\Order;

abstract class Builder
{
   protected $type;
   protected $instance;

    public function fresh(): self
    {
        $this->instance = $this->init();

        return  $this;
    }

    public function init()
    {
        return app($this->type);
    }
}
