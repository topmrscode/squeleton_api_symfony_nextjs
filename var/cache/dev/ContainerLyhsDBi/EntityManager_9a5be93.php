<?php

namespace ContainerLyhsDBi;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9a53d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer445fb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbe52a = [
        
    ];

    public function getConnection()
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'getConnection', array(), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'getMetadataFactory', array(), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'getExpressionBuilder', array(), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'beginTransaction', array(), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'getCache', array(), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'transactional', array('func' => $func), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->transactional($func);
    }

    public function commit()
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'commit', array(), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->commit();
    }

    public function rollback()
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'rollback', array(), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'getClassMetadata', array('className' => $className), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'createQuery', array('dql' => $dql), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'createNamedQuery', array('name' => $name), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'createQueryBuilder', array(), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'flush', array('entity' => $entity), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'clear', array('entityName' => $entityName), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->clear($entityName);
    }

    public function close()
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'close', array(), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->close();
    }

    public function persist($entity)
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'persist', array('entity' => $entity), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'remove', array('entity' => $entity), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'refresh', array('entity' => $entity), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'detach', array('entity' => $entity), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'merge', array('entity' => $entity), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'contains', array('entity' => $entity), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'getEventManager', array(), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'getConfiguration', array(), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'isOpen', array(), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'getUnitOfWork', array(), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'getProxyFactory', array(), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'initializeObject', array('obj' => $obj), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'getFilters', array(), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'isFiltersStateClean', array(), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'hasFilters', array(), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return $this->valueHolder9a53d->hasFilters();
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

        $instance->initializer445fb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9a53d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9a53d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9a53d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, '__get', ['name' => $name], $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        if (isset(self::$publicPropertiesbe52a[$name])) {
            return $this->valueHolder9a53d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a53d;

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

        $targetObject = $this->valueHolder9a53d;
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
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a53d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9a53d;
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
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, '__isset', array('name' => $name), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a53d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9a53d;
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
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, '__unset', array('name' => $name), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a53d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9a53d;
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
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, '__clone', array(), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        $this->valueHolder9a53d = clone $this->valueHolder9a53d;
    }

    public function __sleep()
    {
        $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, '__sleep', array(), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;

        return array('valueHolder9a53d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer445fb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer445fb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer445fb && ($this->initializer445fb->__invoke($valueHolder9a53d, $this, 'initializeProxy', array(), $this->initializer445fb) || 1) && $this->valueHolder9a53d = $valueHolder9a53d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9a53d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9a53d;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
