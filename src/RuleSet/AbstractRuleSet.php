<?php

declare(strict_types=1);

namespace UksusoFF\PhpCsFixer\RuleSet;

use UksusoFF\PhpCsFixer\RuleSet;

abstract class AbstractRuleSet implements RuleSet
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $rules = [];

    final public function name(): string
    {
        return $this->name;
    }

    final public function rules(): array
    {
        return $this->rules;
    }
}
