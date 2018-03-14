<?php

class Language
{
    public $ip;
    public $language = 'ru';

    private function path()
    {
        return dirname(__FILE__).'/../components/geoip/';
    }
    
    public function __construct()
    {
        $this->ip = $_SERVER['REMOTE_ADDR'];
        include_once ($this->path().'geoip.inc');
        $gi = geoip_open($this->path().'GeoIP.dat',GEOIP_STANDARD);
        $lang = geoip_country_code_by_addr($gi, $this->ip);
        if ($lang) $this->language = $lang;
    }
}