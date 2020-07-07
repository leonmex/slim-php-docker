<?php

declare(strict_types=1);

namespace App\Repository;

use App\Exception\ProductException;
use App\Repository\BaseFileRepository;
use Nette\Neon\Exception;

/**
 * Price File Repository.
 */
class ProductRepository extends BaseFileRepository
{

    /**
     * @var string
     */
    private $priceFile;

    /**
     * @var string
     */
    private $productFile;


    public function __construct()
    {
        $this->priceFile = 'prices.json';
        $this->productFile = 'products.xml';
    }

    /**
     * Check if the Product exists.
     *
     * @param int|string $productSku
     * @return object
     * @throws AnimalException
     */
    public function checkAndGetProduct($productSku)
    {

        //TODO return warning if the product dont exist.
    }

    /**
     * Get all Products.
     *
     * @return iterator|null
     */
    public function getProducts(): ?array
    {
        $products = $this->readXmlFile($this->productFile);
        if (empty($products['Products'])) {
            throw new ProductException('Products Empty', 204);
        }

        return $products['Products'];
    }
}
