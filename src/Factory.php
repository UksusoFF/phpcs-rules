<?php

declare(strict_types=1);

namespace UksusoFF\PhpCsFixer;

use PhpCsFixer\Config;

final class Factory
{
    public static function fromRuleSet(RuleSet $ruleSet, array $overrideRules = []): Config
    {
        $config = new Config($ruleSet->name());

        $config->setRiskyAllowed(true);
        $config->setRules(\array_merge(
            $ruleSet->rules(),
            $overrideRules
        ));

        return $config;
    }
}
