<?php

namespace Aet\AnnuaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Table(name="user_aet")
 * @ORM\Entity(repositoryClass="Aet\AnnuaireBundle\Entity\UserAetRepository")
 */
class User extends BaseUser
{


    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @var string $firstname
     *
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    protected $firstname;
    /**
     *
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    protected $lastname;
    /**
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    public $path;
    /**
     *Promotion
     * @var
     *
     * @ORM\Column(name="promotion", type="date")
     */
    protected $promotion;
    /**
     *Pays
     * @var
     *
     * @ORM\Column(name="pays", type="string" , length=255)
     */
    protected $pays;
    /**
     * Ville
     * @ORM\Column(name="ville", type="string" , length=255)
     *
     */
    protected $ville;

    /**
     * Code_postale
     * @ORM\Column(name="code_postale", type="string", length=255)
     *
     */
    protected $code_postale;
    /**
     * Telephone
     * @ORM\Column(name="telephone", type="string", length=255)
     * @Assert\Length(
     *      min = "10",
     *      max = "15",
     *      minMessage = "Ce Numero est trop court",
     *      maxMessage = "Ce Numero est trop long"
     * )
     */
    protected $telephone;

    /**
     * situation_familiale
     * @ORM\Column(name="situation_familiale", type="string",nullable=true)
     *
     */
    protected $situation_familiale;

    /**
     *
     * @var text
     *
     * @ORM\Column(name="activite_principale", type="string", nullable=true)
     */
    protected $activite_principale;



    /**
     * whoami
     * @ORM\Column(name="whoami", type="text", nullable=true)
     *
     */
    protected $whoami;
    /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;

    /**
     * Thread of this communication
     *
     * @ORM\OneToOne(targetEntity="Aet\AnnuaireBundle\Entity\AetImage", cascade={"persist", "remove"})
     */
    private $image;

    /**
     *
     * @var boolean
     *
     * @ORM\Column(name="job_search", type="boolean", nullable=true)
     */
    protected $job_search;
    /**
     *
     * @var boolean
     *
     * @ORM\Column(name="apartment_search", type="boolean", nullable=true)
     */
    protected $apartment_search;

    /**
     *
     * @var text
     *
     * @ORM\Column(name="matricule", type="string", nullable=false)
     * @Assert\Length(
     *      min = "5",
     *      max = "5",
     *      minMessage = "Matricule incorrect",
     *      maxMessage = "Matricule incorrect"
     * )
     */
    protected $matricule;
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }


    public function __construct() {
        parent::__construct();
        // your own logic
    }

    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'uploads/documents';
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return User
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }


    /**
     * Set ville
     *
     * @param string $ville
     * @return User
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set code_postale
     *
     * @param integer $codePostale
     * @return User
     */
    public function setCodePostale($codePostale)
    {
        $this->code_postale = $codePostale;

        return $this;
    }

    /**
     * Get code_postale
     *
     * @return integer 
     */
    public function getCodePostale()
    {
        return $this->code_postale;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set situation_familiale
     *
     * @param string $situationFamiliale
     * @return User
     */
    public function setSituationFamiliale($situationFamiliale)
    {
        $this->situation_familiale = $situationFamiliale;

        return $this;
    }

    /**
     * Get situation_familiale
     *
     * @return string 
     */
    public function getSituationFamiliale()
    {
        return $this->situation_familiale;
    }

    /**
     * Set activite_principale
     *
     * @param string $activitePrincipale
     * @return User
     */
    public function setActivitePrincipale($activitePrincipale)
    {
        $this->activite_principale = $activitePrincipale;

        return $this;
    }

    /**
     * Get activite_principale
     *
     * @return string 
     */
    public function getActivitePrincipale()
    {
        return $this->activite_principale;
    }

    /**
     * Set whoami
     *
     * @param string $whoami
     * @return User
     */
    public function setWhoami($whoami)
    {
        $this->whoami = $whoami;

        return $this;
    }

    /**
     * Get whoami
     *
     * @return string 
     */
    public function getWhoami()
    {
        return $this->whoami;
    }

    /**
     * Set job_search
     *
     * @param boolean $jobSearch
     * @return User
     */
    public function setJobSearch($jobSearch)
    {
        $this->job_search = $jobSearch;

        return $this;
    }

    /**
     * Get job_search
     *
     * @return boolean 
     */
    public function getJobSearch()
    {
        return $this->job_search;
    }

    /**
     * Set apartment_search
     *
     * @param boolean $apartmentSearch
     * @return User
     */
    public function setApartmentSearch($apartmentSearch)
    {
        $this->apartment_search = $apartmentSearch;

        return $this;
    }

    /**
     * Get apartment_search
     *
     * @return boolean 
     */
    public function getApartmentSearch()
    {
        return $this->apartment_search;
    }

    
    /**
     * Get expiresAt
     *
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * Get credentials_expire_at
     *
     * @return \DateTime
     */
    public function getCredentialsExpireAt()
    {
        return $this->credentialsExpireAt;
    }
    public function setSalt($salt)
    {
        $this->salt = $salt;
        return $this;
    }

    public function getSalt()
    {
        return $this->salt;
    }



    /**
     * Set image
     *
     * @param \Aet\AnnuaireBundle\Entity\AetImage $image
     * @return User
     */
    public function setImage(\Aet\AnnuaireBundle\Entity\AetImage $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Aet\AnnuaireBundle\Entity\AetImage 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set promotion
     *
     * @param \DateTime $promotion
     * @return User
     */
    public function setPromotion($promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * Get promotion
     *
     * @return \DateTime 
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return User
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;

    }

    /**
     * Set matricule
     *
     * @param string $matricule
     *
     * @return User
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string
     */
    public function getMatricule()
    {
        return $this->matricule;
    }
}
