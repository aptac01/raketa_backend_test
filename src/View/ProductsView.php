<?php

namespace Raketa\BackendTestTask\View;

use Raketa\BackendTestTask\Domain\Product;
use Raketa\BackendTestTask\Repository\ProductRepository;

readonly class ProductsView
{
    public function __construct(
        private ProductRepository $productRepository
    ) {
    }

    public function toArray(string $category): array
    {
        return $this->productRepository->getByCategory($category);
    }
}
