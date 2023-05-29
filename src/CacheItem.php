<?php

declare(strict_types=1);

namespace S6nLabs\PhpstanPharPoc;

use Psr\Cache\CacheItemInterface;

class CacheItem implements CacheItemInterface
{
    public function getKey(): string
    {
        return 'dummy';
    }

    public function get(): mixed
    {
        return 'dummy';
    }

    public function isHit(): bool
    {
        return true;
    }

    public function set(mixed $value): static
    {
        return $this;
    }

    public function expiresAt(?\DateTimeInterface $expiration): static
    {
        return $this;
    }

    public function expiresAfter(null|int|\DateInterval $time): static
    {
        return $this;
    }
}
