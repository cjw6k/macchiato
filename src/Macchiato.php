<?php

namespace Macchiato;

use Latte\Engine;

use function Termwind\render as twRender;

class Macchiato
{
    public function __construct(readonly private Engine $latte)
    {
    }

    public function markup(string $name, array|object $params = [], ?string $block = null): string
    {
        return $this->latte->renderToString($name, $params, $block);
    }

    public function render(string $name, array|object $params = [], ?string $block = null): void
    {
        twRender($this->markup($name, $params, $block));
    }
}
