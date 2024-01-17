<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Order extends \App\Entity\Order implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'customer' => [parent::class, 'customer', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'invoice' => [parent::class, 'invoice', null],
        "\0".parent::class."\0".'state' => [parent::class, 'state', null],
        "\0".parent::class."\0".'vehicles' => [parent::class, 'vehicles', null],
        'customer' => [parent::class, 'customer', null],
        'id' => [parent::class, 'id', null],
        'invoice' => [parent::class, 'invoice', null],
        'state' => [parent::class, 'state', null],
        'vehicles' => [parent::class, 'vehicles', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
