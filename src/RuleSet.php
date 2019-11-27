<?php

declare(strict_types=1);

namespace UksusoFF\PhpCsFixer;

interface RuleSet
{
    public function name(): string;

    public function rules(): array;
}
