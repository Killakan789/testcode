<?php

namespace ContainerMfS1Asd;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc0a08 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerce9d3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesacf5c = [
        
    ];

    public function getConnection()
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'getConnection', array(), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'getMetadataFactory', array(), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'getExpressionBuilder', array(), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'beginTransaction', array(), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'getCache', array(), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->getCache();
    }

    public function transactional($func)
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'transactional', array('func' => $func), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->transactional($func);
    }

    public function commit()
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'commit', array(), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->commit();
    }

    public function rollback()
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'rollback', array(), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'getClassMetadata', array('className' => $className), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'createQuery', array('dql' => $dql), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'createNamedQuery', array('name' => $name), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'createQueryBuilder', array(), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'flush', array('entity' => $entity), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'clear', array('entityName' => $entityName), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->clear($entityName);
    }

    public function close()
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'close', array(), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->close();
    }

    public function persist($entity)
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'persist', array('entity' => $entity), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'remove', array('entity' => $entity), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'refresh', array('entity' => $entity), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'detach', array('entity' => $entity), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'merge', array('entity' => $entity), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'getRepository', array('entityName' => $entityName), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'contains', array('entity' => $entity), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'getEventManager', array(), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'getConfiguration', array(), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'isOpen', array(), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'getUnitOfWork', array(), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'getProxyFactory', array(), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'initializeObject', array('obj' => $obj), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'getFilters', array(), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'isFiltersStateClean', array(), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'hasFilters', array(), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return $this->valueHolderc0a08->hasFilters();
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

        $instance->initializerce9d3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc0a08) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc0a08 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc0a08->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, '__get', ['name' => $name], $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        if (isset(self::$publicPropertiesacf5c[$name])) {
            return $this->valueHolderc0a08->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc0a08;

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

        $targetObject = $this->valueHolderc0a08;
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
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc0a08;

            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolderc0a08;
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
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, '__isset', array('name' => $name), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc0a08;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderc0a08;
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
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, '__unset', array('name' => $name), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc0a08;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderc0a08;
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
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, '__clone', array(), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        $this->valueHolderc0a08 = clone $this->valueHolderc0a08;
    }

    public function __sleep()
    {
        $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, '__sleep', array(), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;

        return array('valueHolderc0a08');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerce9d3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerce9d3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerce9d3 && ($this->initializerce9d3->__invoke($valueHolderc0a08, $this, 'initializeProxy', array(), $this->initializerce9d3) || 1) && $this->valueHolderc0a08 = $valueHolderc0a08;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc0a08;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc0a08;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
