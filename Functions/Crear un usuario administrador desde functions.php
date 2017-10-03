/*
Tipo: WordPress WooCommerce
Descripción: Crear un usuario administrador desde functions.php.
Autor: Daniel Esparza R.
Autor URI: https://dannydshore.com
License: GPLv3
*/

//Asegúrate de insertar el código en el archivo functions.php del tema activo
function wp_admin_account(){
$user = 'usuario'; //nombre de usuario
$pass = 'contrasena'; //contraseña
$email = 'email@site.com'; //correo
if ( !username_exists( $user )  && !email_exists( $email ) ) {
$user_id = wp_create_user( $user, $pass, $email );
$user = new WP_User( $user_id );
$user->set_role( 'administrator' );
} }
add_action('init','wp_admin_account');
