<?php

declare(strict_types=1);
/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

namespace App\Entity\Product;

use Sylius\Component\Resource\Model\ResourceInterface;

interface ProductInterface extends ResourceInterface
{
    public function getColor(): ?string;

    public function setColor(?string $color): void;
}
