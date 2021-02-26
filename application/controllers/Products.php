<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Products extends CI_Controller {


public function __construct() {
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->model('Cruds_models');
      $this->load->database();         
   }

   public function index()
   {
       $products=new Cruds_models;
       $data['data']=$products->get_products();
       $this->load->view('includes/header');       
       $this->load->view('products/list',$data);
       $this->load->view('includes/footer');
   }

   public function create()
   {
      $this->load->view('includes/header');
      $this->load->view('products/create');
      $this->load->view('includes/footer');      
   }

   public function store()
   {
       $products=new Cruds_models;
       $products->insert_product();
       redirect(base_url('products'));
    }
    public function edit($id)
    {
        $product = $this->db->get_where('crud', array('id' => $id))->row();
        $this->load->view('includes/header');
        $this->load->view('products/edit',array('product'=>$product));
        $this->load->view('includes/footer');   
    }
    public function update($id)
    {
        $products=new Cruds_models;
        $products->update_product($id);
        redirect(base_url('products'));
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('crud');
        redirect(base_url('products'));
    }
}
?>