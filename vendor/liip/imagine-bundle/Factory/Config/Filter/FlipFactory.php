<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Liip\ImagineBundle\Factory\Config\Filter;

use Liip\ImagineBundle\Config\Filter\Type\Flip;
use Liip\ImagineBundle\Config\FilterInterface;
use Liip\ImagineBundle\Factory\Config\FilterFactoryInterface;

/**
 * @internal
 *
 * @codeCoverageIgnore
 */
final class FlipFactory implements FilterFactoryInterface
{
    public function getName(): string
    {
        return Flip::NAME;
    }

    public function create(array $options): FilterInterface
    {
        return new Flip($options['axis']);
    }
}
