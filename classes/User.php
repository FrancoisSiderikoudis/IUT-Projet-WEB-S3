<?php

require_once('Database.php');

session_start();

class user {
    private $_pseudo;
    private $_email = '';
    private $_password = '';
    private $_id = '';
    private $_statut = '';
    function __construct($pseudo,$_email,$_password,$_id,$_statut){
        $this->setPseudo($pseudo);
        $this->setEmail($_email);
        $this->setPassword($_password);
        $this->setId($_id);
        $this->setStatut($_statut);
    }

    function  getPseudo(){return $this->_pseudo;}
    function  getEmail(){return $this->_email;}
    function  getPassword(){return $this->_password;}
    function  getId(){return $this->_id;}
    function  getStatut(){return $this->_statut;}

    function  setPseudo($tmpSurname){ $this->_pseudo = $tmpSurname;}
    function  setEmail($tmpEmail){ $this->_email = $tmpEmail;}
    function  setPassword($tmpPassword){ $this->_password = $tmpPassword;}
    function  setId($tmpId){ $this->_id = $tmpId;}
    function  setStatut($tmpStatut){ $this->_statut = $tmpStatut;}
    function GetNewPassword(){}
    function checkEmailHost($email)
    {
        $array = array(
            "1" => "@gmail.com",
            "2" => "@yahoo.fr",
            "3" => "@hotmail.fr",
            "4" => "@laposte.net",
            "5" => "@etu.univ-amu.fr",
            "6" => "@univ-amu.fr",
        );

//        if ( preg_match ( " /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " , $email ) ) {
            $strstrEmail = strstr($email, '@');
//            echo $strstrEmail;
            for ($i = 1; $i <= count($array); $i++) {
                if ($strstrEmail == $array[$i]) {
                    return true;
                    break;
                } else if ($i== count($array)){
                    return false;
                }

            }
//        } else {
//            return false;
//        }
    }

    function CheckUser(){
        $databaseBaptiste = new database('mysql-baptistesevilla.alwaysdata.net','189826_admin1','0651196362','baptistesevilla_projetweb');
        $query = 'Select Surname from User Where Surname = \'' . $this->_pseudo . '\' ';
        if($databaseBaptiste->Comparator($query) == 1) {return false;}
        $query = 'Select Email from User Where Email = \'' . $this->_email . '\' ';
        if($databaseBaptiste->Comparator($query) == 1) {return false;}
        if(strlen($this->_password) < 8 || strlen($this->_password)>16) {return false;}

        if(strpos($this->_email,'@') == 0){return false;}

//        echo $this . '<br><hr>';
        if($this->checkEmailHost($this->getEmail()) == false) {return false;} /* || '@yahoo.fr' || '@laposte.net'*/
        if(strlen($this->_email) > 32) {return false;}
//        echo $this . '<br><hr>';

        return true;
    }
    function __toString()
    {
        $html = $this->getPseudo(). ' ';
        $html .= $this->getEmail(). ' ';
        $html .=$this->getPassword(). ' ';
        $html .=$this->getId(). ' ';
        $html .=$this->getStatut(). ' ';
        return $html;
    }
}
?>