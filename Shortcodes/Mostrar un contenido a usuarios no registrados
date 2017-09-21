<?php
//Mostrar un contenido a usuarios no registrados
//Asegúrate de insertar el código en el archivo functions.php del tema activo

function contenido_no_usuarios($attr, $content = null) {
    extract(shortcode_atts(array(
        'deny' => '',
    ), $attr));
    if ((!is_user_logged_in() && !is_null($content)) || is_feed()) return $content;
    return $deny;
}
add_shortcode('contenido_no_usuarios', 'contenido_no_usuarios');

//Como se inserta el shortcode
//[contenido_no_usuarios deny="Este contenido solo es para usuarios no registrados"]Lorem ipsum dolor sit amet[/contenido_no_usuarios]
