<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude('vendor')
;

return (new PhpCsFixer\Config())
    ->setFinder($finder)
;
