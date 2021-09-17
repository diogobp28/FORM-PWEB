<?php

	class Usuario{
		private $nome;
		private $user;
		private $telefone;
		private $senha;
		
		function __construct($nome, $usuario, $telefone, $senha){
			$this->nome = $nome;
			$this->user = $usuario;
			$this->telefone = $telefone;
			$this->senha = $senha;
			
		}
		
		public function getNome(){
			return $this->nome;
		}
		public function setNome($valor){
			$this->name = $valor;
		}
        
        public function getUser(){
			return $this->user;
		}
        public function setUser($valor){
			$this->usuario = $valor;
		}
		
        public function getTelefone(){
			return $this->telefone;
		}
        public function setTelefone($valor){
			$this->email = $valor;
		}
		
        public function getSenha(){
			return $this->senha;
		}
		public function setSenha($valor){
			$this->senha = $valor;
        }

	}
	
?>