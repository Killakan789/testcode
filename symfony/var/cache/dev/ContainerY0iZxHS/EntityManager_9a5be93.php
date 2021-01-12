<?php

namespace ContainerY0iZxHS;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc0839 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer76e38 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties51ef4 = [
        
    ];

    public function getConnection()
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'getConnection', array(), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'getMetadataFactory', array(), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'getExpressionBuilder', array(), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'beginTransaction', array(), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'getCache', array(), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->getCache();
    }

    public function transactional($func)
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'transactional', array('func' => $func), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->transactional($func);
    }

    public function commit()
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'commit', array(), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->commit();
    }

    public function rollback()
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'rollback', array(), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'getClassMetadata', array('className' => $className), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'createQuery', array('dql' => $dql), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'createNamedQuery', array('name' => $name), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'createQueryBuilder', array(), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'flush', array('entity' => $entity), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'clear', array('entityName' => $entityName), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->clear($entityName);
    }

    public function close()
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'close', array(), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->close();
    }

    public function persist($entity)
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'persist', array('entity' => $entity), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'remove', array('entity' => $entity), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'refresh', array('entity' => $entity), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'detach', array('entity' => $entity), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'merge', array('entity' => $entity), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'getRepository', array('entityName' => $entityName), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'contains', array('entity' => $entity), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'getEventManager', array(), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'getConfiguration', array(), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'isOpen', array(), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'getUnitOfWork', array(), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'getProxyFactory', array(), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'initializeObject', array('obj' => $obj), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'getFilters', array(), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'isFiltersStateClean', array(), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'hasFilters', array(), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return $this->valueHolderc0839->hasFilters();
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

        $instance->initializer76e38 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc0839) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc0839 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc0839->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, '__get', ['name' => $name], $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        if (isset(self::$publicProperties51ef4[$name])) {
            return $this->valueHolderc0839->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc0839;

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

        $targetObject = $this->valueHolderc0839;
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
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc0839;

            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolderc0839;
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
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, '__isset', array('name' => $name), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc0839;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderc0839;
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
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, '__unset', array('name' => $name), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc0839;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderc0839;
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
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, '__clone', array(), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        $this->valueHolderc0839 = clone $this->valueHolderc0839;
    }

    public function __sleep()
    {
        $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, '__sleep', array(), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;

        return array('valueHolderc0839');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer76e38 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer76e38;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer76e38 && ($this->initializer76e38->__invoke($valueHolderc0839, $this, 'initializeProxy', array(), $this->initializer76e38) || 1) && $this->valueHolderc0839 = $valueHolderc0839;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc0839;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc0839;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
