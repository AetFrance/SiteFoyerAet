<?php

namespace Aet\CommunicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Thread as BaseThread;

/**
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 * @ORM\Entity(repositoryClass="Aet\CommunicationBundle\Entity\ThreadRepository")
 * @ORM\Table(name="aet_communication_thread")
 */
class Thread extends BaseThread
{
    /**
     * @var string $id
     *
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="Aet\CommunicationBundle\Entity\Comment", mappedBy="thread", cascade={"remove"})
     */
    protected $comments;
}
