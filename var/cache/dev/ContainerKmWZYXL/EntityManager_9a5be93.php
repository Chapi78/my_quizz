<?php

namespace ContainerKmWZYXL;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere1ed0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer03414 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties059d7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'getConnection', array(), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'getMetadataFactory', array(), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'getExpressionBuilder', array(), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'beginTransaction', array(), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'getCache', array(), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->getCache();
    }

    public function transactional($func)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'transactional', array('func' => $func), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'wrapInTransaction', array('func' => $func), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'commit', array(), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->commit();
    }

    public function rollback()
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'rollback', array(), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'getClassMetadata', array('className' => $className), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'createQuery', array('dql' => $dql), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'createNamedQuery', array('name' => $name), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'createQueryBuilder', array(), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'flush', array('entity' => $entity), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'clear', array('entityName' => $entityName), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->clear($entityName);
    }

    public function close()
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'close', array(), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->close();
    }

    public function persist($entity)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'persist', array('entity' => $entity), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'remove', array('entity' => $entity), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'refresh', array('entity' => $entity), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'detach', array('entity' => $entity), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'merge', array('entity' => $entity), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'getRepository', array('entityName' => $entityName), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'contains', array('entity' => $entity), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'getEventManager', array(), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'getConfiguration', array(), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'isOpen', array(), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'getUnitOfWork', array(), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'getProxyFactory', array(), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'initializeObject', array('obj' => $obj), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'getFilters', array(), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'isFiltersStateClean', array(), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'hasFilters', array(), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return $this->valueHoldere1ed0->hasFilters();
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

        $instance->initializer03414 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldere1ed0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere1ed0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere1ed0->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, '__get', ['name' => $name], $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        if (isset(self::$publicProperties059d7[$name])) {
            return $this->valueHoldere1ed0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1ed0;

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

        $targetObject = $this->valueHoldere1ed0;
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
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1ed0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere1ed0;
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
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, '__isset', array('name' => $name), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1ed0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere1ed0;
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
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, '__unset', array('name' => $name), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1ed0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere1ed0;
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
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, '__clone', array(), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        $this->valueHoldere1ed0 = clone $this->valueHoldere1ed0;
    }

    public function __sleep()
    {
        $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, '__sleep', array(), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;

        return array('valueHoldere1ed0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer03414 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer03414;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer03414 && ($this->initializer03414->__invoke($valueHoldere1ed0, $this, 'initializeProxy', array(), $this->initializer03414) || 1) && $this->valueHoldere1ed0 = $valueHoldere1ed0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere1ed0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere1ed0;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}