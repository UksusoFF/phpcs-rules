<?php

declare(strict_types=1);

namespace UksusoFF\PhpCsFixer\RuleSet;

final class Laravel extends AbstractRuleSet
{
    protected $name = 'Laravel';

    protected $rules = [
        '@PSR2' => true, //https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/src/RuleSet.php
        'function_declaration' => [
            'closure_function_spacing' => 'none', //PhpStorm Preferences: Spaces => Before Parentheses => Anonymous function parentheses
        ],
        /*
         * Part of @PSR2 but not work for multiline: https://github.com/FriendsOfPHP/PHP-CS-Fixer/issues/3637
        'braces' => [
            'position_after_functions_and_oop_constructs' => 'next',
        ],
        */
        'class_attributes_separation' => true,
        'psr_autoloading' => true,
        'unary_operator_spaces' => true,
        'no_extra_blank_lines' => true,
        'binary_operator_spaces' => [
            'default' => 'single_space',
        ],
        /* Strings */
        'simple_to_complex_string_variable' => true,
        'single_quote' => true,
        'explicit_string_variable' => true,
        /* Strings */
        /* Array */
        'array_syntax' => [
            'syntax' => 'short',
        ],
        'trailing_comma_in_multiline' => true,
        'no_trailing_comma_in_singleline_array' => true,
        /* Array */
        /* List */
        'list_syntax' => [
            'syntax' => 'short',
        ],
        /* List */
        /* Imports */
        'ordered_imports' => [
            'sort_algorithm' => 'alpha',
        ],
        'no_unused_imports' => true,
        /* Imports */
        /* Comments */
        'align_multiline_comment' => true,
        'multiline_comment_opening_closing' => true,
        'single_line_comment_style' => [
            'comment_types' => ['asterisk', 'hash'],
        ],
        'UksusoFF/comment_must_starts_from_space' => true,
        /* Comments */
        'single_blank_line_before_namespace' => true,
        'short_scalar_cast' => true,
        'implode_call' => true,
        'new_with_braces' => true,
        'declare_strict_types' => true,
        'no_unused_imports' => true,
    ];
}
