<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Products extends CI_Controller {
/**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function__construct(){
//load database in autoload libraries 
      parent::__construct();
$this->load->model('ProductsModel');
}
   public functionindex()
{
$products=new ProductsModel;
$data['data']=$products->get_products();
$this->load->view('includes/header');
$this->load->view('products/list',$data);
$this->load->view('includes/footer');
}
   public functioncreate()
{
$this->load->view('includes/header');
$this->load->view('products/create');
$this->load->view('includes/footer');
}
/**
    * Store Data from this method.
    *
    * @return Response
   */
   public functionstore()
{
$products=new ProductsModel;
$products->insert_product();
redirect(base_url('products'));
}
/**
    * Edit Data from this method.
    *
    * @return Response
   */
   public functionedit($id)
{
$product=$this->db->get_where('products',array('id'=>$id))->row();
$this->load->view('includes/header');
$this->load->view('products/edit',array('product'=>$product));
$this->load->view('includes/footer');
}
/**
    * Update Data from this method.
    *
    * @return Response
   */
   public functionupdate($id)
{
$products=new ProductsModel;
$products->update_product($id);
redirect(base_url('products'));
}
/**
    * Delete Data from this method.
    *
    * @return Response
   */
   public functiondelete($id)
{
$this->db->where('id',$id);
$this->db->delete('products');
redirect(base_url('products'));
}
}
?>