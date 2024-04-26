<?php
class connexion
{
    public function CNXbase()
    {
        $dbc=new PDO('mysql:host=localhost;dbname=produit','root','');
        return $dbc;
    }
}
?>