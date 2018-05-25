<?php

if (isset($_POST['opc'])) {
    $opc = $_POST['opc'];
    switch ($opc) {

        case 'avaluo':
            $response = file_get_contents('https://api.avaluoenlinea.com/servicios/API_call');
        break;

        default:
            echo "No existe esa opciòn"
        break;
    }
}