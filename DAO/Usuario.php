<?php

class Usuario{

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

     
public function setIdusuario(){
    $this->idusuario = $value;

}
public function getIdusuario(){
   return  $this->idusuario;

}
public function setDeslogin(){
    $this->$deslogin = $value;

}
public function getDeslogin(){
    return $this-> $deslogin;
}
public function setDessenha(){
    $this->$deslogin = $value;
}
public function getDessenha(){
    return $this-> $deslogin;
}
public function setDtcadastro(){
    $this->$dtcatro= $value;
}
public function getDtcadastro(){
    return $this-> $setdtcadastro;
}

public function loadById($id){
    $sql = new Sql();
    $results = $sql->select("SELECT*FROM tb_usuarios WHERE idusuario = :ID", array(
        ": ID=>$id"
    ));

    if(count($results) > 0) {
        $row=$result[0];

        $this->setIdusuario($row['idusuario']);
        $this->setDeslogin($row['deslogin']);
        $this->setDessenha($row['dessenha']);
        $this->setDtcadastro(new DateTime ($row['dtcadastro']));
    }

}

    
}