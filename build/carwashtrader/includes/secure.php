<?php
	if(!is_user_logged_in()) {
		wp_redirect('/login/');
	}
?>