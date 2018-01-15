<?php

namespace WCS\CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Review
 *
 * @ORM\Table(name="review")
 * @ORM\Entity(repositoryClass="WCS\CoavBundle\Repository\ReviewRepository")
 */
class Review
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
     * @ORM\Column(name="text", type="text")
     */
    private $text;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publicationDate", type="datetime")
     */
    private $publicationDate;

    /**
     * @var int
     *
     * @ORM\Column(name="note", type="smallint")
     */
    private $note;

    /**
     * @var User $userRated
     *
     * @ORM\ManyToOne(targetEntity="WCS\CoavBundle\Entity\User")
     */
    private $userRated;

    /**
     * @var User $reviewAuthor
     *
     * @ORM\ManyToOne(targetEntity="WCS\CoavBundle\Entity\User")
     */
    private $reviewAuthor;

	// Generated Code


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
     * Set text
     *
     * @param string $text
     *
     * @return Review
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set publicationDate
     *
     * @param \DateTime $publicationDate
     *
     * @return Review
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    /**
     * Get publicationDate
     *
     * @return \DateTime
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return Review
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set userRated
     *
     * @param \WCS\CoavBundle\Entity\User $userRated
     *
     * @return Review
     */
    public function setUserRated(\WCS\CoavBundle\Entity\User $userRated = null)
    {
        $this->userRated = $userRated;

        return $this;
    }

    /**
     * Get userRated
     *
     * @return \WCS\CoavBundle\Entity\User
     */
    public function getUserRated()
    {
        return $this->userRated;
    }

    /**
     * Set reviewAuthor
     *
     * @param \WCS\CoavBundle\Entity\User $reviewAuthor
     *
     * @return Review
     */
    public function setReviewAuthor(\WCS\CoavBundle\Entity\User $reviewAuthor = null)
    {
        $this->reviewAuthor = $reviewAuthor;

        return $this;
    }

    /**
     * Get reviewAuthor
     *
     * @return \WCS\CoavBundle\Entity\User
     */
    public function getReviewAuthor()
    {
        return $this->reviewAuthor;
    }
}
