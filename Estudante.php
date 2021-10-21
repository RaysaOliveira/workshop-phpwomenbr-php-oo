<?php

class Estudante {
    public $matricula;
    public $ira; //índice de rendimento

    public function disciplinasMatriculadas(){
        return 'PHP Orientado a Objetos';
    }

    public function atualizaIra($nota){
        $this->ira += $nota;
        return $this->ira;
    }
}