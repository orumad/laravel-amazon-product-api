<?php

namespace Revolution\Amazon\ProductAdvertising;

use ApaiIO\Operations\OperationInterface;

interface AmazonClientInterface
{
    /**
     * @param OperationInterface $operation
     *
     * @return array
     */
    public function run(OperationInterface $operation): array;

    /**
     * @param string $category
     * @param string $keyword
     * @param int    $page
     *
     * @return array
     */
    public function search(string $category, string $keyword = null, int $page = 1): array;

    /**
     * @param string $node
     *
     * @return array
     */
    public function browse(string $node): array;

    /**
     * @param string $asin
     *
     * @return array
     */
    public function item(string $asin): array;

    /**
     * @param array $asin
     *
     * @return array
     */
    public function items(array $asin): array;
}
