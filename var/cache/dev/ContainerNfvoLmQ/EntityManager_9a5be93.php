<?php

namespace ContainerNfvoLmQ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0645e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer92089 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3ac2c = [
        
    ];

    public function getConnection()
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'getConnection', array(), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'getMetadataFactory', array(), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'getExpressionBuilder', array(), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'beginTransaction', array(), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'getCache', array(), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'transactional', array('func' => $func), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'commit', array(), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->commit();
    }

    public function rollback()
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'rollback', array(), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'getClassMetadata', array('className' => $className), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'createQuery', array('dql' => $dql), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'createNamedQuery', array('name' => $name), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'createQueryBuilder', array(), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'flush', array('entity' => $entity), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'clear', array('entityName' => $entityName), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->clear($entityName);
    }

    public function close()
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'close', array(), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->close();
    }

    public function persist($entity)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'persist', array('entity' => $entity), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'remove', array('entity' => $entity), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'refresh', array('entity' => $entity), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'detach', array('entity' => $entity), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'merge', array('entity' => $entity), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'contains', array('entity' => $entity), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'getEventManager', array(), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'getConfiguration', array(), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'isOpen', array(), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'getUnitOfWork', array(), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'getProxyFactory', array(), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'initializeObject', array('obj' => $obj), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'getFilters', array(), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'isFiltersStateClean', array(), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'hasFilters', array(), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return $this->valueHolder0645e->hasFilters();
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

        $instance->initializer92089 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder0645e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0645e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0645e->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, '__get', ['name' => $name], $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        if (isset(self::$publicProperties3ac2c[$name])) {
            return $this->valueHolder0645e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0645e;

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

        $targetObject = $this->valueHolder0645e;
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
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0645e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0645e;
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
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, '__isset', array('name' => $name), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0645e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0645e;
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
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, '__unset', array('name' => $name), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0645e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0645e;
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
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, '__clone', array(), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        $this->valueHolder0645e = clone $this->valueHolder0645e;
    }

    public function __sleep()
    {
        $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, '__sleep', array(), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;

        return array('valueHolder0645e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer92089 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer92089;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer92089 && ($this->initializer92089->__invoke($valueHolder0645e, $this, 'initializeProxy', array(), $this->initializer92089) || 1) && $this->valueHolder0645e = $valueHolder0645e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0645e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0645e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
