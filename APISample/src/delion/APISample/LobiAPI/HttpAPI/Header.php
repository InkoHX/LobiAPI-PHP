<?php

namespace delion\LobiAPI\LobiAPI\HttpAPI;

class Header
{
    public $Host = '';
    public $Connection = true;
    public $Accept = '';
    public $UserAgent = '';
    public $Referer = '';
    public $AcceptEncoding = '';
    public $AcceptLanguage = '';
    public $Origin = '';

    /**
     * @param string $host
     * @return Header
     */
    public function setHost(string $host): self
    {
        $this->Host = $host;
        return $this;
    }

    /**
     * @param bool $connection
     * @return Header
     */
    public function setConnection(bool $connection): self
    {
        $this->Connection = $connection;
        return $this;
    }

    /**
     * @param string $accept
     * @return Header
     */
    public function setAccept(string $accept): self
    {
        $this->Accept = $accept;
        return $this;
    }

    /**
     * @param string $useragent
     * @return Header
     */
    public function setUserAgent(string $useragent): self
    {
        $this->UserAgent = $useragent;
        return $this;
    }

    /**
     * @param string $referer
     * @return Header
     */
    public function setReferer(string $referer): self
    {
        $this->Referer = $referer;
        return $this;
    }

    /**
     * @param string $encoding
     * @return Header
     */
    public function setAcceptEncoding(string $encoding): self
    {
        $this->AcceptEncoding = $encoding;
        return $this;
    }

    /**
     * @param string $language
     * @return Header
     */
    public function setAcceptLanguage(string $language): self
    {
        $this->AcceptLanguage = $language;
        return $this;
    }

    /**
     * @param string $origin
     * @return Header
     */
    public function setOrigin(string $origin): self
    {
        $this->Origin = $origin;
        return $this;
    }
}
