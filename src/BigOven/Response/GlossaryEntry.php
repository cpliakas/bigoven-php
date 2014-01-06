<?php

namespace BigOven\Response;

class GlossaryEntry extends Response
{
    /**
     * @return int
     */
    public function id()
    {
        return $this->getElementValue('/GlossaryEntry/GlossaryEntryID', self::INTEGER);
    }

    /**
     * @return string
     */
    public function term()
    {
        return $this->getElementValue('/GlossaryEntry/Term');
    }

    /**
     * @return string
     */
    public function definition()
    {
        return $this->getElementValue('/GlossaryEntry/Definition');
    }

    /**
     * @return \DateTime
     */
    public function creationDate()
    {
        return $this->getElementValue('/GlossaryEntry/CreationDate', self::DATE);
    }

    /**
     * @return \DateTime
     */
    public function lastModified()
    {
        return $this->getElementValue('/GlossaryEntry/LastModified', self::DATE);
    }
}
