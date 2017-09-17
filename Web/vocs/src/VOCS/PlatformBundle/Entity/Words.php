<?php

namespace VOCS\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Words
 *
 * @ORM\Table(name="words")
 * @ORM\Entity(repositoryClass="VOCS\PlatformBundle\Repository\WordsRepository")
 */
class Words
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
     * @ORM\Column(name="url_prononciation", type="string", length=255, nullable=true)
     */
    private $urlPrononciation;

    /**
     * @var string
     *
     * @ORM\Column(name="word", type="string", length=255)
     */
    private $word;


    /**
     * Many Users have Many Users.
     * @ORM\ManyToMany(targetEntity="Words", mappedBy="trads")
     */
    private $words;

    /**
     * Many Users have many Users.
     * @ORM\ManyToMany(targetEntity="Words", inversedBy="words")
     * @ORM\JoinTable(name="traductions",
     *      joinColumns={@ORM\JoinColumn(name="words_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="trad_word_id", referencedColumnName="id")}
     *      )
     */
    private $trads;

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
     * Set urlPrononciation
     *
     * @param string $urlPrononciation
     *
     * @return Words
     */
    public function setUrlPrononciation($urlPrononciation)
    {
        $this->urlPrononciation = $urlPrononciation;

        return $this;
    }

    /**
     * Get urlPrononciation
     *
     * @return string
     */
    public function getUrlPrononciation()
    {
        return $this->urlPrononciation;
    }

    /**
     * Set word
     *
     * @param string $word
     *
     * @return Words
     */
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }

    /**
     * Get word
     *
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->words = new \Doctrine\Common\Collections\ArrayCollection();
        $this->trads = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add word
     *
     * @param \VOCS\PlatformBundle\Entity\Words $word
     *
     * @return Words
     */
    public function addWord(\VOCS\PlatformBundle\Entity\Words $word)
    {
        $this->words[] = $word;

        return $this;
    }

    /**
     * Remove word
     *
     * @param \VOCS\PlatformBundle\Entity\Words $word
     */
    public function removeWord(\VOCS\PlatformBundle\Entity\Words $word)
    {
        $this->words->removeElement($word);
    }

    /**
     * Get words
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWords()
    {
        return $this->words;
    }

    /**
     * Add trad
     *
     * @param \VOCS\PlatformBundle\Entity\Words $trad
     *
     * @return Words
     */
    public function addTrad(\VOCS\PlatformBundle\Entity\Words $trad)
    {
        $this->trads[] = $trad;

        return $this;
    }

    /**
     * Remove trad
     *
     * @param \VOCS\PlatformBundle\Entity\Words $trad
     */
    public function removeTrad(\VOCS\PlatformBundle\Entity\Words $trad)
    {
        $this->trads->removeElement($trad);
    }

    /**
     * Get trads
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTrads()
    {
        return $this->trads;
    }

    /**
     * Set urPrononciation
     *
     * @param string $urPrononciation
     *
     * @return Words
     */
    public function setUrPrononciation($urPrononciation)
    {
        $this->urPrononciation = $urPrononciation;

        return $this;
    }

    /**
     * Get urPrononciation
     *
     * @return string
     */
    public function getUrPrononciation()
    {
        return $this->urPrononciation;
    }
}
