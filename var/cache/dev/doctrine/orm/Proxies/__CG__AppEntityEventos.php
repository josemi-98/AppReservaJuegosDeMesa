<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Eventos extends \App\Entity\Eventos implements \Doctrine\Persistence\Proxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
        __clone as private __doClone;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'descripcion' => [parent::class, 'descripcion', null],
        "\0".parent::class."\0".'fecha_fin' => [parent::class, 'fecha_fin', null],
        "\0".parent::class."\0".'fecha_inicio' => [parent::class, 'fecha_inicio', null],
        "\0".parent::class."\0".'gamesEvents' => [parent::class, 'gamesEvents', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'invitacion' => [parent::class, 'invitacion', null],
        "\0".parent::class."\0".'invitacionEventos' => [parent::class, 'invitacionEventos', null],
        "\0".parent::class."\0".'juegos' => [parent::class, 'juegos', null],
        "\0".parent::class."\0".'nombre' => [parent::class, 'nombre', null],
        'descripcion' => [parent::class, 'descripcion', null],
        'fecha_fin' => [parent::class, 'fecha_fin', null],
        'fecha_inicio' => [parent::class, 'fecha_inicio', null],
        'gamesEvents' => [parent::class, 'gamesEvents', null],
        'id' => [parent::class, 'id', null],
        'invitacion' => [parent::class, 'invitacion', null],
        'invitacionEventos' => [parent::class, 'invitacionEventos', null],
        'juegos' => [parent::class, 'juegos', null],
        'nombre' => [parent::class, 'nombre', null],
    ];

    /**
     * @internal
     */
    public bool $__isCloning = false;

    public function __construct(?\Closure $initializer = null)
    {
        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'id' => true,
            '__isCloning' => true,
        ], $this);
    }

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __clone()
    {
        $this->__isCloning = true;

        try {
            $this->__doClone();
        } finally {
            $this->__isCloning = false;
        }
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"], $properties['__isCloning']);

        return $properties;
    }
}
