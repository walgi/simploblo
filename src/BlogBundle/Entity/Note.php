<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="note")
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\NoteRepository")
 */
class Note
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="url_name", type="string", length=255, unique=true)
     */
    private $urlName;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;
    
    /**
     * @var bool
     * 
     * @ORM\Column(name="public", type="boolean", options={"default":0})
     */
    private $public;


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
     * Set title
     *
     * @param string $title
     *
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set urlName
     *
     * @param string $urlName
     *
     * @return Post
     */
    public function setUrlName($urlName)
    {
        $this->urlName = $urlName;

        return $this;
    }

    /**
     * Get urlName
     *
     * @return string
     */
    public function getUrlName()
    {
        return $this->urlName;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Post
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
    
    /**
     * 
     * @param bool $public
     * @return $this
     */
    public function setPublic($public)
    {
        $this->public = $public;
        
        return $this;
    }
    
    /**
     * 
     * @return bool
     */
    public function isPublic()
    {
        return (bool)$this->public;
    }
}

