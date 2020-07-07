<?php

declare(strict_types=1);

namespace App\Controller;

use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Default Controller.
 */
class DefaultController extends BaseController
{
    const API_VERSION = '1.0';

    /**
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * Get Help. Expose just for development
     *
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     */
    public function getHelp($request, $response, $args): Response
    {
        $this->setParams($request, $response, $args);
        $url = getenv('APP_DOMAIN');
        $endpoints = [
            'List all products with their master data' => $url . '/api/v1/products',
            'Show a single product with master data and all available prices' => $url . '/api/v1/products/:id',
            'Show a single product price for one product and specific unit' => $url . '/api/v1/products/:id/unit/:id',
            'status' => $url . '/status',
            'this help' => $url . '',
        ];
        $message = [
            'endpoints' => $endpoints,
            'version' => self::API_VERSION,
            'timestamp' => time(),
        ];

        return $this->jsonResponse('success', $message, 200);
    }

    /**
     * Get API Status.
     *
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     */
    public function getStatus($request, $response, $args): Response
    {
        $this->setParams($request, $response, $args);
        $productService = $this->container->get('product_service');
        $db = [
            'products' => count($productService->getProducts()),
        ];
        $status = [
            'db' => $db,
            'version' => self::API_VERSION,
            'timestamp' => time(),
        ];
        return $this->jsonResponse('success', $status, 200);
    }
}
