<?php

declare(strict_types=1);

use App\Service\ProductService;
use App\Service\UserService;
use App\Service\TaskService;
use App\Repository\ProductRepository;
use App\Repository\UserRepository;
use App\Repository\TaskRepository;
use App\Handler\ApiError;

$container = $app->getContainer();

/**
 * @return ApiError
 */
$container['errorHandler'] = function () {
    return new ApiError;
};

/**
 * @param ContainerInterface $container
 * @return UserService
 */
$container['user_service'] = function ($container) {
    return new UserService($container->get('user_repository'));
};

/**
 * @param ContainerInterface $container
 * @return UserRepository
 */
$container['user_repository'] = function ($container) {
    return new UserRepository($container->get('db'));
};

/**
 * @param ContainerInterface $container
 * @return TaskService
 */
$container['task_service'] = function ($container) {
    return new TaskService($container->get('task_repository'));
};

/**
 * @param ContainerInterface $container
 * @return ProductService
 */
$container['product_service'] = function ($container) {
    return new ProductService($container->get('product_repository'));
};

/**
 * @param ContainerInterface $container
 * @return ProductRepository
 */
$container['product_repository'] = function ($container) {
    return new ProductRepository();
};
