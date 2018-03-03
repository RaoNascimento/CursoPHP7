<?php
$name = "images";

if(!is_dir($name)){
    mkdir($name);
    echo "DIretorio $name criado com sucesso";

} else {
    rmdir($name);
    echo "Diretorio ja existe $name foi removido";

}

?>