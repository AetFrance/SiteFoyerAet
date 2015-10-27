<?php

namespace Aet\CommunicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Image
 *
 * @ORM\Table(name="aet_communication_image")
 * @ORM\Entity(repositoryClass="Aet\CommunicationBundle\Entity\ImageRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Image
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

  /**
   * @var
   * @Assert\File(maxSize="6000000")
   */
	private $file;

  protected $defaultFileName = "defaultComImg.png";
  protected $defaultAlt = "Default communication image";
  protected $defaultImageRootDir = 'bundles/aetcommunication/images';
  protected $defaultRootDir = 'uploads/img/communicationImg';
	
	// On ajoute cet attribut pour y stocker le nom du fichier temporairement
  private $tempFilename;

  private $resetImage;
  
  public function getFile()
  {
    return $this->file;
  }

  // On modifie le setter de File, pour prendre en compte l'upload d'un fichier lorsqu'il en existe déjà un autre
  public function setFile(UploadedFile $file)
  {
    $this->file = $file;

    // On vérifie si on avait déjà un fichier pour cette entité
    if (null !== $this->url) {
      // On sauvegarde l'extension du fichier pour le supprimer plus tard
      $this->tempFilename = $this->url;

      // On réinitialise les valeurs des attributs url et alt
      $this->url = null;
      $this->alt = null;
    }
  }

  /**
   * @ORM\PrePersist()
   * @ORM\PreUpdate()
   */
  public function preUpload()
  {
    // Si jamais il n'y a pas de fichier (champ facultatif)
    if (null === $this->file) {
      $this->tempFilename = $this->url;
      $this->url = $this->defaultFileName;
      $this->alt = $this->defaultAlt;
      return;
    }

    // Le nom du fichier est son id, on doit juste stocker également son extension
    // Pour faire propre, on devrait renommer cet attribut en « extension », plutôt que « url »
    $this->url = $this->file->guessExtension();

    // Et on génère l'attribut alt de la balise <img>, à la valeur du nom du fichier sur le PC de l'internaute
    $this->alt = $this->file->getClientOriginalName();
  }

  /**
   * @ORM\PostPersist()
   * @ORM\PostUpdate()
   */
  public function upload()
  {
    // Si jamais il n'y a pas de fichier (champ facultatif)
    if (null === $this->file && null === $this->tempFilename) {
      return;
    }

    // Si on avait un ancien fichier, on le supprime
    if (null !== $this->tempFilename && strpos($this->tempFilename, $this->defaultFileName) === FALSE) {
      $oldFile = $this->defaultRootDir . '/' . $this->id . '.' . $this->tempFilename;
      if (file_exists($oldFile)) {
        unlink($oldFile);
      }
      //$this->tempFilename = null;
    }

    if($this->file !== null){
    // On déplace le fichier envoyé dans le répertoire de notre choix
    $this->file->move(
        $this->getUploadRootDir(), // Le répertoire de destination
        $this->id . '.' . $this->url   // Le nom du fichier à créer, ici « id.extension »
    );
  }
  }

  /**
   * @ORM\PreRemove()
   */
  public function preRemoveUpload()
  {
    // On sauvegarde temporairement le nom du fichier, car il dépend de l'id
    $this->tempFilename = ($this->url == $this->defaultFileName) ? $this->getUploadDir().'/'.$this->url : $this->getUploadRootDir().'/'.$this->id.'.'.$this->url;
  }

  /**
   * @ORM\PostRemove()
   */
  public function removeUpload()
  {
    // En PostRemove, on n'a pas accès à l'id, on utilise notre nom sauvegardé
    if ($this->url != $this->defaultFileName) {
      if (file_exists($this->tempFilename)) {
        // On supprime le fichier
        unlink($this->tempFilename);
      }
    }
  }

  public function getUploadDir()
  {
    // On retourne le chemin relatif vers l'image pour un navigateur
    return ($this->url == $this->defaultFileName) ? $this->defaultImageRootDir : $this->defaultRootDir;
  }

  protected function getUploadRootDir()
  {
    // On retourne le chemin relatif vers l'image pour notre code PHP
    return __DIR__.'/../../../../web/'.$this->getUploadDir();
  }
  
  public function getWebPath()
  {
    return ($this->url == $this->defaultFileName) ? $this->getUploadDir().'/'.$this->url: $this->getUploadDir().'/'.$this->getId().'.'.$this->getUrl();
  }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return Image
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Image
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }


  public function setResetImage($resetImageVal)
  {
    $this->resetImage = $resetImageVal;

    if ($this->resetImage == true && null === $this->file) {
      // On sauvegarde l'extension du fichier pour le supprimer plus tard
      //$this->tempFilename = $this->url;

      // On réinitialise les valeurs des attributs url et alt
      //$this->url = null;
      //juste pour lancer le processus de mise à jour
      $this->alt = null;
    }

    return $this;
  }


  public function getResetImage()
  {
    return $this->resetImage;
  }
}
