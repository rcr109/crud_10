<?php



VerificaFaixa(11,1);
IfTernario(3,0);
ImprimeDiaSemana(1);

// EXEMPLO IF
function VerificaFaixa($idade,$ativo){
    if ($ativo == 1){
        echo "<br>";
        $crianca = 12;
        $adulto = 18;
        $idoso = 65;
        echo "Nome Função ==> VerificaFaixa()<br>";
        if ($idade<=$crianca){
            echo "Você é criança.";
        } else if ($idade>$crianca && $idade<$idoso){
            echo "Você é adulto";
        } else if ($idade > $idoso){
            echo "Idoso.";
        }
        echo "<br><br>";
    }else{
        echo "Nome Função ==> VerificaFaixa()______________________________ Status ==> INATIVA<br><br>";
    }
}

// EXEMPLO IF TERNÁRIO
function IfTernario ($idade,$ativo){
    if ($ativo == 1){
        echo "<br>";
        $adulto = 18;
        echo "Nome Função ==> IfTernario()<br>";
        echo ($idade > $adulto)?"Você é adulto":"Você é menor de idade";
        echo "<br><br>";
    } else {
        echo "Nome Função ==> IfTernario()______________________________ Status ==> INATIVA<br><br>";
    }
}

// EXEMPLO SWITCH
function ImprimeDiaSemana ($ativo){

    if ($ativo==1){
        //$diasemana = date("w");
        $diasemana = 9;
        //var_dump($diasemana);
        echo "Nome Função ==> ImprimeDiaSemana()<br>";
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
        echo "Nome Função ==> ImprimeDiaSemana()______________________________ Status ==> INATIVA<br><br>";
    }






}


?>