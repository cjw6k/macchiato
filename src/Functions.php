<?php

namespace Macchiato;

use Latte\Engine;

use function function_exists;

if (! function_exists('Macchiato\macchiato')) {
    function macchiato(): Macchiato
    {
        return factory()();
    }
}

if (! function_exists('Macchiato\factory')) {
    /** @return callable(): Macchiato */
    function factory(): callable
    {
        return static fn (): Macchiato => new Macchiato(new Engine());
    }
}

if (! function_exists('Macchiato\markup')) {
    /** @param array<string, string> $vars */
    function markup(string $source, array $vars = []): string
    {
        return macchiato()->markup($source, $vars);
    }
}

if (! function_exists('Macchiato\render')) {
    /** @param array<string, string> $vars */
    function render(string $source, array $vars = []): void
    {
        macchiato()->render($source, $vars);
    }
}
