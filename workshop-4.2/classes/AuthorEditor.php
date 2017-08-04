<?php

class AuthorEditor extends User implements Author, Editor {
    private $_authorPrivilagesArray;
    private $_editorPrivilagesArray;

    public function getAuthorPrivilages(){
        return $this->_authorPrivilagesArray;
    }

    public function setAuthorPrivilages($val){
        $this->_authorPrivilagesArray = $val;
    }

    public function getEditorPrivilages(){
        return $this->_editorPrivilagesArray;
    }

    public function setEditorPrivilages($val){
        $this->_editorPrivilagesArray = $val;
    }
}

?>