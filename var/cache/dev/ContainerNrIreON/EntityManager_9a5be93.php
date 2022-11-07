<?php

namespace ContainerNrIreON;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder47d1c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb1d8e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties11654 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'getConnection', array(), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'getMetadataFactory', array(), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'getExpressionBuilder', array(), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'beginTransaction', array(), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'getCache', array(), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'transactional', array('func' => $func), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'commit', array(), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->commit();
    }

    public function rollback()
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'rollback', array(), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'getClassMetadata', array('className' => $className), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'createQuery', array('dql' => $dql), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'createNamedQuery', array('name' => $name), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'createQueryBuilder', array(), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'flush', array('entity' => $entity), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'clear', array('entityName' => $entityName), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->clear($entityName);
    }

    public function close()
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'close', array(), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->close();
    }

    public function persist($entity)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'persist', array('entity' => $entity), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'remove', array('entity' => $entity), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'refresh', array('entity' => $entity), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'detach', array('entity' => $entity), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'merge', array('entity' => $entity), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'contains', array('entity' => $entity), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'getEventManager', array(), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'getConfiguration', array(), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'isOpen', array(), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'getUnitOfWork', array(), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'getProxyFactory', array(), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'initializeObject', array('obj' => $obj), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'getFilters', array(), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'isFiltersStateClean', array(), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'hasFilters', array(), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return $this->valueHolder47d1c->hasFilters();
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

        $instance->initializerb1d8e = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder47d1c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder47d1c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder47d1c->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, '__get', ['name' => $name], $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        if (isset(self::$publicProperties11654[$name])) {
            return $this->valueHolder47d1c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47d1c;

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

        $targetObject = $this->valueHolder47d1c;
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
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47d1c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder47d1c;
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
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, '__isset', array('name' => $name), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47d1c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder47d1c;
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
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, '__unset', array('name' => $name), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47d1c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder47d1c;
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
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, '__clone', array(), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        $this->valueHolder47d1c = clone $this->valueHolder47d1c;
    }

    public function __sleep()
    {
        $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, '__sleep', array(), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;

        return array('valueHolder47d1c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb1d8e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb1d8e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb1d8e && ($this->initializerb1d8e->__invoke($valueHolder47d1c, $this, 'initializeProxy', array(), $this->initializerb1d8e) || 1) && $this->valueHolder47d1c = $valueHolder47d1c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder47d1c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder47d1c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
