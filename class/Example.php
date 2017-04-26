<?php

class StrUtils {
    private $str;
    public $uglify = false;
    public function __construct($str) {
        $this->str = $str;
    }
    public function getStr() {
        return $this->str;
    }
    public function setStr($data) {
        $this->str = $data;
    }
    public function bold() {
        switch ($this->uglify) {
            case true: $this->setStr('<strong>'.$this->getStr().'</strong>'); break;
            default: $this->setStr('<strong>'.strip_tags($this->getStr()).'</strong>'); break;
        }
    }
    public function italic() {
        switch ($this->uglify) {
            case true: $this->setStr('<em>'.$this->getStr().'</em>'); break;
            default: $this->setStr('<em>'.strip_tags($this->getStr()).'</em>'); break;
        }
    }
    public function underline() {
        switch ($this->uglify) {
            case true: $this->setStr('<span style="text-decoration: underline;">'.$this->getStr().'</span>'); break;
            default: $this->setStr('<span style="text-decoration: underline;">'.strip_tags($this->getStr()).'</span>'); break;
        }
    }
    public function capitalize() {
        switch ($this->uglify) {
            case true: $this->setStr('<span style="text-transform: capitalize;">'.$this->getStr().'</span>'); break;
            default: $this->setStr('<span style="text-transform: capitalize;">'.strip_tags($this->getStr()).'</span>'); break;
        }
    }
    public function uglify() {
        $this->uglify = true;
        $this->setStr(strip_tags($this->getStr()));
        $this->bold();
        $this->italic();
        $this->underline();   
        $this->uglify = false;
    
    }
}


?>
