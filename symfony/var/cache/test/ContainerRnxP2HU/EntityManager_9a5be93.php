<?php

namespace ContainerRnxP2HU;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderef8c4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf446b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7d11b = [
        
    ];

    public function getConnection()
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'getConnection', array(), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'getMetadataFactory', array(), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'getExpressionBuilder', array(), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'beginTransaction', array(), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'getCache', array(), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'transactional', array('func' => $func), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->transactional($func);
    }

    public function commit()
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'commit', array(), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->commit();
    }

    public function rollback()
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'rollback', array(), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'getClassMetadata', array('className' => $className), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'createQuery', array('dql' => $dql), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'createNamedQuery', array('name' => $name), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'createQueryBuilder', array(), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'flush', array('entity' => $entity), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'clear', array('entityName' => $entityName), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->clear($entityName);
    }

    public function close()
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'close', array(), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->close();
    }

    public function persist($entity)
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'persist', array('entity' => $entity), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'remove', array('entity' => $entity), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'refresh', array('entity' => $entity), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'detach', array('entity' => $entity), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'merge', array('entity' => $entity), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'contains', array('entity' => $entity), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'getEventManager', array(), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'getConfiguration', array(), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'isOpen', array(), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'getUnitOfWork', array(), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'getProxyFactory', array(), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'initializeObject', array('obj' => $obj), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'getFilters', array(), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'isFiltersStateClean', array(), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'hasFilters', array(), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return $this->valueHolderef8c4->hasFilters();
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

        $instance->initializerf446b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderef8c4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderef8c4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderef8c4->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, '__get', ['name' => $name], $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        if (isset(self::$publicProperties7d11b[$name])) {
            return $this->valueHolderef8c4->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef8c4;

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

        $targetObject = $this->valueHolderef8c4;
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
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef8c4;

            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolderef8c4;
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
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, '__isset', array('name' => $name), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef8c4;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderef8c4;
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
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, '__unset', array('name' => $name), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef8c4;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderef8c4;
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
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, '__clone', array(), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        $this->valueHolderef8c4 = clone $this->valueHolderef8c4;
    }

    public function __sleep()
    {
        $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, '__sleep', array(), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;

        return array('valueHolderef8c4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf446b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf446b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf446b && ($this->initializerf446b->__invoke($valueHolderef8c4, $this, 'initializeProxy', array(), $this->initializerf446b) || 1) && $this->valueHolderef8c4 = $valueHolderef8c4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderef8c4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderef8c4;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
