<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends CI_Controller {


	public function index()
	{
		// carregamento do model
		$this->load->model('alunoModel','alunos');

		$data['alunos']= $this->alunos->getAlunos();

		$this->load->view('listarAlunos',$data);
	}

	//Página de adicionar aluno
	public function add()
	{	
		//Carrega o Model Alunos				
		$this->load->model('alunoModel', 'alunos');					
		//Carrega a View
		$this->load->view('addAluno');
	}
}
