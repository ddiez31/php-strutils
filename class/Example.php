<?php

class StrUtils {
    private $str;
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
        $this->setStr('<strong>'.$this->getStr().'</strong>');
    }
    public function italic() {
        $this->setStr('<em>'.$this->getStr().'</em>');
    }
    public function underline() {
        $this->setStr('<span style="text-decoration: underline;">'.$this->getStr().'</span>');
    }
    public function capitalize() {
        $this->setStr('<span style="text-transform: capitalize;">'.$this->getStr().'</span>');
    }
    public function uglify() {
        $this->bold();
        $this->italic();
        $this->underline();
    }
}

// class StrUtils {
//     private $str;
//     public function __construct($str) {
//         $this->str = $str;
//     }
//     public function bold() {
//         echo '<strong>'.$this->str.'</strong><br>';
//     }
//     public function italic() {
//         echo '<em>'.$this->str.'</em><br>';
//     }
//     public function underline() {
//         echo '<span style="text-decoration: underline;">'.$this->str.'</span><br>';
//     }
//     public function capitalize() {
//         echo '<span style="text-transform: capitalize;">'.$this->str.'</span><br>';
//     }
//     public function uglify() {
//         $this->bold();
//         $this->italic();
//         $this->underline();
//     }
// }

?>
