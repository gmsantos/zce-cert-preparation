<?php declare(strict_types=1);

function hello(string $nome): void {
    echo "Olá, $nome" . PHP_EOL;
}

function somar(int $x, int $y): ?int {
    return $x + $y;
}

hello("Season");
// hello(123); // vai dar erro

echo somar(1, 2);
