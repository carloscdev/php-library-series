<?php

require_once "../../models/lenguaje.php";
$lenguaje = new Lenguaje();
$query = $lenguaje->list();
$lenguaje_list = $query->fetchAll(PDO::FETCH_ASSOC);
