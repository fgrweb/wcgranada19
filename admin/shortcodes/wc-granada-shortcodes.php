<?php

/**
 * This file defines the shortcodes for the example
 *
 * WordCamp Granada 2019.
 *
 * @link       https://fgrweb.es
 * @since      1.0.0
 *
 * @package    Wc_Granada_Ajax
 * @subpackage Wc_Granada_Ajax/admin
 */


function pinta_formulario() {
	$nonce   = wp_nonce_field( 'my_nonce', 'seguridad' );
	$salida  = '
		<div class="form-alta-usuario" data-loader="' . WC_GRANADA_AJAX_DIR_URL . 'public/images/simpsons24.gif">
			<form id="alta-usuario">
				<label for="usuario">' . __( 'Usuario', 'wc-granada-ajax' ) . '</label>
				<input name="usuario" type ="text" id="usuario"><br/>
				<label for="pass">' . __( 'Contraseña', 'wc-granada-ajax' ) . '</label>
				<input name="pass" type ="password" id="pass">
				<label for="re-pass">' . __( 'Repite Contraseña', 'wc-granada-ajax' ) . '</label>
				<input name="re-pass" type ="password" id="re-pass">
				<label for="email">' . __( 'Email', 'wc-granada-ajax' ) . '</label>
				<input name="email" type ="email" id="email"><br/>
				<div class="clear"></div>
				<label for="nombre">' . __( 'Nombre', 'wc-granada-ajax' ) . '</label>
				<input name="nombre" type ="text" id="nombre"><br/>
				<label for="apellidos">' . __( 'Apellidos', 'wc-granada-ajax' ) . '</label>
				<input name="apellidos" type ="text" id="apellidos"><br/>
				<label for="dni">' . __( 'Dni', 'wc-granada-ajax' ) . '</label>
				<input name="dni" type ="text" id="dni"><br/>' . $nonce . '
				<input type="button" id="alta" value="' . __( 'Dar de alta', 'wc-granada-ajax' ) . '">
	';
	$salida .= wp_nonce_field( 'my-nonce' );
	$salida .= '</form></div>';
	return $salida;
}

