<?php
    Class Pessoa {

        public $nome;
        public $altura;
        public $nascimento;
        public $hobbie;

        //agora abaixo será criado um método para a classe Pessoa, que trabalhará com as propriedades do objeto.
        //O método terá o nome MostrarPessoa() e basicamente servirá para mostrar os dados do objeto.
        //lembre-se que método age dentro do escopo de classe.

        public function MostrarPessoa(){
            echo "Nome: ".$this->nome."<br/>";
            echo "altura: ".$this->altura."<br/>";
            echo "Nascimento: ".$this->nascimento."<br/>";
            echo "Hobbie: ".$this->hobbie."<br/>";
        }

    //Temos um novo conceito apresentado acima.
    //Trata-se da pseudo-variável $this, que serve basicamente para diferenciar as propriedades do objeto de variáveis locais.
    //Lembre-se, $this referencia o objeto ATUAL e acessa suas propriedades
    }
?>