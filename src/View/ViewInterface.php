<?php


/*
*
* @class View
* Donne les bases à toute les vues
* @author Thomas Cardon
*/
class View
{
    public function render() {
        return $this->errorNotImplemented();
    }
    
    public function errorNotImplemented() {
        return 'Cette vue n\'a pas encore été implémentée.';
    }
}

?>