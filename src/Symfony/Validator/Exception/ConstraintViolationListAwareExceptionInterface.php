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

namespace ApiPlatform\Symfony\Validator\Exception;

use ApiPlatform\Metadata\Exception\ExceptionInterface;
use Symfony\Component\Validator\ConstraintViolationListInterface;

/**
 * An exception which has a constraint violation list.
 *
 * @deprecated use ApiPlatform\Validator\Exception\ConstraintViolationListAwareExceptionInterface
 */
interface ConstraintViolationListAwareExceptionInterface extends ExceptionInterface
{
    /**
     * Gets constraint violations related to this exception.
     */
    public function getConstraintViolationList(): ConstraintViolationListInterface;
}
