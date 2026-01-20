<?php
require_once __DIR__ . '/config.php';

require_once INCLUDES_PATH . '/helpers.php';
require_once TEMPLATES_PATH . '/header.tpl';

echo "<br>";



?>


	<div class="main_window ">

		<div class="content active">
			<div class="some_content ">
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod dolor eos distinctio. Fugiat dolorum distinctio inventore sequi ratione? Officia soluta eaque, rem nostrum suscipit velit, unde porro animi in molestiae, iste minus vitae impedit eius vel tempora ducimus accusamus quam minima nulla architecto temporibus cupiditate ipsa tenetur. Sequi ipsum esse, maiores consectetur corporis animi excepturi nulla voluptates nisi, fuga perspiciatis repudiandae officia rem, quisquam placeat qui. Laudantium, doloribus tempora odit consequatur earum hic. Pariatur earum expedita harum autem sunt cupiditate accusantium? Eaque praesentium ratione officia cupiditate vitae facilis velit cum adipisci mollitia! Quasi suscipit pariatur nihil ipsum atque quis tempore.</p>
			</div>
		</div>
		


		<div class="login_window_bagraund active">
			<div class="login_window_wrapper">
				<div class="auth-tabs">
					<ul>
						<li><button type="button">authorization</button></li>
						<li><button type="button">registration</button></li>
					</ul>
				</div>
				
				<div class="auth-content">
					<form class="auth-window" id="auth_window" name="auth_window" action="" method="post">
						
						<label for="user_login">Login</label>
						<input 
							type="text"
							name="user_login"
							id="user_login"
							placeholder="Login">
						<label for="user_pas">Password</label>
						<input 
							type="password"
							id="user_pas"
							name="user_pas"
							placeholder="******">
						<button type="submit">send</button>			
					</form>

					<form class="reg_window" name="reg_window" id="reg_window" action="" method="post">
					
						<label for="new_user_login">Login</label>
						<input 
							type="text"
							name="new_user_login"
							id="new_user_login"
							placeholder="Login">
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
						<br>
						<button type="submit">registration user</button>
					</form>

				</div>
			</div>
		</div>
	
		<div class="user_window is-hidden" id="user_panel">
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

		<div class="admin_window is-hidden" id="admin_panel">

		</div>

	</div>
</div>
<?php
	require_once TEMPLATES_PATH . '/footer.tpl';
?>


