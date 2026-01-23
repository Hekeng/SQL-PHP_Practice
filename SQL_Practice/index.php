<?php
require_once __DIR__ . '/config.php';

require_once INCLUDES_PATH . '/helpers.php';
require_once TEMPLATES_PATH . '/header.tpl';

// echo "<br>";



?>

<div class="content-wrapper">
	<div class="sidebar is-none">
		
	</div>

	<div class="main_window ">

		<div class="content">
			<div class="some_content ">
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod dolor eos distinctio. Fugiat dolorum distinctio inventore sequi ratione? Officia soluta eaque, rem nostrum suscipit velit, unde porro animi in molestiae, iste minus vitae impedit eius vel tempora ducimus accusamus quam minima nulla architecto temporibus cupiditate ipsa tenetur. Sequi ipsum esse, maiores consectetur corporis animi excepturi nulla voluptates nisi, fuga perspiciatis repudiandae officia rem, quisquam placeat qui. Laudantium, doloribus tempora odit consequatur earum hic. Pariatur earum expedita harum autem sunt cupiditate accusantium? Eaque praesentium ratione officia cupiditate vitae facilis velit cum adipisci mollitia! Quasi suscipit pariatur nihil ipsum atque quis tempore.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod dolor eos distinctio. Fugiat dolorum distinctio inventore sequi ratione? Officia soluta eaque, rem nostrum suscipit velit, unde porro animi in molestiae, iste minus vitae impedit eius vel tempora ducimus accusamus quam minima nulla architecto temporibus cupiditate ipsa tenetur. Sequi ipsum esse, maiores consectetur corporis animi excepturi nulla voluptates nisi, fuga perspiciatis repudiandae officia rem, quisquam placeat qui. Laudantium, doloribus tempora odit consequatur earum hic. Pariatur earum expedita harum autem sunt cupiditate accusantium? Eaque praesentium ratione officia cupiditate vitae facilis velit cum adipisci mollitia! Quasi suscipit pariatur nihil ipsum atque quis tempore.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod dolor eos distinctio. Fugiat dolorum distinctio inventore sequi ratione? Officia soluta eaque, rem nostrum suscipit velit, unde porro animi in molestiae, iste minus vitae impedit eius vel tempora ducimus accusamus quam minima nulla architecto temporibus cupiditate ipsa tenetur. Sequi ipsum esse, maiores consectetur corporis animi excepturi nulla voluptates nisi, fuga perspiciatis repudiandae officia rem, quisquam placeat qui. Laudantium, doloribus tempora odit consequatur earum hic. Pariatur earum expedita harum autem sunt cupiditate accusantium? Eaque praesentium ratione officia cupiditate vitae facilis velit cum adipisci mollitia! Quasi suscipit pariatur nihil ipsum atque quis tempore.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod dolor eos distinctio. Fugiat dolorum distinctio inventore sequi ratione? Officia soluta eaque, rem nostrum suscipit velit, unde porro animi in molestiae, iste minus vitae impedit eius vel tempora ducimus accusamus quam minima nulla architecto temporibus cupiditate ipsa tenetur. Sequi ipsum esse, maiores consectetur corporis animi excepturi nulla voluptates nisi, fuga perspiciatis repudiandae officia rem, quisquam placeat qui. Laudantium, doloribus tempora odit consequatur earum hic. Pariatur earum expedita harum autem sunt cupiditate accusantium? Eaque praesentium ratione officia cupiditate vitae facilis velit cum adipisci mollitia! Quasi suscipit pariatur nihil ipsum atque quis tempore.</p>
			</div>
		</div>
		
<!-- is-none -->

		<div class="auth-overlay is-none" 
			 data-panel="auth-overlay"> 
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
				<div class="auth-tabs">
					<ul>
						<li>
							<button class="auth-tab is-active" 
									data-action="switch" 
									data-target="reg-overlay" 
									data-panel="auth-tab"
									type="button">
								Authorization
							</button>
						<li>
							<button class="auth-tab" 
									data-action="switch" 
									data-target="auth-overlay" 
									data-panel="reg-tab" 
									type="button">
								Registration
							</button>
						</li>
					</ul>
				</div>
				
				<div class="auth-content">
					<form class="auth-form-login " id="auth_form_login" name="auth_form_login" action="" method="post">
						
						<label for="user_login">Login</label>
						<input 
							type="text"
							name="user_login"
							id="user_login"
							placeholder="Login" autofocus>
						<label for="user_pas">Password</label>
						<input 
							type="password"
							id="user_pas"
							name="user_pas"
							placeholder="******">
						<div class="auth-spacer"></div>
						<!-- <label class="is-hiden" for="new_user_pas_rep ">auth-spacer</label>
						<input 
							class="auth-spacer is-hiden"
							type="text"
							placeholder="******"> -->
						<!-- <br> -->
						<button class="btn btn-submit" type="submit">Send</button>			
					</form>

					<form class="auth-form-reg is-hiden" name="reg_window" id="reg_window" action="" method="post">
					
						<label for="new_user_login">Login</label>
						<input 
							type="text"
							name="new_user_login"
							id="new_user_login"
							placeholder="Login" autofocus>
						<label for="new_user_pas">Password</label>
						<input 
							type="password"
							name="new_user_pas"
							id="new_user_pas"
							placeholder="******">
						<label for="new_user_pas_rep">Repeat Password</label>
						<input 
							type="password"
							name="new_user_pas_rep"
							id="new_user_pas_rep"
							placeholder="******">
						<!-- <br> -->
						<button class="btn btn-submit" type="submit">Registration user</button>
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

	</div>
</div>
</div>
<?php
	require_once TEMPLATES_PATH . '/footer.tpl';
?>


