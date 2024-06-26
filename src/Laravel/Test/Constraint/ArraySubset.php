<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Laravel\Test\Constraint;

use PHPUnit\Framework\Constraint\Constraint;

/**
 * Is used for phpunit >= 9.
 *
 * @internal
 */
final class ArraySubset extends Constraint
{
    use ArraySubsetTrait;

    /**
     * {@inheritdoc}
     */
    public function evaluate(mixed $other, string $description = '', bool $returnResult = false): ?bool
    {
        return $this->_evaluate($other, $description, $returnResult);
    }
}
