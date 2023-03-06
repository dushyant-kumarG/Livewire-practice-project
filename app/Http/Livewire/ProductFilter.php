<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Catalogs;


class ProductFilter extends Component
{

    public $products;
    public $name;
    public $price;
    public $brand;
    public $sku;
    public $size;

    public function mount()
    {
        $this->products = Catalogs::select('id_product', 'name', 'price', 'brand', 'sku', 'size')->get()->take(10);
    }

    public function render()
    {
        return view('livewire.product-filter');
    }

    public function searching()
    {
        try{
            dd('hello');
           
        }catch(\Exception $exception){

            dd($exception->getMessage());
        } 
        
        // $product = Catalogs::all();
        // dd($product);
        // if(!empty($this->name))
        // {

        //   $$product = $product->where('name','like', '%'.$this->name.'%'); 

        // }
        // $this->products = $product->get();
    }
}
