<?php declare(strict_types=1);
/**
 * AbstractEntity -
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Data\Entity
 * @version 0.1
 */


namespace P7Playground\Data\Entity;
use DateTime;

class AbstractEntity
{



    protected DateTime $created;

    protected DateTime $modified;

    /**
     * @return DateTime
     */
    public function getCreated(): DateTime
    {
        return $this->created;
    }

    /**
     * @param DateTime $created
     * @return AbstractEntity
     */
    public function setCreated(DateTime $created): AbstractEntity
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getModified(): DateTime
    {
        return $this->modified;
    }

    /**
     * @param DateTime $modified
     * @return AbstractEntity
     */
    public function setModified(DateTime $modified): AbstractEntity
    {
        $this->modified = $modified;
        return $this;
    }


}