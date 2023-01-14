<?php

require_once "../../models/nacionalidad.php";
$nacionalidad = new Nacionalidad();
$query = $nacionalidad->list();
$nacionalidad_list = $query->fetchAll(PDO::FETCH_ASSOC);
