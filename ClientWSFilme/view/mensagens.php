  <?php if (isset($_COOKIE['msg'])) {
              $msg = $_COOKIE['msg'];
                echo '<div class="alerta info" id="mensagem" align="center">'.$msg.'</div>';
                setcookie('msg');
            } ?>

             <?php if (isset($_COOKIE['obj'])) {
                //recebendo o cookie, se ele tiver sido criado
                 $array = $_COOKIE["obj"];
                  $mostra = unserialize($array);
                echo '<div class="alerta info" id="mensagem" align="center">';
             
              foreach ($mostra as $key => $value) {

                  echo "<p>Filme {Título:  $value->titulo  Diretor:  $value->diretor  Gênero:  $value->genero  Estúdio:  $value->estudio  Ano de lançamento:  $value->ano_lancamento} excluído com sucesso</p>";
              }
                echo'</div>';
                setcookie('obj');
            } ?>