<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventUser
 *
 * @ORM\Table(name="event_user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventUserRepository")
 */
class EventUser
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
     * 
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName = "id")
     * 
     */
    private $user;    

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Event")
     * @ORM\JoinColumn(name="event_id", referencedColumnName = "id")
     * 
     */
    private $event;

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
     * Get User
     *
     * @return User object
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set User
     * @param User $user
     * 
     */
    public function setUser($user)
    {   
        $this->user = $user;
        
    }

    /**
     * Get Event
     *
     * @return Event object
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set Event
     * @param Event $event
     * 
     */
    public function setEvent($event)
    {   
        $this->event = $event;
        
    }
}

