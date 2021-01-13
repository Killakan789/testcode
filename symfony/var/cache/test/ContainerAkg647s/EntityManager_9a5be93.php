<?php

namespace ContainerAkg647s;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderde4c4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfa9ac = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties08c37 = [
        
    ];

    public function getConnection()
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'getConnection', array(), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'getMetadataFactory', array(), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'getExpressionBuilder', array(), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'beginTransaction', array(), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'getCache', array(), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'transactional', array('func' => $func), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->transactional($func);
    }

    public function commit()
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'commit', array(), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->commit();
    }

    public function rollback()
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'rollback', array(), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'getClassMetadata', array('className' => $className), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'createQuery', array('dql' => $dql), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'createNamedQuery', array('name' => $name), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'createQueryBuilder', array(), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'flush', array('entity' => $entity), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'clear', array('entityName' => $entityName), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->clear($entityName);
    }

    public function close()
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'close', array(), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->close();
    }

    public function persist($entity)
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'persist', array('entity' => $entity), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'remove', array('entity' => $entity), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'refresh', array('entity' => $entity), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'detach', array('entity' => $entity), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'merge', array('entity' => $entity), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'contains', array('entity' => $entity), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'getEventManager', array(), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'getConfiguration', array(), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'isOpen', array(), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'getUnitOfWork', array(), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'getProxyFactory', array(), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'initializeObject', array('obj' => $obj), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'getFilters', array(), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'isFiltersStateClean', array(), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'hasFilters', array(), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return $this->valueHolderde4c4->hasFilters();
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

        $instance->initializerfa9ac = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderde4c4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderde4c4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderde4c4->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, '__get', ['name' => $name], $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        if (isset(self::$publicProperties08c37[$name])) {
            return $this->valueHolderde4c4->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde4c4;

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

        $targetObject = $this->valueHolderde4c4;
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
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde4c4;

            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolderde4c4;
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
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, '__isset', array('name' => $name), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde4c4;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderde4c4;
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
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, '__unset', array('name' => $name), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde4c4;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderde4c4;
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
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, '__clone', array(), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        $this->valueHolderde4c4 = clone $this->valueHolderde4c4;
    }

    public function __sleep()
    {
        $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, '__sleep', array(), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;

        return array('valueHolderde4c4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfa9ac = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfa9ac;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfa9ac && ($this->initializerfa9ac->__invoke($valueHolderde4c4, $this, 'initializeProxy', array(), $this->initializerfa9ac) || 1) && $this->valueHolderde4c4 = $valueHolderde4c4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderde4c4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderde4c4;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
