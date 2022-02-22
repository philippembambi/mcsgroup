<?php
namespace App\Utilities;
use App\Models\Category as Categories;

class Category{

    public $data;

    public function __construct()
    {
        $categories = Categories::all();
        $this->data = $categories;
    }

}
?>
