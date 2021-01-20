<?php

namespace ContainerMOGxHkZ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera549e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb062d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties88110 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'getConnection', array(), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'getMetadataFactory', array(), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'getExpressionBuilder', array(), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'beginTransaction', array(), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'getCache', array(), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'transactional', array('func' => $func), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->transactional($func);
    }

    public function commit()
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'commit', array(), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->commit();
    }

    public function rollback()
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'rollback', array(), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'getClassMetadata', array('className' => $className), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'createQuery', array('dql' => $dql), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'createNamedQuery', array('name' => $name), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'createQueryBuilder', array(), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'flush', array('entity' => $entity), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'clear', array('entityName' => $entityName), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->clear($entityName);
    }

    public function close()
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'close', array(), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->close();
    }

    public function persist($entity)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'persist', array('entity' => $entity), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'remove', array('entity' => $entity), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'refresh', array('entity' => $entity), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'detach', array('entity' => $entity), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'merge', array('entity' => $entity), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'contains', array('entity' => $entity), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'getEventManager', array(), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'getConfiguration', array(), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'isOpen', array(), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'getUnitOfWork', array(), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'getProxyFactory', array(), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'initializeObject', array('obj' => $obj), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'getFilters', array(), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'isFiltersStateClean', array(), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'hasFilters', array(), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return $this->valueHoldera549e->hasFilters();
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

        $instance->initializerb062d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera549e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera549e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera549e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, '__get', ['name' => $name], $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        if (isset(self::$publicProperties88110[$name])) {
            return $this->valueHoldera549e->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera549e;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHoldera549e;
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
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera549e;

            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHoldera549e;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value; return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, '__isset', array('name' => $name), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera549e;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldera549e;
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
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, '__unset', array('name' => $name), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera549e;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldera549e;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, '__clone', array(), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        $this->valueHoldera549e = clone $this->valueHoldera549e;
    }

    public function __sleep()
    {
        $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, '__sleep', array(), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;

        return array('valueHoldera549e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb062d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb062d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb062d && ($this->initializerb062d->__invoke($valueHoldera549e, $this, 'initializeProxy', array(), $this->initializerb062d) || 1) && $this->valueHoldera549e = $valueHoldera549e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera549e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera549e;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
