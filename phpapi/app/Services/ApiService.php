<?php
namespace App\Services;

class ApiService
{
    public function JsonEncode($data) {
      return json_encode($data);
    }
    
}