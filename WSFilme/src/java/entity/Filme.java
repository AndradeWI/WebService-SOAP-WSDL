/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entity;

import java.io.Serializable;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

/**
 *
 * @author Rusemberg
 */
@Entity
public class Filme implements Serializable {

    private static final long serialVersionUID = 1L;
    @Id
    @Column(name="ID")
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    private Integer id;

    @Column(name="TITULO")
    private String titulo;
    
    @Column(name="DIRETOR")
    private String diretor;
    
    @Column(name="ESTUDIO")
    private String estudio;
    
    @Column(name="GENERO")
    private String genero;
    
    @Column(name="ANO_LANCAMENTO")
    private int ano_lancamento;
    
    
    public Filme(){
        
    }
    public Filme(String titulo, String diretor, String estudio, String genero, int ano_lancamento ){
        this.titulo = titulo;
        this.diretor = diretor;
        this.estudio = estudio;
        this.genero = genero;
        this.ano_lancamento = ano_lancamento;
    }
    
    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }
    
     public String getTitulo() {
        return titulo;
    }

    public void setTitulo(String titulo) {
        this.titulo = titulo;
    }

    public String getDiretor() {
        return diretor;
    }

    public void setDiretor(String diretor) {
        this.diretor = diretor;
    }

    public String getEstudio() {
        return estudio;
    }

    public void setEstudio(String estudio) {
        this.estudio = estudio;
    }

    public String getGenero() {
        return genero;
    }

    public void setGenero(String genero) {
        this.genero = genero;
    }

    public int getAno_lancamento() {
        return ano_lancamento;
    }

    public void setAno_lancamento(int ano_lancamento) {
        this.ano_lancamento = ano_lancamento;
    }

    @Override
    public String toString() {
        return "Filme{" + "id=" + id + ", titulo=" + titulo + ", diretor=" + diretor + ", estudio=" + estudio + ", genero=" + genero + ", ano_lancamento=" + ano_lancamento + '}';
    }
    
    @Override
    public int hashCode() {
        int hash = 0;
        hash += (id != null ? id.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Filme)) {
            return false;
        }
        Filme other = (Filme) object;
        if ((this.id == null && other.id != null) || (this.id != null && !this.id.equals(other.id))) {
            return false;
        }
        return true;
    }

    
    
}
