<?php

namespace ContainerENFQNRi;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder89b86 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd88d7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa6aae = [
        
    ];

    public function getConnection()
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'getConnection', array(), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'getMetadataFactory', array(), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'getExpressionBuilder', array(), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'beginTransaction', array(), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'getCache', array(), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'transactional', array('func' => $func), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'commit', array(), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->commit();
    }

    public function rollback()
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'rollback', array(), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'getClassMetadata', array('className' => $className), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'createQuery', array('dql' => $dql), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'createNamedQuery', array('name' => $name), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'createQueryBuilder', array(), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'flush', array('entity' => $entity), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'clear', array('entityName' => $entityName), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->clear($entityName);
    }

    public function close()
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'close', array(), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->close();
    }

    public function persist($entity)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'persist', array('entity' => $entity), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'remove', array('entity' => $entity), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'refresh', array('entity' => $entity), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'detach', array('entity' => $entity), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'merge', array('entity' => $entity), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'contains', array('entity' => $entity), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'getEventManager', array(), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'getConfiguration', array(), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'isOpen', array(), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'getUnitOfWork', array(), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'getProxyFactory', array(), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'initializeObject', array('obj' => $obj), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'getFilters', array(), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'isFiltersStateClean', array(), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'hasFilters', array(), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return $this->valueHolder89b86->hasFilters();
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

        $instance->initializerd88d7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder89b86) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder89b86 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder89b86->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, '__get', ['name' => $name], $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        if (isset(self::$publicPropertiesa6aae[$name])) {
            return $this->valueHolder89b86->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89b86;

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

        $targetObject = $this->valueHolder89b86;
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
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89b86;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder89b86;
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
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, '__isset', array('name' => $name), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89b86;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder89b86;
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
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, '__unset', array('name' => $name), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89b86;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder89b86;
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
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, '__clone', array(), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        $this->valueHolder89b86 = clone $this->valueHolder89b86;
    }

    public function __sleep()
    {
        $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, '__sleep', array(), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;

        return array('valueHolder89b86');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd88d7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd88d7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd88d7 && ($this->initializerd88d7->__invoke($valueHolder89b86, $this, 'initializeProxy', array(), $this->initializerd88d7) || 1) && $this->valueHolder89b86 = $valueHolder89b86;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder89b86;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder89b86;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
