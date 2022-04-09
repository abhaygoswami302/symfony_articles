<?php

namespace ContainerKHyXpLu;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfa835 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc91ed = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3e05f = [
        
    ];

    public function getConnection()
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'getConnection', array(), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'getMetadataFactory', array(), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'getExpressionBuilder', array(), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'beginTransaction', array(), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'getCache', array(), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'transactional', array('func' => $func), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'commit', array(), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->commit();
    }

    public function rollback()
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'rollback', array(), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'getClassMetadata', array('className' => $className), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'createQuery', array('dql' => $dql), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'createNamedQuery', array('name' => $name), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'createQueryBuilder', array(), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'flush', array('entity' => $entity), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'clear', array('entityName' => $entityName), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->clear($entityName);
    }

    public function close()
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'close', array(), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->close();
    }

    public function persist($entity)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'persist', array('entity' => $entity), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'remove', array('entity' => $entity), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'refresh', array('entity' => $entity), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'detach', array('entity' => $entity), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'merge', array('entity' => $entity), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'contains', array('entity' => $entity), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'getEventManager', array(), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'getConfiguration', array(), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'isOpen', array(), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'getUnitOfWork', array(), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'getProxyFactory', array(), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'initializeObject', array('obj' => $obj), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'getFilters', array(), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'isFiltersStateClean', array(), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'hasFilters', array(), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return $this->valueHolderfa835->hasFilters();
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

        $instance->initializerc91ed = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfa835) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfa835 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfa835->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, '__get', ['name' => $name], $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        if (isset(self::$publicProperties3e05f[$name])) {
            return $this->valueHolderfa835->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa835;

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

        $targetObject = $this->valueHolderfa835;
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
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa835;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfa835;
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
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, '__isset', array('name' => $name), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa835;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfa835;
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
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, '__unset', array('name' => $name), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa835;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfa835;
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
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, '__clone', array(), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        $this->valueHolderfa835 = clone $this->valueHolderfa835;
    }

    public function __sleep()
    {
        $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, '__sleep', array(), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;

        return array('valueHolderfa835');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc91ed = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc91ed;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc91ed && ($this->initializerc91ed->__invoke($valueHolderfa835, $this, 'initializeProxy', array(), $this->initializerc91ed) || 1) && $this->valueHolderfa835 = $valueHolderfa835;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfa835;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfa835;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
