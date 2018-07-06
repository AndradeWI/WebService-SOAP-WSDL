/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dao;

import entity.Filme;
import java.util.List;
import javax.persistence.EntityManager;
import javax.persistence.Query;

/**
 *
 * @author Rusemberg
 */
public class FilmeDAO extends GenericDAO<Filme, Integer>{
        
        public FilmeDAO() {
            this(PersistenceUtil.getEntityManager());
	}

	public FilmeDAO(EntityManager em) {
            super(em);
	}
        
        public EntityManager getEntityManager(){
            return this.entityManager;
        }
        
        public void resetDataBase(){
            EntityManager em = this.getEntityManager();
            em.getTransaction().begin();
            Query q = em.createQuery("from Filme f");
            
            List<Filme> filmes = q.getResultList();
            for(Filme f: filmes){
                em.remove(f);
            }
            
            System.out.println("CADASTRANDO FILMES ...");
            
            Filme f1 = new Filme("Filme 1", "Rusemberg Tavares", "Estudio 1", "Terror", 2010);
            Filme f2 = new Filme("Filme 2", "Roberto Silva", "Estudio 2", "Comedia", 2012);
            Filme f3 = new Filme("Filme 3", "Severina Pessoa", "Estudio 3", "Terror", 2015);
            Filme f4 = new Filme("Filme 4", "Rusemberg Tavares", "Estudio 1", "Suspense", 2010);
            Filme f5 = new Filme("Filme 5", "Roberto Silva", "Estudio 2", "Comedia", 2002);
            Filme f6 = new Filme("Filme 6", "Aline Morais", "Estudio 4", "Romance", 2005);
            Filme f7 = new Filme("Filme 7", "Rusemberg Tavares", "Estudio 1", "Terror", 2007);
            Filme f8 = new Filme("Filme 8", "Roberto Silva", "Estudio 2", "Comedia", 2012);
            Filme f9 = new Filme("Filme 9", "Rusemberg Tavares", "Estudio 3", "Terror", 2007);
            Filme f10 = new Filme("Filme 10", "Severina Pessoa", "Estudio 1", "Romance", 2010);
            Filme f11 = new Filme("Filme 11", "Roberto Silva", "Estudio 2", "Comedia", 2012);
            Filme f12 = new Filme("Filme 12", "Aline Morais", "Estudio 4", "Romance", 2015);
        
            em.persist(f1);
            em.persist(f2);
            em.persist(f3);
            em.persist(f4);
            em.persist(f5);
            em.persist(f6);
            em.persist(f7);
            em.persist(f8);
            em.persist(f9);
            em.persist(f10);
            em.persist(f11);
            em.persist(f12);
            
            em.getTransaction().commit();
        }
        
        public List<Filme> findTitulo(String titulo){
            titulo = titulo.toLowerCase();
            Query q = this.getEntityManager().createQuery("from Filme f where LOWER(f.titulo) LIKE :titulo");
            q.setParameter("titulo", "%" + titulo + "%");
            
            return q.getResultList();
        }
        
        public List<Filme>findDiretor(String diretor){
            diretor = diretor.toLowerCase();
            Query q = this.getEntityManager().createQuery("from Filme f where LOWER(f.diretor) LIKE :diretor");
            q.setParameter("diretor", "%" + diretor + "%");
            return q.getResultList();
        }
        
        public List<Filme> findGenero(String genero){
            genero = genero.toLowerCase();
            Query q = this.getEntityManager().createQuery("from Filme f where LOWER(f.genero) LIKE :genero");
            q.setParameter("genero", "%" + genero + "%");
            return q.getResultList();
        }
        
        public List<Filme> findAnoLancamento(int ano){
            Query q = this.getEntityManager().createQuery("from Filme f where f.ano_lancamento = :ano");
            q.setParameter("ano", ano);
            return q.getResultList();
        }
        
        
}
