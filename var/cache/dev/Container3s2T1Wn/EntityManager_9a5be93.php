<?php

namespace Container3s2T1Wn;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9cee4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5d59a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2b35b = [
        
    ];

    public function getConnection()
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'getConnection', array(), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'getMetadataFactory', array(), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'getExpressionBuilder', array(), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'beginTransaction', array(), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'getCache', array(), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'transactional', array('func' => $func), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'commit', array(), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->commit();
    }

    public function rollback()
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'rollback', array(), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'getClassMetadata', array('className' => $className), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'createQuery', array('dql' => $dql), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'createNamedQuery', array('name' => $name), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'createQueryBuilder', array(), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'flush', array('entity' => $entity), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'clear', array('entityName' => $entityName), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->clear($entityName);
    }

    public function close()
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'close', array(), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->close();
    }

    public function persist($entity)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'persist', array('entity' => $entity), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'remove', array('entity' => $entity), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'refresh', array('entity' => $entity), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'detach', array('entity' => $entity), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'merge', array('entity' => $entity), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'contains', array('entity' => $entity), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'getEventManager', array(), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'getConfiguration', array(), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'isOpen', array(), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'getUnitOfWork', array(), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'getProxyFactory', array(), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'initializeObject', array('obj' => $obj), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'getFilters', array(), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'isFiltersStateClean', array(), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'hasFilters', array(), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return $this->valueHolder9cee4->hasFilters();
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

        $instance->initializer5d59a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9cee4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9cee4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9cee4->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, '__get', ['name' => $name], $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        if (isset(self::$publicProperties2b35b[$name])) {
            return $this->valueHolder9cee4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9cee4;

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

        $targetObject = $this->valueHolder9cee4;
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
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9cee4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9cee4;
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
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, '__isset', array('name' => $name), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9cee4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9cee4;
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
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, '__unset', array('name' => $name), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9cee4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9cee4;
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
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, '__clone', array(), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        $this->valueHolder9cee4 = clone $this->valueHolder9cee4;
    }

    public function __sleep()
    {
        $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, '__sleep', array(), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;

        return array('valueHolder9cee4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5d59a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5d59a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5d59a && ($this->initializer5d59a->__invoke($valueHolder9cee4, $this, 'initializeProxy', array(), $this->initializer5d59a) || 1) && $this->valueHolder9cee4 = $valueHolder9cee4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9cee4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9cee4;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
