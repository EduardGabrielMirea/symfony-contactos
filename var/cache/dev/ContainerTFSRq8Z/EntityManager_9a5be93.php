<?php

namespace ContainerTFSRq8Z;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc9493 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera5d58 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties55ce1 = [
        
    ];

    public function getConnection()
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'getConnection', array(), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'getMetadataFactory', array(), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'getExpressionBuilder', array(), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'beginTransaction', array(), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'getCache', array(), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->getCache();
    }

    public function transactional($func)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'transactional', array('func' => $func), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'wrapInTransaction', array('func' => $func), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'commit', array(), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->commit();
    }

    public function rollback()
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'rollback', array(), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'getClassMetadata', array('className' => $className), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'createQuery', array('dql' => $dql), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'createNamedQuery', array('name' => $name), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'createQueryBuilder', array(), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'flush', array('entity' => $entity), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'clear', array('entityName' => $entityName), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->clear($entityName);
    }

    public function close()
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'close', array(), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->close();
    }

    public function persist($entity)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'persist', array('entity' => $entity), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'remove', array('entity' => $entity), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'refresh', array('entity' => $entity), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'detach', array('entity' => $entity), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'merge', array('entity' => $entity), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'getRepository', array('entityName' => $entityName), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'contains', array('entity' => $entity), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'getEventManager', array(), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'getConfiguration', array(), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'isOpen', array(), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'getUnitOfWork', array(), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'getProxyFactory', array(), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'initializeObject', array('obj' => $obj), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'getFilters', array(), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'isFiltersStateClean', array(), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'hasFilters', array(), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return $this->valueHolderc9493->hasFilters();
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

        $instance->initializera5d58 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderc9493) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc9493 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc9493->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, '__get', ['name' => $name], $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        if (isset(self::$publicProperties55ce1[$name])) {
            return $this->valueHolderc9493->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9493;

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

        $targetObject = $this->valueHolderc9493;
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
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9493;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc9493;
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
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, '__isset', array('name' => $name), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9493;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc9493;
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
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, '__unset', array('name' => $name), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9493;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc9493;
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
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, '__clone', array(), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        $this->valueHolderc9493 = clone $this->valueHolderc9493;
    }

    public function __sleep()
    {
        $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, '__sleep', array(), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;

        return array('valueHolderc9493');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera5d58 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera5d58;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera5d58 && ($this->initializera5d58->__invoke($valueHolderc9493, $this, 'initializeProxy', array(), $this->initializera5d58) || 1) && $this->valueHolderc9493 = $valueHolderc9493;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc9493;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc9493;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
