<?php


class jokes extends connection{
    private $id;
    private $texte;

    function __construct($id,$texte){
        $this->id=$id;
        $this->texte=$texte;
    }

    function addJoke($texte){
        $sql="INSERT INTO joke VALUES (?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$texte]);
    }


}
echo "hiiiiiiiiiiiii";




?>