<div class="l-content">
    <div class="information">
        <form class="pure-form" action="salvar" method="post" >
            <legend style="text-align: center;" ><h1>Editar Filme</h1></legend>
                <fieldset>
                    <div class="pure-control-group" style="margin-top: 10px">
                        <label for="titulo">Título:</label>
                        <input id="titulo" class="pure-input-2-3" type="text" name="titulo" placeholder="Título" required >
                    </div>

                   <div class="pure-control-group" style="margin-top: 10px">
                        <label for="diretor">Diretor:</label>
                        <input id="diretor" class="pure-input-2-3" type="text" name="diretor" placeholder="Diretor" disabled>
                    </div>
                    <div class="pure-control-group" style="margin-top: 10px">
                        <label for="estudio">Estúdio:</label>
                        <input id="estudio" class="pure-input-2-3" type="text" name="estudio" placeholder="Estúdio" disabled>
                    </div>

                    <div class="pure-control-group" style="margin-top: 10px">
                        <label for="genero">Gênero:</label>
                        <input id="genero" class="pure-input-1-3" type="text" name="genero" placeholder="Gênero" disabled>
                    </div>
                    <div class="pure-control-group" style="margin-top: 10px">
                        <label for="ano_lancamento">Ano de Lançamento:</label>
                        <input id="ano_lancamento" class="pure-input-1-3" type="text" name="ano_lancamento" placeholder="Ano de Lançamento" disabled>
                    </div>

                    <div class="pure-controls" style="margin-top: 10px">
                        <hr>
                        <button type="submit" class="pure-button button-success">Salvar</button>
                         <a href="#close" class="pure-button button-warning">Cancelar</a>
                    </div>
                </fieldset>
                 <input type="hidden" id="id" name="id" required >
                 <input type="hidden" id="op" name="op" value="editar">
        </form>
    </div>
</div> <!-- end l-content -->

