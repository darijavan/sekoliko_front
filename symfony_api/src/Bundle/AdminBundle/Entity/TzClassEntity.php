<?php
/**
 * Created by PhpStorm.
 * User: Predator
 * Date: 17/11/2018
 * Time: 19:59
 */

namespace Bundle\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * TzEtablissement
 *
 * @ORM\Table(name="tz_classe")
 * @ORM\Entity(repositoryClass="Bundle\AdminBundle\Repository\TzClasseRepository")
 */
class TzClassEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @JMS\Groups({"classe_etd"})
     * @JMS\SerializedName("id")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="classe_description", type="string", length=80, nullable=false)
     * @JMS\Groups({"classe_etd"})
     */
    private $description;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


}