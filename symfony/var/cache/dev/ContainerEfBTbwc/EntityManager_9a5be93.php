<?php

namespace ContainerEfBTbwc;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2b551 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerefe39 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfe437 = [
        
    ];

    public function getConnection()
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'getConnection', array(), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'getMetadataFactory', array(), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'getExpressionBuilder', array(), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'beginTransaction', array(), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'getCache', array(), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->getCache();
    }

    public function transactional($func)
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'transactional', array('func' => $func), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->transactional($func);
    }

    public function commit()
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'commit', array(), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->commit();
    }

    public function rollback()
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'rollback', array(), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'getClassMetadata', array('className' => $className), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'createQuery', array('dql' => $dql), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'createNamedQuery', array('name' => $name), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'createQueryBuilder', array(), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'flush', array('entity' => $entity), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'clear', array('entityName' => $entityName), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->clear($entityName);
    }

    public function close()
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'close', array(), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->close();
    }

    public function persist($entity)
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'persist', array('entity' => $entity), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'remove', array('entity' => $entity), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'refresh', array('entity' => $entity), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'detach', array('entity' => $entity), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'merge', array('entity' => $entity), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'getRepository', array('entityName' => $entityName), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'contains', array('entity' => $entity), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'getEventManager', array(), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'getConfiguration', array(), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'isOpen', array(), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'getUnitOfWork', array(), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'getProxyFactory', array(), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'initializeObject', array('obj' => $obj), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'getFilters', array(), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'isFiltersStateClean', array(), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'hasFilters', array(), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return $this->valueHolder2b551->hasFilters();
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

        $instance->initializerefe39 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2b551) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2b551 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2b551->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, '__get', ['name' => $name], $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        if (isset(self::$publicPropertiesfe437[$name])) {
            return $this->valueHolder2b551->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2b551;

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

        $targetObject = $this->valueHolder2b551;
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
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2b551;

            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder2b551;
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
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, '__isset', array('name' => $name), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2b551;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder2b551;
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
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, '__unset', array('name' => $name), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2b551;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder2b551;
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
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, '__clone', array(), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        $this->valueHolder2b551 = clone $this->valueHolder2b551;
    }

    public function __sleep()
    {
        $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, '__sleep', array(), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;

        return array('valueHolder2b551');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerefe39 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerefe39;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerefe39 && ($this->initializerefe39->__invoke($valueHolder2b551, $this, 'initializeProxy', array(), $this->initializerefe39) || 1) && $this->valueHolder2b551 = $valueHolder2b551;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2b551;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2b551;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
