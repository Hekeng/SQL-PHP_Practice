<?php
require_once __DIR__ . '/config.php';

require_once INCLUDES_PATH . '/helpers.php';
require_once TEMPLATES_PATH . '/header.tpl';

// echo "<br>";



?>

<div class="content-wrapper">
	<div class="sidebar is-none">
		
	</div>

	<main class="main_window ">

		<div class="content">
			<div class="some_content ">
				<p>Lorem ipsum dolor sit amet consectetur adip
				</p>
			</div>
		</div>
		
				<!-- is-none -->

		<div class="auth-overlay is-none" data-panel="auth-overlay"> 
			<div class="auth-backdrop" 
				data-action="close" 
				data-target="auth-overlay">
   			 </div>
			<div class="auth-card">
				<button 
					type="button" 
					class="btn-exit" 
					data-action="close"
					data-target="auth-overlay">
					<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</button>
				
				<ul class="switch-tabs" data-panel="switch-tabs-container">
					<li>
						<button class="auth-tab is-active"
								role="heading" 
        						aria-level="2" 
								data-action="switch" 
								data-target="form-login"
								type="button">
							Authorization
						</button>
					<li>
						<button class="auth-tab" 
								role="heading" 
        						aria-level="2" 
								data-action="switch" 
								data-target="form-reg" 
								type="button">
							Registration
						</button>
					</li>
				</ul>
				<!-- <div class="info-to-do">
					<h2>Wellkome!</h2>
					<p>Please log in</p>
				</div> -->
				
				<div class="auth-content">
					<form class="auth-form-login " 
							data-panel="form-login"
							data-form="auth"
							data-action="close"
							data-target="auth-overlay"
							id="auth_form_login"
							name="auth_form_login" 
							action="" 
							method="post">
						<h2 class="sr-only">Authorization Form</h2>
						<label for="user_login">E-mail</label>
						<input 
							type="text"
							name="user_login"
							id="user_login"
							placeholder="mail@you-email.com" autofocus>
						<label for="user_pas">Password</label>
						<span class="error-text"></span>
						<input 
							type="password"
							id="user_pas"
							name="user_pas"
							placeholder="******">
						<span class="error-text"></span>
						<div class="auth-spacer"></div>
						<button class="btn btn-submit"

								
								
								type="submit">Send</button>			
					</form>

					<form class="auth-form-reg is-hidden" 
						data-panel="form-reg" 
						data-form="auth"
						data-action="close"
						data-target="auth-overlay"
						name="reg_window" 
						id="reg_window" 
						action="" 
						method="post">
						<h2 class="sr-only">Registration Form</h2>
						<label for="new_user_login">E-mail</label>
						<input 
							type="text"
							name="new_user_login"
							id="new_user_login"
							placeholder="mail@you-email.com" autofocus>
						<label for="new_user_pas">Password</label>
						<input 
							type="password"
							name="new_user_pas"
							id="new_user_pas"
							placeholder="******">
						<label for="new_user_pas_rep">Repeat Password</label>
						<span class="error-text"></span>
						<input 
							type="password"
							name="new_user_pas_rep"
							id="new_user_pas_rep"
							placeholder="******">
							<span class="error-text"></span>
						<!-- <br> -->
						<button class="btn btn-submit" 
								
								
						type="submit">Registration user</button>
					</form>

				</div>
			</div>
		</div>
	
		<div class="user_window is-none" 
			data-panel="user_window"
			id="user_panel">
			<h2>Welcome, <span class="user_name"></span></h2>
			<div class="personal_data">
				<h3>Personal data</h3>
				<hr>
				<form action="" method="post">
					<ul>
						<li>
							<span id="e-mail">213213@gmail.com</span>
							<span id="user_name">Vasia</span>
							<span id="user_surname">0.25</span>
							<input type="text" id="sku_count1" placeholder="0">
							<input type="checkbox" id="sku_check1">
						</li>
					</ul>
					<button type="button" id="confirm_order">buy</button>
				</form>
			</div>
		</div>

		<div class="admin_window is-none" id="admin_panel">

		</div>

	</main>
</div>
</div>
<?php
	require_once TEMPLATES_PATH . '/footer.tpl';
?>


