<?php

function validaCPF(){

    @$n1 = $_GET['n1'];
    @$n2 = $_GET['n2'];
    @$n3 = $_GET['n3'];
    @$n4 = $_GET['n4'];
    @$n5 = $_GET['n5'];
    @$n6 = $_GET['n6'];
    @$n7 = $_GET['n7'];
    @$n8 = $_GET['n8'];
    @$n9 = $_GET['n9'];
    @$n10 = $_GET['n10'];
    @$n11 = $_GET['n11'];

    
    @$soma = ($n1 + $n2 + $n3 + $n4 + $n5 + $n6 + $n7 + $n8 + $n9 + $n10 + $n11);
   // echo "Resultado: $soma";

    // Verificar se o CPF é válido
    if($soma == 10){
        $soma = true;
        echo 'CPF Válido!';
    }elseif($soma == 11){
        $soma = true;
        echo 'CPF Válido!';
    }elseif($soma == 12){
        $soma = true;
        echo 'CPF Válido!';
    }elseif($soma == 21){
        $soma = true;
        echo 'CPF Válido!';
    }elseif($soma == 22){
        $soma = true;
        echo 'CPF Válido!';
    }elseif($soma == 23){
        $soma = true;
        echo 'CPF Válido!';
    }elseif($soma == 32){
        $soma = true;
        echo 'CPF Válido!';
    }elseif($soma == 33){
        $soma = true;
        echo 'CPF Válido!';
    }elseif($soma == 34){
        $soma = true;
        echo 'CPF Válido!';
    }elseif($soma == 43){
        $soma = true;
        echo 'CPF Válido!';
    }elseif($soma == 44){
        $soma = true;
        echo 'CPF Válido!';
    }elseif($soma == 45){
        $soma = true;
        echo 'CPF Válido!';
    }elseif($soma == 54){
        $soma = true;
        echo 'CPF Válido!';
    }elseif($soma == 55){
        $soma = true;
        echo 'CPF Válido!';
    }elseif($soma == 56){
        $soma = true;
        echo 'CPF Válido!';
    }elseif($soma == 65){
        $soma = true;
        echo 'CPF Válido!';
    }elseif($soma == 66){
        $soma = true;
        echo 'CPF Válido!';
    }elseif($soma == 67){
        $soma = true;
        echo 'CPF Válido!';
    }elseif($soma == 76){
        $soma = true;
        echo 'CPF Válido!';
    }elseif($soma == 77){
        $soma = true;
        echo 'CPF Válido!';
    }elseif($soma == 78){
        $soma = true;
        echo 'CPF Válido!';
    }elseif($soma == 87){
        $soma = true;
        echo 'CPF Válido!';
    }elseif($soma == 88){
        $soma = true;
        echo 'CPF Válido!';
    }else{
        $soma = false;
        echo 'CPF não é valido, informe um CPF valido!';
    }

    // Verificar o local de emissão do CPF
    if($n9 == 1){
        $n9 = true;
        echo ' = Emissão: DF, GO, MS e TO';
    }elseif($n9 == 2){
        $n9 = true;
        echo ' = Emissão: PA, AM, AC, AP, RO e RO';
    }elseif($n9 == 3){
        $n9 = true;
        echo ' = Emissão: CE, MA e PI';
    }elseif($n9 == 4){
        $n9 = true;
        echo ' = Emissão: PE, RN, PB e AL';
    }elseif($n9 == 5){
        $n9 = true;
        echo ' = Emissão: Ba e SE';
    }elseif($n9 == 6){
        $n9 = true;
        echo ' = Emissão: MG';
    }elseif($n9 == 7){
        $n9 = true;
        echo ' = Emissão: RJ e ES';
    }elseif($n9 == 8){
        $n9 = true;
        echo ' = Emissão: SP';
    }elseif($n9 == 9){
        $n9 = true;
        echo ' = Emissão: PR e SC';
    }elseif($n9 == 0){
        $n9 = true;
        echo ' = Emissão: RS';
    }else{
        $n9 = false;
        echo ' Não existe emissão para esse CPF!';
    }
    
} 
$resultado = validaCPF();
return $resultado;

?>
