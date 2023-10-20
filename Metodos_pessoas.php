<?php

//incluindo a classe que criada na pasta "Classes"
include("Classe_do_metodo_pessoas.php");

//instanciando um novo objeto (p1)
$p1 = new Pessoa();

//Atribuindo valores aos atributos
$p1->nome       = "Thell Zardi";
$p1->altura       = 1.65;
$p1->nascimento       = "31-10-2006";
$p1->hobbie       = "jogar";

//imprimindo valores inseridos no objeto (p1) usando echo
echo "nome: ".$p1->nome."<br/>
    Altura: ".$p1->altura."<br/>
    Nascimento: ".$p1->nascimento."<br/>
    Hobbie: ".$p1->hobbie."<br/><br/><hr><br/>";

//Agora vamos imprimir os 2 objeto (p1 e p2) usando o método
//Para isso é preciso criar o (p2) que ainda não foi criado

//Instanciando um novo objeto (p2)
$p2 = new Pessoa();

//Atribuindo valores aos atributos
$p2->nome       = "Samuel Américo";
$p2->altura       = "1.85";
$p2->nascimento       = "26-01-2007";
$p2->hobbie       = "Tocar piano";

//imprimindo valores inseridos no objeto (p2) usando echo
echo "nome: ".$p2->nome."<br/>
    Altura: ".$p2->altura."<br/>
    Nascimento: ".$p2->nascimento."<br/>
    Hobbie: ".$p2->hobbie."<br/><br/><hr><br/>";

//instanciando um novo objeto (p3)
$p3 = new Pessoa();

//Atribuindo valores aos atributos
$p3->nome       = "Beatriz Baccaro";
$p3->altura       = "1.60";
$p3->nascimento       = "02-08-2006";
$p3->hobbie       = "esporte";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p3->nome."<br/>
    Altura: ".$p3->altura."<br/>
    Nascimento: ".$p3->nascimento."<br/>
    Hobbie: ".$p3->hobbie."<br/><br/><hr><br/>";

//instanciando um novo objeto (p4)
$p4 = new Pessoa();

//Atribuindo valores aos atributos
$p4->nome       = "Pedro Grechi";
$p4->altura       = "1.68";
$p4->nascimento       = "23-03-2006";
$p4->hobbie       = "jogar/desenhar";

//imprimindo valores inseridos no objeto (p4) usando echo
echo "nome: ".$p4->nome."<br/>
    Altura: ".$p4->altura."<br/>
    Nascimento: ".$p4->nascimento."<br/>
    Hobbie: ".$p4->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p5)
$p5 = new Pessoa();

//Atribuindo valores aos atributos
$p5->nome       = "Luiz Gustavo";
$p5->altura       = "1.77";
$p5->nascimento       = "06-03-2006";
$p5->hobbie       = "dormir";

//imprimindo valores inseridos no objeto (p5) usando echo
echo "nome: ".$p5->nome."<br/>
    Altura: ".$p5->altura."<br/>
    Nascimento: ".$p5->nascimento."<br/>
    Hobbie: ".$p5->hobbie."<br/><br/><hr><br/>";

//instanciando um novo objeto (p6)
$p6 = new Pessoa();

//Atribuindo valores aos atributos
$p6->nome       = "José Luiz";
$p6->altura       = "1.71";
$p6->nascimento       = "15-03-2006";
$p6->hobbie       = "assistir";

//imprimindo valores inseridos no objeto (p6) usando echo
echo "nome: ".$p6->nome."<br/>
    Altura: ".$p6->altura."<br/>
    Nascimento: ".$p6->nascimento."<br/>
    Hobbie: ".$p6->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p7)
$p7 = new Pessoa();

//Atribuindo valores aos atributos
$p7->nome       = "ryan Silveira";
$p7->altura       = "1.72";
$p7->nascimento       = "02-09-2006";
$p7->hobbie       = "jogar videogame";

//imprimindo valores inseridos no objeto (p7) usando echo
echo "nome: ".$p7->nome."<br/>
    Altura: ".$p7->altura."<br/>
    Nascimento: ".$p7->nascimento."<br/>
    Hobbie: ".$p7->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p8)
$p8 = new Pessoa();

//Atribuindo valores aos atributos
$p8->nome       = "Leticia Gabrielle";
$p8->altura       = "1.65";
$p8->nascimento       = "30-09-2006";
$p8->hobbie       = "Ouvir musica";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p8->nome."<br/>
    Altura: ".$p8->altura."<br/>
    Nascimento: ".$p8->nascimento."<br/>
    Hobbie: ".$p8->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p3)
$p9 = new Pessoa();

//Atribuindo valores aos atributos
$p9->nome       = "Camilly Vitória";
$p9->altura       = "1.60";
$p9->nascimento       = "22-01-2006";
$p9->hobbie       = "Ouvir musica";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p9->nome."<br/>
    Altura: ".$p9->altura."<br/>
    Nascimento: ".$p9->nascimento."<br/>
    Hobbie: ".$p9->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p3)
$p10 = new Pessoa();

//Atribuindo valores aos atributos
$p10->nome       = "Ana clara maciel";
$p10->altura       = "1.50";
$p10->nascimento       = "19-01-2006";
$p10->hobbie       = "ler";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p10->nome."<br/>
    Altura: ".$p10->altura."<br/>
    Nascimento: ".$p10->nascimento."<br/>
    Hobbie: ".$p10->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p3)
$p11 = new Pessoa();

//Atribuindo valores aos atributos
$p11->nome       = "Gustavo Ottaviano";
$p11->altura       = "1.85";
$p11->nascimento       = "04-03-2006";
$p11->hobbie       = "esporte";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p11->nome."<br/>
    Altura: ".$p11->altura."<br/>
    Nascimento: ".$p11->nascimento."<br/>
    Hobbie: ".$p11->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p3)
$p12 = new Pessoa();

//Atribuindo valores aos atributos
$p12->nome       = "Gabriel Credentio";
$p12->altura       = "1.70";
$p12->nascimento       = "28-07-2006";
$p12->hobbie       = "video game";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p12->nome."<br/>
    Altura: ".$p12->altura."<br/>
    Nascimento: ".$p12->nascimento."<br/>
    Hobbie: ".$p12->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p3)
$p13 = new Pessoa();

//Atribuindo valores aos atributos
$p13->nome       = "Henrique Tavares";
$p13->altura       = "1.63";
$p13->nascimento       = "26-07-2006";
$p13->hobbie       = "esporte";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p13->nome."<br/>
    Altura: ".$p13->altura."<br/>
    Nascimento: ".$p13->nascimento."<br/>
    Hobbie: ".$p13->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p3)
$p14 = new Pessoa();

//Atribuindo valores aos atributos
$p14->nome       = "Raí Franca";
$p14->altura       = "1.82";
$p14->nascimento       = "12-09-2006";
$p14->hobbie       = "esporte";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p14->nome."<br/>
    Altura: ".$p14->altura."<br/>
    Nascimento: ".$p14->nascimento."<br/>
    Hobbie: ".$p14->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p3)
$p15 = new Pessoa();

//Atribuindo valores aos atributos
$p15->nome       = "Ana clara";
$p15->altura       = "1.55";
$p15->nascimento       = "12-09-2006";
$p15->hobbie       = "pintar";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p15->nome."<br/>
    Altura: ".$p15->altura."<br/>
    Nascimento: ".$p15->nascimento."<br/>
    Hobbie: ".$p15->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p3)
$p16 = new Pessoa();

//Atribuindo valores aos atributos
$p16->nome       = "Gabriel";
$p16->altura       = "1.84";
$p16->nascimento       = "03-08-2006";
$p16->hobbie       = "esporte";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p16->nome."<br/>
    Altura: ".$p16->altura."<br/>
    Nascimento: ".$p16->nascimento."<br/>
    Hobbie: ".$p16->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p3)
$p17 = new Pessoa();

//Atribuindo valores aos atributos
$p17->nome       = "Kaua lira";
$p17->altura       = "1.63";
$p17->nascimento       = "05-01-2006";
$p17->hobbie       = "tocar guitarra";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p17->nome."<br/>
    Altura: ".$p17->altura."<br/>
    Nascimento: ".$p17->nascimento."<br/>
    Hobbie: ".$p17->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p3)
$p18 = new Pessoa();

//Atribuindo valores aos atributos
$p18->nome       = "Gabriel dias";
$p18->altura       = "1.74";
$p18->nascimento       = "21-03-2006";
$p18->hobbie       = "esporte";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p18->nome."<br/>
    Altura: ".$p18->altura."<br/>
    Nascimento: ".$p18->nascimento."<br/>
    Hobbie: ".$p18->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p3)
$p19 = new Pessoa();

//Atribuindo valores aos atributos
$p19->nome       = "Maria Eduarda";
$p19->altura       = "1.65";
$p19->nascimento       = "02-04-2006";
$p19->hobbie       = "Jogar volei";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p19->nome."<br/>
    Altura: ".$p19->altura."<br/>
    Nascimento: ".$p19->nascimento."<br/>
    Hobbie: ".$p19->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p3)
$p20 = new Pessoa();

//Atribuindo valores aos atributos
$p20->nome       = "Miguel Romero";
$p20->altura       = "1.70";
$p20->nascimento       = "17-04-2006";
$p20->hobbie       = "esporte";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p20->nome."<br/>
    Altura: ".$p20->altura."<br/>
    Nascimento: ".$p20->nascimento."<br/>
    Hobbie: ".$p20->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p3)
$p21 = new Pessoa();

//Atribuindo valores aos atributos
$p21->nome       = "Pedro araujo";
$p21->altura       = "1.68";
$p21->nascimento       = "24-09-2006";
$p21->hobbie       = "videogame";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p21->nome."<br/>
    Altura: ".$p21->altura."<br/>
    Nascimento: ".$p21->nascimento."<br/>
    Hobbie: ".$p21->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p3)
$p22 = new Pessoa();

//Atribuindo valores aos atributos
$p22->nome       = "Natally Reis";
$p22->altura       = "1.60";
$p22->nascimento       = "07-01-2006";
$p22->hobbie       = "esporte";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p22->nome."<br/>
    Altura: ".$p22->altura."<br/>
    Nascimento: ".$p22->nascimento."<br/>
    Hobbie: ".$p22->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p3)
$p23 = new Pessoa();

//Atribuindo valores aos atributos
$p23->nome       = "Laura Perez";
$p23->altura       = "1.70";
$p23->nascimento       = "03-08-2006";
$p23->hobbie       = "ler";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p23->nome."<br/>
    Altura: ".$p23->altura."<br/>
    Nascimento: ".$p23->nascimento."<br/>
    Hobbie: ".$p23->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p3)
$p24 = new Pessoa();

//Atribuindo valores aos atributos
$p24->nome       = "Kaua Silveira";
$p24->altura       = "1.68";
$p24->nascimento       = "02-09-2006";
$p24->hobbie       = "jogar games";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p24->nome."<br/>
    Altura: ".$p24->altura."<br/>
    Nascimento: ".$p24->nascimento."<br/>
    Hobbie: ".$p24->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p3)
$p25 = new Pessoa();

//Atribuindo valores aos atributos
$p25->nome       = "Julia Pombeiro";
$p25->altura       = "1.70";
$p25->nascimento       = "08-11-2006";
$p25->hobbie       = "ouvir musica";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p25->nome."<br/>
    Altura: ".$p25->altura."<br/>
    Nascimento: ".$p25->nascimento."<br/>
    Hobbie: ".$p25->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p3)
$p26 = new Pessoa();

//Atribuindo valores aos atributos
$p26->nome       = "Henrique Nagata";
$p26->altura       = "1.58";
$p26->nascimento       = "25-10-2006";
$p26->hobbie       = "andar de bike";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p26->nome."<br/>
    Altura: ".$p26->altura."<br/>
    Nascimento: ".$p26->nascimento."<br/>
    Hobbie: ".$p26->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p3)
$p27 = new Pessoa();

//Atribuindo valores aos atributos
$p27->nome       = "Giovanna lupo";
$p27->altura       = "1.62";
$p27->nascimento       = "14-05-2006";
$p27->hobbie       = "ler";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p27->nome."<br/>
    Altura: ".$p27->altura."<br/>
    Nascimento: ".$p27->nascimento."<br/>
    Hobbie: ".$p27->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p3)
$p28 = new Pessoa();

//Atribuindo valores aos atributos
$p28->nome       = "Felipe wilbert";
$p28->altura       = "1.78";
$p28->nascimento       = "06-12-2006";
$p28->hobbie       = "esporte";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p28->nome."<br/>
    Altura: ".$p28->altura."<br/>
    Nascimento: ".$p28->nascimento."<br/>
    Hobbie: ".$p28->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p3)
$p29 = new Pessoa();

//Atribuindo valores aos atributos
$p29->nome       = "Camilly Vitoria";
$p29->altura       = "1.60";
$p29->nascimento       = "22-01-2006";
$p29->hobbie       = "esporte";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p29->nome."<br/>
    Altura: ".$p29->altura."<br/>
    Nascimento: ".$p29->nascimento."<br/>
    Hobbie: ".$p29->hobbie."<br/><br/><hr><br/>";

    //instanciando um novo objeto (p3)
$p30 = new Pessoa();

//Atribuindo valores aos atributos
$p30->nome       = "Bruno Alvez";
$p30->altura       = 1.78;
$p30->nascimento       = "28-05-2006";
$p30->hobbie       = "esporte";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p30->nome."<br/>
    Altura: ".$p30->altura."<br/>
    Nascimento: ".$p30->nascimento."<br/>
    Hobbie: ".$p30->hobbie."<br/><br/><hr><br/>";

     //instanciando um novo objeto (p3)
$p31 = new Pessoa();

//Atribuindo valores aos atributos
$p31->nome       = "Beatriz Mayumi";
$p31->altura       = "1.65";
$p31->nascimento       = "03-03-2007";
$p31->hobbie       = "esporte";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p31->nome."<br/>
    Altura: ".$p31->altura."<br/>
    Nascimento: ".$p31->nascimento."<br/>
    Hobbie: ".$p31->hobbie."<br/><br/><hr><br/>";

     //instanciando um novo objeto (p3)
$p32 = new Pessoa();

//Atribuindo valores aos atributos
$p32->nome       = "Beatriz Baccaro";
$p32->altura       = "1.60";
$p32->nascimento       = "02-08-2006";
$p32->hobbie       = "esporte";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p32->nome."<br/>
    Altura: ".$p32->altura."<br/>
    Nascimento: ".$p32->nascimento."<br/>
    Hobbie: ".$p32->hobbie."<br/><br/><hr><br/>";

     //instanciando um novo objeto (p3)
$p33 = new Pessoa();

//Atribuindo valores aos atributos
$p33->nome       = "Ana Clara Ferreira";
$p33->altura       = "1.55";
$p33->nascimento       = "21-03-2006";
$p33->hobbie       = "pintar";

//imprimindo valores inseridos no objeto (p3) usando echo
echo "nome: ".$p33->nome."<br/>
    Altura: ".$p33->altura."<br/>
    Nascimento: ".$p33->nascimento."<br/>
    Hobbie: ".$p33->hobbie."<br/><br/><hr><br/>";

//Agora vamos imprimir os 2 objeto (p1 e p2) usando o método
//Observe que você executa o mesmo método MostrarPessoa() para exibir os dados
echo "abaixo um exemplo pratico do uso de metodos: <br/><br/>";
?>