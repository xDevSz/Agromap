<?php
require_once '../App/Libraries/Controller.php';

class Usuarios extends Controller {
    public function login() {
        $this->view('login1');
    }

    public function cadastro() {
        $this->view('cadastro');
    }

    public function home() {
        $this->view('home');
    }

    public function entrar() {
        $this->view('entrar');
    }

    public function plantio() {
        $this->view('plantio');
    }

    public function cotacao() {
        $this->view('cotacao');
    }

    public function maquinario() {
        $this->view('maquinario');
    }

    public function vacinacao() {
        $this->view('vacinacao');
    }

    public function estoque() {
        $this->view('estoque');
    }

    public function perfil() {
        $this->view('perfil');
    }
}
