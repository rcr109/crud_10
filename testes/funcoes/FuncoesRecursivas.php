<?php

$hierarquia = array(array('nome_cargo'=>'CEO',
                        'subordinados'=>array(
                            array('nome_cargo'=>'Diretor Comercial',
                                'subordinados'=>array(
                                    array('nome_cargo'=>'Gerente de vendas'),
                                    array('nome_cargo'=>'Gerente de marketing',
                                        'subordinados'=>array(
                                            array('nome_cargo'=>'Supervisor')
                                        )
                                    )
                                )
                            ),
                            array('nome_cargo'=>'Diretor Financeiro',
                                'subordinados'=>array(
                                    array('nome_cargo'=>'Analista Financeiro',
                                        'subordinados'=>array(
                                            array('nome_cargo'=>'Supervisor',
                                                'subordinados'=>array(
                                                    array('nome_cargo'=>'Operador de crédito')
                                                )
                                            )
                                        )
                                    )
                                )
                            )
                        )
                    ) 
                );

//var_dump($hierarquia);
//echo json_encode($hierarquia);

// montagem de uma lista em HTML com os valores de um vetor multidimensional
function exibeCargos($cargos){
    $html='<ul>';

    foreach($cargos as $cargo){
        $html.='<li>';
        $html.=$cargo['nome_cargo'];
        if(isset($cargo['subordinados']) && (count($cargo['subordinados'])>0)){
            $html.=exibeCargos($cargo['subordinados']); //função se chamando recursivamente com parametro diverso da chamada inicial
        }
        $html.='</li>';
    }
    
    $html.='</ul>';
    return $html;
}

echo exibeCargos($hierarquia);

?>