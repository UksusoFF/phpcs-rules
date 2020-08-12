<?php

declare(strict_types=1);

namespace UksusoFF\PhpCsFixer;

use PhpCsFixer\Config;
use UksusoFF\PhpCsFixer\Fixer\CommentMustStartsFromSpaceFixer;

final class Factory
{
    public static function fromRuleSet(RuleSet $ruleSet, array $overrideRules = []): Config
    {
        $config = new Config($ruleSet->name());

        $config->setRiskyAllowed(true);
        $config->setLineEnding("\n");
        $config->setRules(\array_merge(
            $ruleSet->rules(),
            $overrideRules
        ));

        $config->registerCustomFixers([
            new CommentMustStartsFromSpaceFixer,
        ]);

        return $config;
    }
}
