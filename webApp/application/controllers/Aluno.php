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
}
