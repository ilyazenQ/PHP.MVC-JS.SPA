<?php

namespace App\Models;

class Product extends Model
{

    public function firstTenProducts() {

        $query = 'SELECT `id`,`product_code`,`product_name`,`list_price`,`category` FROM `products`
        ORDER BY `id` ASC LIMIT 10';
        $stmt = $this->db->query($query);
        return $stmt->fetchAll();

    }
    public function lastTenProducts() {

        $query = 'SELECT `id`,`product_code`,`product_name`,`list_price`,`category` FROM `products`
        ORDER BY `id` DESC LIMIT 10';
        $stmt = $this->db->query($query);
        return $stmt->fetchAll();

    }
  

}