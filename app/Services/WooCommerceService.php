<?php

namespace App\Services;

use Automattic\WooCommerce\Client;

class WooCommerceService
{ 
    protected $client;

    public function __construct()
    {
        $this->client = new Client(
            env('WOOCOMMERCE_STORE_URL'),
            env('WOOCOMMERCE_CONSUMER_KEY'),
            env('WOOCOMMERCE_CONSUMER_SECRET'),
            [
                'wp_api' => true,
                'version' => 'wc/v3',
                'query_string_auth' => true 
            ]
        );
    }

    public function getProducts($data=[])
    {
        if(!$data) return $this->client->get('products');
        return $this->client->get('products',$data);
    }
    public function getProductsByCategoryId($categoryId)
    {
        return $this->client->get("products",['category' => $categoryId]);       
    }
    public function getProductsByCategorySlug($categorySlug)
    {
        $categories = $this->client->get('products/categories', [
            'slug' => $categorySlug,
            'fields' => 'id',
        ]);       
        
        if (empty($categories)){
            return response()->json(['error' => 'Category not found'], 404);
        }

        $category_id = $categories[0]->id;
        $products = $this->getProductsByCategoryId($category_id );
        return $products;
    }
    public function getProductByID($productId)
    {
        return $this->client->get("products/$productId");
    }
    public function getProductBySlug($productSlug)
    {
        return $this->client->get("products",['slug' => $productSlug]);
    }

    public function updateProductById($productId,$data=[])
    {
        if(count($data) > 0) {
            return $this->client->put("products/$productId", $data);
        } 
        return response()->json(['error' => 'Data empty'], 404);
    }    

    // Thêm các phương thức khác để quản lý sản phẩm, đơn đặt hàng và khách hàng

    public function addProduct($data=[])
    {   
         //dd($data);
         return $this->client->post('products',$data);
        
    }
    public function addProductBatch($data=[])
    {   
         return $this->client->post('products',['create' => $data]);
        
    }
}
