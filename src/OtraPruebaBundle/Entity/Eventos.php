<?php

namespace OtraPruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eventos
 *
 * @ORM\Table(name="eventos")
 * @ORM\Entity(repositoryClass="OtraPruebaBundle\Repository\EventosRepository")
 */
class Eventos
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
     * @var string
     *
     * @ORM\Column(name="nombreEvento", type="string", length=255)
     */
    private $nombreEvento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

      /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", length=255)
     */
    private $ciudad;

      /**
     * @var string
     *
     * @ORM\Column(name="poblacion", type="string", length=64)
     */
    private $poblacion;


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
     * Set nombreEvento
     *
     * @param string $nombreEvento
     *
     * @return Eventos
     */
    public function setNombreEvento($nombreEvento)
    {
        $this->nombreEvento = $nombreEvento;

        return $this;
    }

    /**
     * Get nombreEvento
     *
     * @return string
     */
    public function getNombreEvento()
    {
        return $this->nombreEvento;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Eventos
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     *
     * @return Eventos
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set poblacion
     *
     * @param string $poblacion
     *
     * @return Eventos
     */
    public function setPoblacion($poblacion)
    {
        $this->poblacion = $poblacion;

        return $this;
    }

    /**
     * Get poblacion
     *
     * @return string
     */
    public function getPoblacion()
    {
        return $this->poblacion;
    }
}
