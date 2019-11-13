<html>
<body>

    
    <?php   
    
    date_default_timezone_set('Europe/Lisbon');
    
    // Dados data Nascimentos
    
    $dataNasc1 = $_POST['dataNasc'];
    $dataNascShow = date('d-m-Y',strtotime($dataNasc1));
    $dataNasc = explode('-',$dataNasc1);
    $dataNascAno = $dataNasc[0];
    $dataNascMes = $dataNasc[1];
    $dataNascDia = $dataNasc[2];
    
    
    //Dados data atual
    
    $dataHoje1 = date('Y-m-d');
    $dataHojeShow = date('d-m-Y',strtotime($dataHoje1));
    $dataHoje = explode('-', $dataHoje1);
    $dataHojeAno = $dataHoje[0];
    $dataHojeMes = $dataHoje[1];
    $dataHojeDia = $dataHoje[2];
    
    
    echo 'A sua data de nascimento é: ', $dataNascShow;
    
    
    echo '<br><br> Hoje é dia: ', $dataHojeShow;
    
    
    //Calculo idade em dias
    
    
    if($dataNascMes > $dataHojeMes){
                
        $idadeAnos = ($dataHojeAno - 1) - $dataNascAno;
        $idadeMes = ((12 - $dataNascMes) + $dataHojeMes);        
        echo '<br><br>Você tem ',$idadeAnos,' Anos,', $idadeMes, ' Meses e ' ;
        
        if( $dataNascDia > $dataHojeDia ){
            
            $idadeDias = (30 - $dataNascDia) + $dataHojeDia;
            echo $idadeDias, ' Dias.';
            
            $diasFinal = ($idadeAnos * 365) + ($idadeMes * 30) + $idadeDias;
            
            echo '<br><br> A sua idade em dias são: ', $diasFinal, ' dias.';
            
        }elseif ( $dataNascDia <= $dataHojeDia ){
            
            $idadeDias = $dataHojeDia - $dataNascDia;
            echo $idadeDias, ' Dias.';
            
            $diasFinal = ($idadeAnos * 365) + ($idadeMes * 30) + $idadeDias;
            
            echo '<br><br> A sua idade em dias são: ', $diasFinal, ' dias.'; 
            
        }else{
            
            echo 'Impossível calcular a sua idade em dias.';
            
        };
        
    }elseif($dataNascMes <= $dataHojeMes){
        
        $idadeAnos = $dataHojeAno - $dataNascAno;
        $idadeMes = $dataHojeMes - $dataNascMes;
        
        echo '<br><br>Você tem ',$idadeAnos,' Anos,', $idadeMes, ' Meses e ' ;
        
        if( $dataNascDia > $dataHojeDia ){
            
            $idadeDias = (30 - $dataNascDia) + $dataHojeDia;
            echo $idadeDias, ' Dias.';
            
            $diasFinal = ($idadeAnos * 365) + ($idadeMes * 30) + $idadeDias;
            
            echo '<br><br> A sua idade em dias são: ', $diasFinal, ' dias.';
            
        }elseif ( $dataNascDia <= $dataHojeDia ){
            
            $idadeDias = $dataHojeDia - $dataNascDia;
            echo $idadeDias, ' Dias.';
            
            $diasFinal = ($idadeAnos * 365) + ($idadeMes * 30) + $idadeDias;
            
            echo '<br><br> A sua idade em dias são: ', $diasFinal, ' dias.'; 
            
        }else{
            
            echo 'Impossível calcular a sua idade em dias.';
            
        };
        
    }else{
        
        echo 'Impossível calcular a sua idade em dias.';
        
    };
    
    
    
    ?>
    
    
    <br>
    <br>
    <a href="index.html">Voltar a tentar</a>
        
</body>
</html>