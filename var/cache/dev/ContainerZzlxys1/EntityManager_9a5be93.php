<?php

namespace ContainerZzlxys1;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfde16 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerac7b2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0aa1e = [
        
    ];

    public function getConnection()
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'getConnection', array(), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'getMetadataFactory', array(), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'getExpressionBuilder', array(), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'beginTransaction', array(), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'getCache', array(), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->getCache();
    }

    public function transactional($func)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'transactional', array('func' => $func), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'wrapInTransaction', array('func' => $func), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'commit', array(), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->commit();
    }

    public function rollback()
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'rollback', array(), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'getClassMetadata', array('className' => $className), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'createQuery', array('dql' => $dql), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'createNamedQuery', array('name' => $name), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'createQueryBuilder', array(), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'flush', array('entity' => $entity), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'clear', array('entityName' => $entityName), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->clear($entityName);
    }

    public function close()
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'close', array(), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->close();
    }

    public function persist($entity)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'persist', array('entity' => $entity), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'remove', array('entity' => $entity), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'refresh', array('entity' => $entity), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'detach', array('entity' => $entity), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'merge', array('entity' => $entity), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'getRepository', array('entityName' => $entityName), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'contains', array('entity' => $entity), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'getEventManager', array(), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'getConfiguration', array(), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'isOpen', array(), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'getUnitOfWork', array(), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'getProxyFactory', array(), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'initializeObject', array('obj' => $obj), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'getFilters', array(), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'isFiltersStateClean', array(), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'hasFilters', array(), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return $this->valueHolderfde16->hasFilters();
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

        $instance->initializerac7b2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfde16) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfde16 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfde16->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, '__get', ['name' => $name], $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        if (isset(self::$publicProperties0aa1e[$name])) {
            return $this->valueHolderfde16->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfde16;

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

        $targetObject = $this->valueHolderfde16;
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
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfde16;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfde16;
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
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, '__isset', array('name' => $name), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfde16;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfde16;
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
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, '__unset', array('name' => $name), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfde16;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfde16;
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
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, '__clone', array(), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        $this->valueHolderfde16 = clone $this->valueHolderfde16;
    }

    public function __sleep()
    {
        $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, '__sleep', array(), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;

        return array('valueHolderfde16');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerac7b2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerac7b2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerac7b2 && ($this->initializerac7b2->__invoke($valueHolderfde16, $this, 'initializeProxy', array(), $this->initializerac7b2) || 1) && $this->valueHolderfde16 = $valueHolderfde16;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfde16;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfde16;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
