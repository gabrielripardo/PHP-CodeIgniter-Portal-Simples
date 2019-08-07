<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exemplo1 extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Exemplo1_model');
        
    }
    
	public function index(){
        //método padrão do controller
        //echo 'executado método index do controller';        
        $dados['titulo'] = 'View: exemplo1';
        $dados['conteudo'] = 'anything';
        $this->load->view('exemplo1', $dados);
    }
    
    public function login(){
        //echo 'executado método login do controller e passando parâmetro';
        //echo $this->uri->segment(3);
        $this->Exemplo1_model->salvar();
    }
}


/*
- Abrir controler principal
    http://localhost/site_com_php+codeginiter/

- Invocar o método login: 
    http://localhost/site_com_php+codeginiter/index.php/exemplo1/login

- Abrir controler específico:
    http://localhost/site_com_php+codeginiter/index.php/exemplo1

*/