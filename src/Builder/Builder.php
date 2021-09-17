<?php

namespace KatalinKS\Order\Builder;

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

    public function fill(array $data): self
    {
        $this->instance->fill($data);

        return $this;
    }
}
