<?php

// Retorna la URL del proyecto
function base_url()
{
    return rtrim(BASE_URL, '/') . '/';
}

// Retorna la URL del Assets
function media()
{
    return rtrim(BASE_URL, '/') . '/Assets';
}

function headerAdmin($data = "")
{
    $view_header = "Views/Template/header_admin.php";
    require_once($view_header);
}

function footerAdmin($data = "")
{
    $view_footer = "Views/Template/footer_admin.php";
    require_once($view_footer);
}
// Muestra información formateada
function dep($data)
{
    echo '<pre>' . htmlspecialchars(print_r($data, true)) . '</pre>';
}

function getModal(string $nameModal, $data)
{
    $view_modal = "Views/Template/Modals/{$nameModal}.php";
    require_once($view_modal);
}

// Elimina exceso de espacios y previene inyección de SQL y XSS
function strClean($strCadena)
{
    $pattern = [
        '/\s+/', '/^\s|\s$/',
        '/<script.*?>.*?<\/script>/i', '/<.*?script.*?src.*?>.*?<\/.*?script>/i',
        '/SELECT.*?FROM/i', '/DELETE FROM/i', '/INSERT INTO/i', '/SELECT COUNT\(\*\).*?FROM/i',
        '/DROP TABLE/i', '/OR \'1\'=\'1/i', '/OR "1"="1"/i', '/OR `1`=`1`/i', '/is NULL; --/i',
        '/LIKE \'/', '/LIKE "/i', '/LIKE `/', '/OR \'a\'=\'a/i', '/OR "a"="a"/i', '/OR `a`=`a`/i',
        '/--/i', '/\^/', '/\[/', '/\]/', '/==/'
    ];
    $replace = [
        ' ', '',
        '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''
    ];
    $string = preg_replace($pattern, $replace, $strCadena);
    $string = trim($string); // Elimina espacios en blanco al inicio y al final
    $string = stripslashes($string); // Elimina las \ invertidas
    return $string;
}

// Genera una contraseña de 10 caracteres
function passGenerator($length = 10)
{
    $pass = "";
    $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    $longitudCadena = strlen($cadena);

    for ($i = 0; $i < $length; $i++) {
        $pos = random_int(0, $longitudCadena - 1);
        $pass .= $cadena[$pos];
    }
    return $pass;
}

// Hashea una contraseña utilizando password_hash
function hashPassword($password)
{
    return password_hash($password, PASSWORD_DEFAULT);
}

// Verifica una contraseña contra su hash utilizando password_verify
function verifyPassword($password, $hash)
{
    return password_verify($password, $hash);
}

// Genera un token
function token()
{
    return bin2hex(random_bytes(16));
}

// Formato para valores monetarios
function formatMoney($cantidad)
{
    // Asumiendo que SPD y SPM son definidas como el separador decimal y de miles
    // Definir SPD y SPM si no están definidas
    if (!defined('SPD')) define('SPD', ',');
    if (!defined('SPM')) define('SPM', '.');
    return number_format($cantidad, 2, SPD, SPM);
}
