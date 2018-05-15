<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * centinela
 *
 * @ORM\Table(name="centinela")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\centinelaRepository")
 */
class centinela
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="usuarioid", type="integer")
     */
    private $usuarioid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creado", type="datetime")
     */
    private $creado;

    /**
     * @var string
     *
     * @ORM\Column(name="red", type="string", length=255)
     */
    private $red;

    /**
     * @var int
     *
     * @ORM\Column(name="municipio", type="string", length=255)
     */
    private $municipio;
    
     /**
     * @var int
     *
     * @ORM\Column(name="poblacion", type="string", length=255)
     */
    private $poblacion;
    
    
     /**
     * @var string
     *
     * @ORM\Column(name="mc", type="string", length=255)
     */
    private $mc;
    
    
    
    
    
    
    
    
    /**
     * @var int
     *
     * @ORM\Column(name="semana", type="integer")
     */
    private $semana;

    /**
     * @var int
     *
     * @ORM\Column(name="anyo", type="integer")
     */
    private $anyo;

    /**
     * @var int
     *
     * @ORM\Column(name="edad", type="integer")
     */
    private $edad;

    /**
     * @var int
     *
     * @ORM\Column(name="sexo", type="integer")
     */
    private $sexo;

    /**
     * @var int
     *
     * @ORM\Column(name="antecedentes", type="integer")
     */
    private $antecedentes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inicio", type="date")
     */
    private $inicio;

    /**
     * @var int
     *
     * @ORM\Column(name="aparicion", type="integer")
     */
    private $aparicion;

    /**
     * @var int
     *
     * @ORM\Column(name="tos", type="integer")
     */
    private $tos;

    /**
     * @var int
     *
     * @ORM\Column(name="garganta", type="integer")
     */
    private $garganta;

    /**
     * @var int
     *
     * @ORM\Column(name="disnea", type="integer")
     */
    private $disnea;

    /**
     * @var int
     *
     * @ORM\Column(name="fiebre", type="integer")
     */
    private $fiebre;

    /**
     * @var int
     *
     * @ORM\Column(name="malestar", type="integer")
     */
    private $malestar;

    /**
     * @var int
     *
     * @ORM\Column(name="cefalea", type="integer")
     */
    private $cefalea;

    /**
     * @var int
     *
     * @ORM\Column(name="mialgia", type="integer")
     */
    private $mialgia;

    /**
     * @var int
     *
     * @ORM\Column(name="escalofrio", type="integer")
     */
    private $escalofrio;

    /**
     * @var int
     *
     * @ORM\Column(name="cardiovascular", type="integer")
     */
    private $cardiovascular;

    /**
     * @var int
     *
     * @ORM\Column(name="respiratoria", type="integer")
     */
    private $respiratoria;

    /**
     * @var int
     *
     * @ORM\Column(name="inmunodeficiencia", type="integer")
     */
    private $inmunodeficiencia;

    /**
     * @var int
     *
     * @ORM\Column(name="diabetes", type="integer")
     */
    private $diabetes;

    /**
     * @var int
     *
     * @ORM\Column(name="hepatica", type="integer")
     */
    private $hepatica;

    /**
     * @var int
     *
     * @ORM\Column(name="renal", type="integer")
     */
    private $renal;

    /**
     * @var int
     *
     * @ORM\Column(name="embarazo", type="integer")
     */
    private $embarazo;

    /**
     * @var int
     *
     * @ORM\Column(name="obesidad", type="integer")
     */
    private $obesidad;

    /**
     * @var int
     *
     * @ORM\Column(name="complicaciones", type="integer")
     */
    private $complicaciones;

    /**
     * @var int
     *
     * @ORM\Column(name="derivacion", type="integer")
     */
    private $derivacion;

    /**
     * @var int
     *
     * @ORM\Column(name="muestra", type="integer")
     */
    private $muestra;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set usuarioid
     *
     * @param integer $usuarioid
     *
     * @return centinela
     */
    public function setUsuarioid($usuarioid)
    {
        $this->usuarioid = $usuarioid;

        return $this;
    }

    /**
     * Get usuarioid
     *
     * @return int
     */
    public function getUsuarioid()
    {
        return $this->usuarioid;
    }

    /**
     * Set creado
     *
     * @param \DateTime $creado
     *
     * @return centinela
     */
    public function setCreado($creado)
    {
        $this->creado = $creado;

        return $this;
    }

    /**
     * Get creado
     *
     * @return \DateTime
     */
    public function getCreado()
    {
        return $this->creado;
    }

    /**
     * Set red
     *
     * @param string $red
     *
     * @return centinela
     */
    public function setRed($red)
    {
        $this->red = $red;

        return $this;
    }

    
    
    /**
     * Get red
     *
     * @return string
     */
    public function getRed()
    {
        return $this->red;
    }

    
    /**
     * Set municipio
     *
     * @param int $municipio
     *
     * @return centinela
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return int
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

 
    
    
    
      /**
     * Set poblacion
     *
     * @param int $poblacion
     *
     * @return centinela
     */
    public function setPoblacion($poblacion)
    {
        $this->poblacion = $poblacion;

        return $this;
    }

    /**
     * Get poblacion
     *
     * @return int
     */
    public function getPoblacion()
    {
        return $this->poblacion;
    }
    
    
    
    
    
    
    
    
    /**
     * Set mc
     *
     * @param string $mc
     *
     * @return centinela
     */
    public function setMc($mc)
    {
        $this->mc = $mc;

        return $this;
    }

    
    
    /**
     * Get mc
     *
     * @return string
     */
    public function getMc()
    {
        return $this->mc;
    }

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /**
     * Set semana
     *
     * @param integer $semana
     *
     * @return centinela
     */
    public function setSemana($semana)
    {
        $this->semana = $semana;

        return $this;
    }

    /**
     * Get semana
     *
     * @return int
     */
    public function getSemana()
    {
        return $this->semana;
    }

    /**
     * Set anyo
     *
     * @param integer $anyo
     *
     * @return centinela
     */
    public function setAnyo($anyo)
    {
        $this->anyo = $anyo;

        return $this;
    }

    /**
     * Get anyo
     *
     * @return int
     */
    public function getAnyo()
    {
        return $this->anyo;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     *
     * @return centinela
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return int
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set sexo
     *
     * @param integer $sexo
     *
     * @return centinela
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return int
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set antecedentes
     *
     * @param integer $antecedentes
     *
     * @return centinela
     */
    public function setAntecedentes($antecedentes)
    {
        $this->antecedentes = $antecedentes;

        return $this;
    }

    /**
     * Get antecedentes
     *
     * @return int
     */
    public function getAntecedentes()
    {
        return $this->antecedentes;
    }

    /**
     * Set inicio
     *
     * @param \DateTime $inicio
     *
     * @return centinela
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;

        return $this;
    }

    /**
     * Get inicio
     *
     * @return \DateTime
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * Set aparicion
     *
     * @param integer $aparicion
     *
     * @return centinela
     */
    public function setAparicion($aparicion)
    {
        $this->aparicion = $aparicion;

        return $this;
    }

    /**
     * Get aparicion
     *
     * @return int
     */
    public function getAparicion()
    {
        return $this->aparicion;
    }

    /**
     * Set tos
     *
     * @param integer $tos
     *
     * @return centinela
     */
    public function setTos($tos)
    {
        $this->tos = $tos;

        return $this;
    }

    /**
     * Get tos
     *
     * @return int
     */
    public function getTos()
    {
        return $this->tos;
    }

    /**
     * Set garganta
     *
     * @param integer $garganta
     *
     * @return centinela
     */
    public function setGarganta($garganta)
    {
        $this->garganta = $garganta;

        return $this;
    }

    /**
     * Get garganta
     *
     * @return int
     */
    public function getGarganta()
    {
        return $this->garganta;
    }

    /**
     * Set disnea
     *
     * @param integer $disnea
     *
     * @return centinela
     */
    public function setDisnea($disnea)
    {
        $this->disnea = $disnea;

        return $this;
    }

    /**
     * Get disnea
     *
     * @return int
     */
    public function getDisnea()
    {
        return $this->disnea;
    }

    /**
     * Set fiebre
     *
     * @param integer $fiebre
     *
     * @return centinela
     */
    public function setFiebre($fiebre)
    {
        $this->fiebre = $fiebre;

        return $this;
    }

    /**
     * Get fiebre
     *
     * @return int
     */
    public function getFiebre()
    {
        return $this->fiebre;
    }

    /**
     * Set malestar
     *
     * @param integer $malestar
     *
     * @return centinela
     */
    public function setMalestar($malestar)
    {
        $this->malestar = $malestar;

        return $this;
    }

    /**
     * Get malestar
     *
     * @return int
     */
    public function getMalestar()
    {
        return $this->malestar;
    }

    /**
     * Set cefalea
     *
     * @param integer $cefalea
     *
     * @return centinela
     */
    public function setCefalea($cefalea)
    {
        $this->cefalea = $cefalea;

        return $this;
    }

    /**
     * Get cefalea
     *
     * @return int
     */
    public function getCefalea()
    {
        return $this->cefalea;
    }

    /**
     * Set mialgia
     *
     * @param integer $mialgia
     *
     * @return centinela
     */
    public function setMialgia($mialgia)
    {
        $this->mialgia = $mialgia;

        return $this;
    }

    /**
     * Get mialgia
     *
     * @return int
     */
    public function getMialgia()
    {
        return $this->mialgia;
    }

    /**
     * Set escalofrio
     *
     * @param integer $escalofrio
     *
     * @return centinela
     */
    public function setEscalofrio($escalofrio)
    {
        $this->escalofrio = $escalofrio;

        return $this;
    }

    /**
     * Get escalofrio
     *
     * @return int
     */
    public function getEscalofrio()
    {
        return $this->escalofrio;
    }

    /**
     * Set cardiovascular
     *
     * @param integer $cardiovascular
     *
     * @return centinela
     */
    public function setCardiovascular($cardiovascular)
    {
        $this->cardiovascular = $cardiovascular;

        return $this;
    }

    /**
     * Get cardiovascular
     *
     * @return int
     */
    public function getCardiovascular()
    {
        return $this->cardiovascular;
    }

    /**
     * Set respiratoria
     *
     * @param integer $respiratoria
     *
     * @return centinela
     */
    public function setRespiratoria($respiratoria)
    {
        $this->respiratoria = $respiratoria;

        return $this;
    }

    /**
     * Get respiratoria
     *
     * @return int
     */
    public function getRespiratoria()
    {
        return $this->respiratoria;
    }

    /**
     * Set inmunodeficiencia
     *
     * @param integer $inmunodeficiencia
     *
     * @return centinela
     */
    public function setInmunodeficiencia($inmunodeficiencia)
    {
        $this->inmunodeficiencia = $inmunodeficiencia;

        return $this;
    }

    /**
     * Get inmunodeficiencia
     *
     * @return int
     */
    public function getInmunodeficiencia()
    {
        return $this->inmunodeficiencia;
    }

    /**
     * Set diabetes
     *
     * @param integer $diabetes
     *
     * @return centinela
     */
    public function setDiabetes($diabetes)
    {
        $this->diabetes = $diabetes;

        return $this;
    }

    /**
     * Get diabetes
     *
     * @return int
     */
    public function getDiabetes()
    {
        return $this->diabetes;
    }

    /**
     * Set hepatica
     *
     * @param integer $hepatica
     *
     * @return centinela
     */
    public function setHepatica($hepatica)
    {
        $this->hepatica = $hepatica;

        return $this;
    }

    /**
     * Get hepatica
     *
     * @return int
     */
    public function getHepatica()
    {
        return $this->hepatica;
    }

    /**
     * Set renal
     *
     * @param integer $renal
     *
     * @return centinela
     */
    public function setRenal($renal)
    {
        $this->renal = $renal;

        return $this;
    }

    /**
     * Get renal
     *
     * @return int
     */
    public function getRenal()
    {
        return $this->renal;
    }

    /**
     * Set embarazo
     *
     * @param integer $embarazo
     *
     * @return centinela
     */
    public function setEmbarazo($embarazo)
    {
        $this->embarazo = $embarazo;

        return $this;
    }

    /**
     * Get embarazo
     *
     * @return int
     */
    public function getEmbarazo()
    {
        return $this->embarazo;
    }

    /**
     * Set obesidad
     *
     * @param integer $obesidad
     *
     * @return centinela
     */
    public function setObesidad($obesidad)
    {
        $this->obesidad = $obesidad;

        return $this;
    }

    /**
     * Get obesidad
     *
     * @return int
     */
    public function getObesidad()
    {
        return $this->obesidad;
    }

    /**
     * Set complicaciones
     *
     * @param integer $complicaciones
     *
     * @return centinela
     */
    public function setComplicaciones($complicaciones)
    {
        $this->complicaciones = $complicaciones;

        return $this;
    }

    /**
     * Get complicaciones
     *
     * @return int
     */
    public function getComplicaciones()
    {
        return $this->complicaciones;
    }

    /**
     * Set derivacion
     *
     * @param integer $derivacion
     *
     * @return centinela
     */
    public function setDerivacion($derivacion)
    {
        $this->derivacion = $derivacion;

        return $this;
    }

    /**
     * Get derivacion
     *
     * @return int
     */
    public function getDerivacion()
    {
        return $this->derivacion;
    }

    /**
     * Set muestra
     *
     * @param integer $muestra
     *
     * @return centinela
     */
    public function setMuestra($muestra)
    {
        $this->muestra = $muestra;

        return $this;
    }

    /**
     * Get muestra
     *
     * @return int
     */
    public function getMuestra()
    {
        return $this->muestra;
    }
}

