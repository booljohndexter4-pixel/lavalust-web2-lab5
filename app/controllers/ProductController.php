<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->model('ProductModel');
    }

    public function index()
    {
        $data['products'] = $this->ProductModel->get_all();
        $this->call->view('products/index', $data);
    }

    public function create()
    {
        if ($this->io->method() == 'post') {
            $data = [
                'product_name' => $this->io->post('product_name'),
                'description'  => $this->io->post('description'),
                'price'        => $this->io->post('price'),
                'quantity'     => $this->io->post('quantity'),
                'created_at'   => date('Y-m-d H:i:s')
            ];
            $this->ProductModel->create($data);
            redirect('products');
        }

        $this->call->view('products/create');
    }

    public function edit($id)
    {
        if ($this->io->method() == 'post') {
            $data = [
                'product_name' => $this->io->post('product_name'),
                'description'  => $this->io->post('description'),
                'price'        => $this->io->post('price'),
                'quantity'     => $this->io->post('quantity'),
            ];
            $this->ProductModel->update($id, $data);
            redirect('products');
        }

        $data['product'] = $this->ProductModel->get($id);

        if (!$data['product']) {
            echo 'Product not found.';
            return;
        }

        $this->call->view('products/edit', $data);
    }

    public function delete($id)
    {
        $this->ProductModel->delete($id);
        redirect('products');
    }
}