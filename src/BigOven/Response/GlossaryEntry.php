<?php

namespace BigOven\Response;

class GlossaryEntry extends Response
{
    /**
     * @return int
     */
    public function id()
    {
        return $this->getElementValue('/GlossaryEntry/GlossaryEntryID[1]', self::INTEGER);
    }

    /**
     * @return string
     */
    public function term()
    {
        return $this->getElementValue('/GlossaryEntry/Term[1]');
    }

    /**
     * @return string
     */
    public function definition()
    {
        return $this->getElementValue('/GlossaryEntry/Definition[1]');
    }

    /**
     * @return \DateTime
     */
    public function creationDate()
    {
        return $this->getElementValue('/GlossaryEntry/CreationDate[1]', self::DATE);
    }

    /**
     * @return \DateTime
     */
    public function lastModified()
    {
        return $this->getElementValue('/GlossaryEntry/LastModified[1]', self::DATE);
    }
}
