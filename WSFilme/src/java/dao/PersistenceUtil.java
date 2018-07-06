package dao;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;

public class PersistenceUtil {

    private static EntityManagerFactory emf = null;
    private static EntityManager em = null;

    private PersistenceUtil() {
        emf = Persistence.createEntityManagerFactory("WSFilmePU");
        em = emf.createEntityManager();
    }
	
    public static EntityManager getEntityManager() {
        if(em == null){
            new PersistenceUtil();
            return em;
        }
        return em;
    }

}