<?php
/**
 * Functions public
 *
 * WordCamp Granada 2019.
 *
 * @link       https://fgrweb.es
 * @since      1.0.0
 *
 * @package    Wc_Granada_Ajax
 * @subpackage Wc_Granada_Ajax/admin
 */

 add_action( 'wp_ajax_fgr_alta_usuario', 'fgr_alta_usuario' );
 add_action( 'wp_ajax_nopriv_fgr_alta_usuario', 'fgr_alta_usuario' );

/**
 * Función ajax para dar de alta usuario
 *
 * @return array
 */
function fgr_alta_usuario() {
	if ( isset( $_POST['nonce'] ) ) {
		if ( ! wp_verify_nonce( $_POST['nonce'], 'my_nonce' ) ) {
			$response = array(
				'ok' => false,
			);
		} else {
			// Grabar el usuario.
			// Se debería de chequear que $_POST tiene todos los valores. Lo damos por hecho.
			// $usuario = isset( $_POST['usr'] ) ? sanitize_text_field( wp_unslash( $_POST['usr'] ) ) : '',
			$args_user = array(
				'user_login' => sanitize_text_field( wp_unslash( $_POST['usr'] ) ),
				'user_pass'  => $_POST['pss'],
				'first_name' => sanitize_text_field( $_POST['nombre'] ),
				'last_name'  => sanitize_text_field( $_POST['apellidos'] ),
				'role'       => 'granaino',
			);
			$usuario = wp_insert_user( $args_user );
			// Ahora añadimos el dni.
			add_user_meta( $usuario, 'user_dni', sanitize_text_field( $_POST['dni'] ), true );
			$response = array(
				'ok' => true,
			);
		}
		wp_send_json( $response );
	}
}
