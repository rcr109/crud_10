<?php

VerificaFaixa(11,0); //Exemplo de IF
IfTernario(3,0); // Exemplo de IF TERNÁRIO
ImprimeDiaSemana(0);  //Exemplo de SWITCH
Contador(4,500,0); // Exemplo de FOR
GeraSelect(4,500,0); // Exemplo de GERAÇÃO DE SELECT (COMBOBOX)
ListaMeses(4,0); // Exemplo do FOREACH
ImprimeAteAchar(0); // Exemplo do WHILE

























// EXEMPLO IF
function VerificaFaixa($idade,$ativo){
    if ($ativo == 1){
        echo "<br>";
        $crianca = 12;
        $adulto = 18;
        $idoso = 65;
        echo "Nome Função ==> VerificaFaixa() linha 36 = Exemplo de IF<br>";
        if ($idade<=$crianca){
            echo "Você é criança.";
        } else if ($idade>$crianca && $idade<$idoso){
            echo "Você é adulto";
        } else if ($idade > $idoso){
            echo "Idoso.";
        }
        echo "<br><br>";
    }else{
        echo "Nome Função ==> VerificaFaixa()  linha 36 = Exemplo de IF______________________________ Status ==> INATIVA<br><br>";
    }
}

// EXEMPLO IF TERNÁRIO
function IfTernario ($idade,$ativo){
    if ($ativo == 1){
        echo "<br>";
        $adulto = 18;
        echo "Nome Função ==> IfTernario() linha 57 = Exemplo de IF TERNÁRIO<br>";
        echo ($idade > $adulto)?"Você é adulto":"Você é menor de idade";
        echo "<br><br>";
    } else {
        echo "Nome Função ==> IfTernario()  linha 57 = Exemplo de IF TERNÁRIO______________________________ Status ==> INATIVA<br><br>";
    }
}

// EXEMPLO SWITCH
function ImprimeDiaSemana ($ativo){
    if ($ativo==1){
        //$diasemana = date("w");
        $diasemana = 9;
        //var_dump($diasemana);
        echo "Nome Função ==> ImprimeDiaSemana() linha 70 = Exemplo de SWITCH<br>";
        switch($diasemana){
            case 0:
                echo "O dia da semana é Domingo"; 
            break;
            case 1:
                echo "O dia da semana é Segunda";
            break;
            case 2:
                echo "O dia da semana é Terça";
            break;
            case 3:
                echo "O dia da semana é Quarta";
            break;    
            case 4:
                echo "O dia da semana é Quinta";
            break;
            case 5:
                echo "O dia da semana é Sexta";
            break;
            case 6:
                echo "O dia da semana é Sábado";
            break;
            default: echo "Data inválida";
        }
        echo "<br><br>";
    } else {
        echo "Nome Função ==> ImprimeDiaSemana()  linha 70 = Exemplo de SWITCH______________________________ Status ==> INATIVA<br><br>";
    }
}

//EXEMPLO FOR
function Contador($intervalo, $numloops, $ativo){
    if ($ativo==1){
        $vezes = 0;
        $soma = 0;
        for ($i=0; $i<$numloops; $i+=$intervalo){
            $soma = $soma+$intervalo;
            $vezes++;
        }
        echo "Nome Função ==> Contador() linha 106 = Exemplo de FOR<br>";
        echo "O contador rodou $vezes vezes, computou uma soma igual a $soma com intervalos de $intervalo unidades.";
        echo "<br><br>";
    } else {
        echo "Nome Função ==> Contador()  linha 106 = Exemplo de FOR______________________________ Status ==> INATIVA<br><br>";
    }
}

//EXEMPLO CRIAÇÃO DINÂMICA DE UM SELECT
function GeraSelect($intervalo,$numloops,$ativo){
    if ($ativo==1){
        echo "Nome Função ==> GeraSelect() linha 122 = Exemplo de FOR e CRIAÇÃO DINÂMICA DE UM SELECT<br>";
        echo "<select>";
        for ($i = date("Y"); $i >= date("Y")-100;$i--){
            echo '<option value="'.$i.'">'.$i.'</option>';
        }
        echo "</select>";
    } else {
        echo "Nome Função ==> GeraSelect()  linha 122 = Exemplo de FOR e CRIAÇÃO DINÂMICA DE UM SELECT______________________________ Status ==> INATIVA<br><br>";
    }
}

//EXEMPLO FOREACH
function ListaMeses($nummeses, $ativo){
    if ($ativo==1){
        echo "Nome Função ==> ListaMeses() linha 135 = Exemplo do FOREACH<br>";
        $meses = array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
        //var_dump($meses);
        $i=0;
        foreach($meses as $mes){
            $i++;
            echo $i." - ".$mes."<br>";
        }
    } else {
        echo "Nome Função ==> ListaMeses()  linha 135 = Exemplo do FOREACH______________________________ Status ==> INATIVA<br><br>";
    }

}

//EXEMPLO WHILE
function ImprimeAteAchar($ativo){
    if ($ativo){
        echo "Nome Função ==> ImprimeAteAchar() linha 151 = Exemplo do WHILE<br>";
        echo "<h3>Número escolhido por você: </h3><input type=text name=numero>";
        echo "<h3>Números para considerar na geração randômica: </h3><input type=text name=possibilidades>";
        echo "<input type=submit value=OK>";
        if(isset($_GET['numero'])){
            
            foreach($_GET as $key => $value){
                if($key=="numero"){
                    $numero = $value;
                }
                if($key=="possibilidades"){
                    $possibilidades = $value;
                }
            }
            $gerado = $gerado = rand(1,100);
            while ($numero != $gerado){
                $gerado = rand(1,100);
                echo $gerado."<br>";
                echo $numero."<br>";
            }
        }

    }else {
        echo "Nome Função ==> ImprimeAteAchar()  linha 151 = Exemplo do WHILE______________________________ Status ==> INATIVA<br><br>";
    }
}








?>