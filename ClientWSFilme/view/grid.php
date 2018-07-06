  <?php
    if (isset($_POST['busca'])) {
        $busca = $_POST['busca'];
        $tipo = $_POST['tipo'];

         $function = 'consultar';
            $arguments=array(
                             'busca'   => $busca,
                             'tipo' => $tipo     
                            );
            $result = $client->__soapCall($function,array('parameters' => $arguments));
    if (isset($result)) {
        foreach ($result as $key => $filme) {

            if(is_array($filme)){
                 $filmeReverse = array_reverse($filme);
                 json_encode($filmeReverse);
                foreach ($filmeReverse as $key => $value) {
                  echo '<div class="pure-u-1 pure-u-md-1-3">
                        <div class="pricing-table pricing-table-enterprise">
                            <div class="pricing-table-header">
                                <h1>Título: '.$value->titulo.'</h1>
                            </div>

                            <ul class="pricing-table-list">
                                <li>Diretor: '.$value->diretor.'</li>
                                <li>Estúdio: '.$value->estudio.'</li>
                                <li>Gênero: '.$value->genero.'</li>
                                <li>Ana de lançamento: '.$value->ano_lancamento.'</li>
                            </ul>

                           <a href="#editar" data-id=" '.$value->id.'|'.$value->titulo.'|'.$value->diretor.'|'.$value->estudio.'|'.$value->genero.'|'.$value->ano_lancamento.'" class="pure-button button-success" id="btneditar">Editar</a>
                             <a href="#excluir" id="btnexcluir" data-id="'.$value->id.'|'.$value->titulo.'"class="pure-button button-warning">Excluir</a>
                        </div>
                    </div>';
                    } 
                }else{
                      echo '<div class="pure-u-1 pure-u-md-1-3">
                        <div class="pricing-table pricing-table-enterprise">
                            <div class="pricing-table-header">
                                <h1>Título: '.$filme->titulo.'</h1>
                            </div>

                            <ul class="pricing-table-list">
                                <li>Diretor: '.$filme->diretor.'</li>
                                <li>Estúdio: '.$filme->estudio.'</li>
                                <li>Gênero: '.$filme->genero.'</li>
                                <li>Ano de lançamento: '.$filme->ano_lancamento.'</li>
                            </ul>

                           <a href="#editar" data-id="'.$filme->id.'|'.$filme->titulo.'|'.$filme->diretor.'|'.$filme->estudio.'|'.$filme->genero.'|'.$filme->ano_lancamento.'"  class="pure-button button-success" id="btneditar">Editar</a>
                             <a href="#excluir" id="btnexcluir" data-id="'.$filme->id.'|'.$filme->titulo.'"class="pure-button button-warning">Excluir</a>
                        </div>
                    </div>';

                }
            }
        }
        
    }else{ 

       $function = 'consultar';
            $arguments=array(
                             'busca'   => "todos",
                             'tipo' => "todos"      
                            );
            $result = $client->__soapCall($function,array('parameters' => $arguments));
    

      if (isset($result)) {
        foreach ($result as $key => $filme) {

            if(is_array($filme)){
                 $filmeReverse = array_reverse($filme);
                 json_encode($filmeReverse);
                foreach ($filmeReverse as $key => $value) {
                  echo '<div class="pure-u-1 pure-u-md-1-3">
                        <div class="pricing-table pricing-table-enterprise">
                            <div class="pricing-table-header">
                                <h1>Título: '.$value->titulo.'</h1>
                            </div>

                            <ul class="pricing-table-list">
                                <li>Diretor: '.$value->diretor.'</li>
                                <li>Estúdio: '.$value->estudio.'</li>
                                <li>Gênero: '.$value->genero.'</li>
                                <li>Ana de lançamento: '.$value->ano_lancamento.'</li>
                            </ul>

                           <a href="#editar" data-id="'.$value->id.'|'.$value->titulo.'|'.$value->diretor.'|'.$value->estudio.'|'.$value->genero.'|'.$value->ano_lancamento.'" class="pure-button button-success" id="btneditar">Editar</a>
                             <a href="#excluir" id="btnexcluir" data-id="'.$value->id.'|'.$value->titulo.'"class="pure-button button-warning">Excluir</a>
                        </div>
                    </div>';
                    } 
                }else{
                      echo '<div class="pure-u-1 pure-u-md-1-3">
                        <div class="pricing-table pricing-table-enterprise">
                            <div class="pricing-table-header">
                                <h1>Título: '.$filme->titulo.'</h1>
                            </div>

                            <ul class="pricing-table-list">
                                <li>Diretor: '.$filme->diretor.'</li>
                                <li>Estúdio: '.$filme->estudio.'</li>
                                <li>Gênero: '.$filme->genero.'</li>
                                <li>Ano de lançamento: '.$filme->ano_lancamento.'</li>
                            </ul>

                           <a href="#editar" data-id="'.$filme->id.'|'.$filme->titulo.'|'.$filme->diretor.'|'.$filme->estudio.'|'.$filme->genero.'|'.$filme->ano_lancamento.'"  class="pure-button button-success" id="btneditar">Editar</a>
                             <a href="#excluir" id="btnexcluir" data-id="'.$filme->id.'|'.$filme->titulo.'"class="pure-button button-warning">Excluir</a>
                        </div>
                    </div>';

                }
            }
        }
    }
        ?> 