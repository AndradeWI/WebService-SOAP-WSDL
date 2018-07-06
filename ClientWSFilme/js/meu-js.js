  setTimeout(function() {
            $('#mensagem').fadeOut('fast');
        }, 9000);

        $(document).on("click", "#btneditar", function () {
        var info = $(this).attr('data-id');
        var str = info.split('|');
         var id = str[0]; 
         var titulo = str[1];
         var diretor = str[2];
         var estudio = str[3];
         var genero = str[4];
         var ano_lancamento = str[5];
        $(".pure-form #id").val(id);
        $(".pure-form #titulo").val(titulo);
        $(".pure-form #diretor").val(diretor);
        $(".pure-form #estudio").val(estudio);
        $(".pure-form #genero").val(genero);
        $(".pure-form #ano_lancamento").val(ano_lancamento);

    });

      $(document).on("click", "#btnexcluir", function () {
        var info = $(this).attr('data-id');
        var str = info.split('|');
         var id = str[0]; 
         var titulo = str[1];
        $(".pure-form #id").val(id);
        $( "div.demo-container" )
         .html( "<p>Deseja realmente excluir. <em>"+titulo+"?</em></p>" );
        }); 