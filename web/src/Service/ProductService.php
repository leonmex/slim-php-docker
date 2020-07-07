<?php

declare(strict_types=1);

namespace App\Service;

use App\Exception\ProductException;
use App\Repository\ProductRepository;

/**
 * Animal Service.
 */
class ProductService extends BaseService
{
    /**
     * @var ProductRepository
     */
    protected $productRepository;

    /**
     * @param ProductRepository $peoductRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @return ProductRepository
     */
    protected function getProductRepository()
    {
        return $this->peoductRepository;
    }

    /**
     * Check if the product exists.
     *
     * @param string $productSku
     * @return object
     */
    protected function checkAndGetProduct($productSku)
    {
        return $this->getProductRepository()->checkAndGetProduct($productSku);
    }

    /**
     * Get all products.
     *
     * @return array
     */
    public function getProducts()
    {
        return $this->productRepository->getProducts();
    }

    /**
     * Get product by id.
     *
     * @param int $productId
     * @return object
     */
    public function getProduct($productId)
    {
        return $this->getProductRepository()->getProduct($productId);
    }

}
