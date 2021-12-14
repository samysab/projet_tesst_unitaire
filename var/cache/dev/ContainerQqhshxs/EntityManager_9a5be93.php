<?php

namespace ContainerQqhshxs;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderef4cb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbb0ba = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc7649 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'getConnection', array(), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'getMetadataFactory', array(), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'getExpressionBuilder', array(), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'beginTransaction', array(), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'getCache', array(), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'transactional', array('func' => $func), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'commit', array(), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->commit();
    }

    public function rollback()
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'rollback', array(), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'getClassMetadata', array('className' => $className), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'createQuery', array('dql' => $dql), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'createNamedQuery', array('name' => $name), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'createQueryBuilder', array(), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'flush', array('entity' => $entity), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'clear', array('entityName' => $entityName), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->clear($entityName);
    }

    public function close()
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'close', array(), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->close();
    }

    public function persist($entity)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'persist', array('entity' => $entity), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'remove', array('entity' => $entity), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'refresh', array('entity' => $entity), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'detach', array('entity' => $entity), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'merge', array('entity' => $entity), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'contains', array('entity' => $entity), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'getEventManager', array(), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'getConfiguration', array(), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'isOpen', array(), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'getUnitOfWork', array(), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'getProxyFactory', array(), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'initializeObject', array('obj' => $obj), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'getFilters', array(), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'isFiltersStateClean', array(), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'hasFilters', array(), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return $this->valueHolderef4cb->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerbb0ba = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderef4cb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderef4cb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderef4cb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, '__get', ['name' => $name], $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        if (isset(self::$publicPropertiesc7649[$name])) {
            return $this->valueHolderef4cb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef4cb;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderef4cb;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef4cb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderef4cb;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, '__isset', array('name' => $name), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef4cb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderef4cb;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, '__unset', array('name' => $name), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef4cb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderef4cb;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, '__clone', array(), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        $this->valueHolderef4cb = clone $this->valueHolderef4cb;
    }

    public function __sleep()
    {
        $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, '__sleep', array(), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;

        return array('valueHolderef4cb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbb0ba = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbb0ba;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbb0ba && ($this->initializerbb0ba->__invoke($valueHolderef4cb, $this, 'initializeProxy', array(), $this->initializerbb0ba) || 1) && $this->valueHolderef4cb = $valueHolderef4cb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderef4cb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderef4cb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
