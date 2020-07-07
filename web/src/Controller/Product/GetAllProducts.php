<?php

declare(strict_types=1);

namespace App\Controller\Product;

use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Get All Products Controller.
 */
class GetAllProducts extends Base
{
    /**
     * Get all products.
     *
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     */
    public function __invoke($request, $response, $args): Response
    {
        $this->setParams($request, $response, $args);
        $products = $this->productService->getProducts();

        return $this->jsonResponse('success', $products, 200);
    }
}
