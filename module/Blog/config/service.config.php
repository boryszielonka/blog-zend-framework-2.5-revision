<?php
namespace Blog;

use Blog\Repository\PostRepositoryImplementation;
use Blog\Service\BlogServiceImplementation;
use Zend\ServiceManager\ServiceLocatorInterface;

return [
//    'invokables' => [
//        'Blog\Service\BlogServiceInterface' => 'Blog\Service\BlogServiceImplementation',
//    ],
    'factories' => [
        'Blog\Repository\PostRepositoryInterface' =>
        function(ServiceLocatorInterface $serviceLocator) {
            $postRepo = new PostRepositoryImplementation();
            $postRepo->setDbAdapter($serviceLocator->get('Zend\Db\Adapter\Adapter'));

            return $postRepo;
        },
        'Blog\Service\BlogServiceInterface' => function(ServiceLocatorInterface $serviceLocator) {
            $blogService = new BlogServiceImplementation();
            $blogService->setPostRepo($serviceLocator->get('Blog\Repository\PostRepositoryInterface'));
            
            return $blogService;
        }
    ]
];
