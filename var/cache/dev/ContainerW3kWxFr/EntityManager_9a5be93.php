<?php

namespace ContainerW3kWxFr;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd897f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0feb2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb7a23 = [
        
    ];

    public function getConnection()
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'getConnection', array(), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'getMetadataFactory', array(), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'getExpressionBuilder', array(), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'beginTransaction', array(), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'getCache', array(), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'transactional', array('func' => $func), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'commit', array(), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->commit();
    }

    public function rollback()
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'rollback', array(), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'getClassMetadata', array('className' => $className), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'createQuery', array('dql' => $dql), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'createNamedQuery', array('name' => $name), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'createQueryBuilder', array(), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'flush', array('entity' => $entity), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'clear', array('entityName' => $entityName), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->clear($entityName);
    }

    public function close()
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'close', array(), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->close();
    }

    public function persist($entity)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'persist', array('entity' => $entity), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'remove', array('entity' => $entity), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'refresh', array('entity' => $entity), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'detach', array('entity' => $entity), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'merge', array('entity' => $entity), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'contains', array('entity' => $entity), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'getEventManager', array(), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'getConfiguration', array(), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'isOpen', array(), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'getUnitOfWork', array(), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'getProxyFactory', array(), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'initializeObject', array('obj' => $obj), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'getFilters', array(), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'isFiltersStateClean', array(), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'hasFilters', array(), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return $this->valueHolderd897f->hasFilters();
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

        $instance->initializer0feb2 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderd897f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd897f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd897f->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, '__get', ['name' => $name], $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        if (isset(self::$publicPropertiesb7a23[$name])) {
            return $this->valueHolderd897f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd897f;

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

        $targetObject = $this->valueHolderd897f;
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
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd897f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd897f;
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
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, '__isset', array('name' => $name), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd897f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd897f;
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
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, '__unset', array('name' => $name), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd897f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd897f;
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
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, '__clone', array(), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        $this->valueHolderd897f = clone $this->valueHolderd897f;
    }

    public function __sleep()
    {
        $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, '__sleep', array(), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;

        return array('valueHolderd897f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0feb2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0feb2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0feb2 && ($this->initializer0feb2->__invoke($valueHolderd897f, $this, 'initializeProxy', array(), $this->initializer0feb2) || 1) && $this->valueHolderd897f = $valueHolderd897f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd897f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd897f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
