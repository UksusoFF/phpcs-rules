<?php

declare(strict_types=1);

namespace UksusoFF\PhpCsFixer\Fixer;

use PhpCsFixer\AbstractFixer;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use PhpCsFixer\Utils;
use SplFileInfo;

final class CommentMustStartsFromSpaceFixer extends AbstractFixer
{
    public function getDefinition(): FixerDefinitionInterface
    {
        return new FixerDefinition(
            'Add space to comment start.',
            []
        );
    }

    public function isCandidate(Tokens $tokens): bool
    {
        return $tokens->isTokenKindFound(T_COMMENT);
    }

    protected function applyFix(SplFileInfo $file, Tokens $tokens): void
    {
        foreach ($tokens as $index => $token) {
            if (!$token->isGivenKind(T_COMMENT)) {
                continue;
            }

            $content = $token->getContent();

            if (0 === strpos($content, '/*')) {
                continue;
            }

            $commentContent = $this->contentTodo(
                $this->contentTrim($content)
            );

            $tokens[$index] = !empty($commentContent)
                ? new Token([$token->getId(), '// ' . $commentContent])
                : new Token([$token->getId(), '//']);
        }
    }

    protected function contentTrim(string $content): string
    {
        return trim(trim($content), '/ ');
    }

    protected function contentTodo(string $content): string
    {
        if (strpos($content, 'TODO', 0) !== 0) {
            return $content;
        }

        $content = ucfirst(trim(str_replace([
            'TODO:',
            'TODO',
        ], '', $content)));

        return "TODO: $content";
    }

    public function getName(): string
    {
        $nameParts = explode('\\', static::class);
        $name = Utils::camelCaseToUnderscore(substr(end($nameParts), 0, -\strlen('Fixer')));

        return "UksusoFF/{$name}";
    }
}
