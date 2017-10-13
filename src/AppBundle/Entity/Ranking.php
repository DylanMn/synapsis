<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ranking
 *
 * @ORM\Table(name="ranking")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjectRepository")
 */
class Ranking
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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getDomainId()
    {
        return $this->domainId;
    }

    /**
     * @param int $domainId
     */
    public function setDomainId($domainId)
    {
        $this->domainId = $domainId;
    }

    /**
     * @return int
     */
    public function getKeywordId()
    {
        return $this->keywordId;
    }

    /**
     * @param int $keywordId
     */
    public function setKeywordId($keywordId)
    {
        $this->keywordId = $keywordId;
    }

    /**
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * @param int $rank
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
    }

    /**
     * @return string
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param string $day
     */
    public function setDay($day)
    {
        $this->day = $day;
    }

    /**
     * @var int
     *
     * @ORM\Column(name="domainId", type="integer")
     */

    private $domainId;

    /**
     * @var int
     *
     * @ORM\Column(name="keywordId", type="integer")
     */

    private $keywordId;

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer")
     */

    private $rank;

    /**
     * @var date
     *
     * @ORM\Column(name="day", type="date")
     */

    private $day;

    /**
     * @var string
     *
     * @ORM\Column(name="urlSerp", type="string")
     */

    private $urlSerp;

    /**
     * @return string
     */
    public function getUrlSerp()
    {
        return $this->urlSerp;
    }

    /**
     * @param string $urlSerp
     */
    public function setUrlSerp($urlSerp)
    {
        $this->urlSerp = $urlSerp;
    }







}

