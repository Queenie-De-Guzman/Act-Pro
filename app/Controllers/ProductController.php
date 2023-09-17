<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class ProductController extends BaseController
{      
    private $product;
    public function __construct()
    {
        $this->product = new \App\Models\ProductModel();
    }
    

    public function product($product)
    {
        echo $product;
    }
    public function Kweng11()
    {
        $data['product'] = $this->product->findAll();
        return view ('products', $data);
    }
    public function save($id = null){

        $id =$_POST['id'];
        $data = [
            'code' => $this->request->getVar('code'),
            'name' => $this->request->getVar('name'),
            'quantity' => $this->request->getVar('quantity'),
            
        ];
        if($id!= null)
        {
            $this->product->set($data)->where('id',$id)->update();
        }else
        {
        $this->product->save($data);
        }
        return redirect()->to('/product');
    }
    public  function delete($id){
        $product= new ProductModel();
        $record = $product->find($id);
      

        if($record){
            $product->delete($id);
            return redirect()->to('/product');
        }else{
            return "Record not found";
        }
        
    }

    public function edit($id)
    {   $data=
    [
      'product' => $this->product->findAll(),
      'pro'=> $this->product->where('id',$id)->first(),
    ];
    return view('/products',$data);
   }
     public function index()
    {

    }
}
