package ws;

import dao.FilmeDAO;
import entity.Filme;
import exception.ErroTipoException;
import exception.NaoEncontradoException;
import java.util.List;
import javax.jws.WebService;
import javax.jws.WebMethod;
import javax.jws.WebParam;
import javax.persistence.EntityManager;


/**
 *
 * @author Rusemberg e Wanderson
 */
@WebService(serviceName = "WSFilmes")
public class WSFilmes {
    EntityManager em_current = null;
    public WSFilmes(){
        
    }
    
    @WebMethod(operationName = "cadastrar")
    public String cadastrarFilme(@WebParam(name = "titulo")String titulo, 
                                 @WebParam(name = "diretor")String diretor, 
                                 @WebParam(name = "estudio")String estudio, 
                                 @WebParam(name = "genero")String genero, 
                                 @WebParam(name = "ano_lancamento")int ano_lancamento ){
        

        Filme f = new Filme(titulo, diretor, estudio, genero, ano_lancamento);
        FilmeDAO filme_dao = new FilmeDAO();
        filme_dao.beginTransaction();
        filme_dao.insert(f);
        filme_dao.commit();

        return "Filme cadastrado com sucesso: "+f;
    }
    
    @WebMethod(operationName="alterarNome")
    public String alterarNomeFilme(@WebParam(name="nome")String nome, @WebParam(name="id")int idFilme){
        FilmeDAO filme_dao = new FilmeDAO();
        Filme f = filme_dao.find(idFilme);
        if(f != null){
            f.setTitulo(nome);
            filme_dao.beginTransaction();
            filme_dao.update(f);
            filme_dao.commit();
            return "Nome de filme alterado com sucesso!";
        }
        return "Nome de filme não pode ser alterado, pois id de filme informado não existe cadastrado no sistema"; 
    }
    
    @WebMethod(operationName="consultar")
    public List<Filme> consultarFilme(@WebParam(name="busca")String busca, @WebParam(name="tipo")String tipo)
    throws ErroTipoException, NumberFormatException{
        List<Filme> filmes = null;
        FilmeDAO filme_dao = new FilmeDAO();
        
        try{
            switch(tipo){
                case "titulo": 
                    filmes = filme_dao.findTitulo(busca);
                    break;
                case "diretor": 
                    filmes = filme_dao.findDiretor(busca);
                    break;
                case "genero": 
                    filmes = filme_dao.findGenero(busca);
                    break;
                case "ano_lancamento": 
                    int ano = Integer.parseInt(busca);
                    filmes = filme_dao.findAnoLancamento(ano);
                    break;
                case "todos": 
                    filmes = filme_dao.findAll();
                    break;
                    
                default: 
                    System.out.println("Opção inválida");
                    break;
            }
        }catch(NumberFormatException e){
            System.out.println(e.getMessage());
        }
        
        return filmes;
    }
    
    @WebMethod(operationName="excluir")
    public Filme excluirFilme(@WebParam(name="id")int id)
        throws NaoEncontradoException, NumberFormatException{
        Filme f = null;
        try{
            FilmeDAO filme_dao = new FilmeDAO();
            f = filme_dao.find(id);
            if(f != null){
                filme_dao.beginTransaction();
                filme_dao.delete(f);
                filme_dao.commit();
            }else{
                throw new NaoEncontradoException("Filme não pôde ser excluído, pois id de filme informado não existe cadastrado no sistema!");
            }
        }catch(NaoEncontradoException e){
            System.out.println(e.getMessage());
        }
        return f;
    }
    
   
}

