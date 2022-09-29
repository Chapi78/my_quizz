<?php

namespace ContainerJOUNi73;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder19f87 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerca262 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7da56 = [
        
    ];

    public function getConnection()
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'getConnection', array(), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'getMetadataFactory', array(), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'getExpressionBuilder', array(), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'beginTransaction', array(), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'getCache', array(), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->getCache();
    }

    public function transactional($func)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'transactional', array('func' => $func), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'wrapInTransaction', array('func' => $func), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'commit', array(), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->commit();
    }

    public function rollback()
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'rollback', array(), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'getClassMetadata', array('className' => $className), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'createQuery', array('dql' => $dql), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'createNamedQuery', array('name' => $name), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'createQueryBuilder', array(), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'flush', array('entity' => $entity), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'clear', array('entityName' => $entityName), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->clear($entityName);
    }

    public function close()
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'close', array(), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->close();
    }

    public function persist($entity)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'persist', array('entity' => $entity), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'remove', array('entity' => $entity), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'refresh', array('entity' => $entity), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'detach', array('entity' => $entity), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'merge', array('entity' => $entity), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'getRepository', array('entityName' => $entityName), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'contains', array('entity' => $entity), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'getEventManager', array(), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'getConfiguration', array(), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'isOpen', array(), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'getUnitOfWork', array(), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'getProxyFactory', array(), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'initializeObject', array('obj' => $obj), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'getFilters', array(), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'isFiltersStateClean', array(), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'hasFilters', array(), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return $this->valueHolder19f87->hasFilters();
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

        $instance->initializerca262 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder19f87) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder19f87 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder19f87->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, '__get', ['name' => $name], $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        if (isset(self::$publicProperties7da56[$name])) {
            return $this->valueHolder19f87->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder19f87;

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

        $targetObject = $this->valueHolder19f87;
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
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder19f87;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder19f87;
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
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, '__isset', array('name' => $name), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder19f87;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder19f87;
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
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, '__unset', array('name' => $name), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder19f87;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder19f87;
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
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, '__clone', array(), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        $this->valueHolder19f87 = clone $this->valueHolder19f87;
    }

    public function __sleep()
    {
        $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, '__sleep', array(), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;

        return array('valueHolder19f87');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerca262 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerca262;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerca262 && ($this->initializerca262->__invoke($valueHolder19f87, $this, 'initializeProxy', array(), $this->initializerca262) || 1) && $this->valueHolder19f87 = $valueHolder19f87;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder19f87;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder19f87;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
