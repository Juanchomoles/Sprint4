<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Model extends \App\Entity\Model implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'brand' => [parent::class, 'brand', null],
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'gearType' => [parent::class, 'gearType', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'name' => [parent::class, 'name', null],
        "\0".parent::class."\0".'vehicles' => [parent::class, 'vehicles', null],
        "\0".parent::class."\0".'year' => [parent::class, 'year', null],
        'brand' => [parent::class, 'brand', null],
        'description' => [parent::class, 'description', null],
        'gearType' => [parent::class, 'gearType', null],
        'id' => [parent::class, 'id', null],
        'name' => [parent::class, 'name', null],
        'vehicles' => [parent::class, 'vehicles', null],
        'year' => [parent::class, 'year', null],
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