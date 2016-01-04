<?php

namespace App\Silex;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\ValidatorServiceProvider;
use Symfony\Component\Validator\Mapping\Factory\LazyLoadingMetadataFactory;
use Symfony\Component\Validator\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class Application extends \Silex\Application {

  public function __construct(array $values) {
    parent::__construct($values);

    $this->register(new ServiceControllerServiceProvider());

    $this->register(new ValidatorServiceProvider());
    $this['validator.mapping.class_metadata_factory'] = function ($this) {
      foreach (spl_autoload_functions() as $fn) {
        AnnotationRegistry::registerLoader($fn);
      }
      $reader = new AnnotationReader;
      $loader = new AnnotationLoader($reader);
      return new LazyLoadingMetadataFactory($loader);
    };

    $this->register(new DoctrineServiceProvider(), array(
      'db.options' => array(
        'driver' => 'pdo_sqlite',
        'path' => __DIR__.'/../../../storage/app.db',
      ),
    ));

    $this->register(new \Dflydev\Provider\DoctrineOrm\DoctrineOrmServiceProvider(), array(
      'orm.em.options' => array(
        'mappings' => array(
          array(
            'type' => 'annotation',
            'namespace' => 'App\Entity',
            'path' => __DIR__.'/../../../src/App/Entity',
          ),
        ),
      ),
    ));
  }
}