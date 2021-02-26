<?php

namespace ContainerH9bMz7h;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd9b59 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbc211 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1d85e = [
        
    ];

    public function getConnection()
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'getConnection', array(), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'getMetadataFactory', array(), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'getExpressionBuilder', array(), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'beginTransaction', array(), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'getCache', array(), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'transactional', array('func' => $func), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->transactional($func);
    }

    public function commit()
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'commit', array(), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->commit();
    }

    public function rollback()
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'rollback', array(), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'getClassMetadata', array('className' => $className), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'createQuery', array('dql' => $dql), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'createNamedQuery', array('name' => $name), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'createQueryBuilder', array(), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'flush', array('entity' => $entity), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'clear', array('entityName' => $entityName), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->clear($entityName);
    }

    public function close()
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'close', array(), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->close();
    }

    public function persist($entity)
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'persist', array('entity' => $entity), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'remove', array('entity' => $entity), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'refresh', array('entity' => $entity), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'detach', array('entity' => $entity), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'merge', array('entity' => $entity), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'contains', array('entity' => $entity), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'getEventManager', array(), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'getConfiguration', array(), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'isOpen', array(), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'getUnitOfWork', array(), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'getProxyFactory', array(), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'initializeObject', array('obj' => $obj), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'getFilters', array(), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'isFiltersStateClean', array(), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'hasFilters', array(), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return $this->valueHolderd9b59->hasFilters();
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

        $instance->initializerbc211 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd9b59) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd9b59 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd9b59->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, '__get', ['name' => $name], $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        if (isset(self::$publicProperties1d85e[$name])) {
            return $this->valueHolderd9b59->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9b59;

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

        $targetObject = $this->valueHolderd9b59;
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
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9b59;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd9b59;
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
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, '__isset', array('name' => $name), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9b59;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd9b59;
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
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, '__unset', array('name' => $name), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd9b59;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd9b59;
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
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, '__clone', array(), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        $this->valueHolderd9b59 = clone $this->valueHolderd9b59;
    }

    public function __sleep()
    {
        $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, '__sleep', array(), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;

        return array('valueHolderd9b59');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbc211 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbc211;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbc211 && ($this->initializerbc211->__invoke($valueHolderd9b59, $this, 'initializeProxy', array(), $this->initializerbc211) || 1) && $this->valueHolderd9b59 = $valueHolderd9b59;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd9b59;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd9b59;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
