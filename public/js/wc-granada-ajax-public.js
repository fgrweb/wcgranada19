(function ($) {
	'use strict';
	var block_args = {
		message: '',
		css: {
			border: 'none',
			padding: '15px',
			backgroundColor: 'transparent',
			'-webkit-border-radius': '10px',
			'-moz-border-radius': '10px'
		},
		overlayCSS: {
			background: '#fff',
			opacity: 0.7
		},
		ignoreIfBlocked: true
	};
	$(document).on('click', 'input[type="button"]#alta', function () {
		block_args['message'] =
			'<h1 id="egs-ajax-message">Creando usuario</h1><img src="' +
			$('.form-alta-usuario').data('loader') +
			'" />';
		$.blockUI(block_args);
		var validacion = validarDatos();
		$('.error').remove();
		if (validacion.validado == false) {
			$(document).find('.form-alta-usuario').prepend(validacion.mensaje);
			$.unblockUI();
			return;
		}
		$.ajax({
			type: 'post',
			url: MyAjax.ajaxurl,
			data: {
				action: 'fgr_alta_usuario',
				nonce: MyAjax.ajax_nonce,
				//nonce: 'a21d29c30e',
				usr: $('input#usuario').val(),
				pss: $('input#pass').val(),
				email: $('input#email').val(),
				nombre: $('input#nombre').val(),
				apellidos: $('input#apellidos').val(),
				dni: $('#dni').val()
			},
			success: function (response) {
				if (response.ok == false) {
					alert('Ha habido un error grabando al usuario');
				} else {
					$('h2').remove();
					$('.form-alta-usuario').html(
						'\
					<h2>¡La Vín!, !qué arte tienes! Has dado de alta como granaíno</h2>\
					'
					);
				}
			},
			complete: function () {
				$.unblockUI();
			},
			error: function (response) {
				alert('Ha habido un error grabando el usuario');
			}
		});
	});
	function validarDatos () {
		var validacion = {
			mensaje: '',
			validado: true
		};
		validacion.mensaje = '<div class="error">';
		if ($('input#usuario').val() == '') {
			validacion.mensaje += '<p>Debes indicar un nombre de usuario</p>';
			validacion.validado = false;
		}
		if (
			$('input#pass').val() == '' ||
			$('input#re-pass').val() == '' ||
			$('input#pass').val() !== $('input#re-pass').val()
		) {
			validacion.mensaje += '<p>Las contraseñas no coinciden</p>';
			validacion.validado = false;
		}
		if ($('input#nombre').val() == '') {
			validacion.mensaje += '<p>Indica el Nombre</p>';
			validacion.validado = false;
		}
		if ($('input#apellidos').val() == '') {
			validacion.mensaje += '<p>Faltan los apellidos</p>';
			validacion.validado = false;
		}
		validacion.mensaje += '</div>';
		return validacion;
	}
})(jQuery);
