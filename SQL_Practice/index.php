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

		<div class="content active">
			<div class="some_content ">
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod dolor eos distinctio. Fugiat dolorum distinctio inventore sequi ratione? Officia soluta eaque, rem nostrum suscipit velit, unde porro animi in molestiae, iste minus vitae impedit eius vel tempora ducimus accusamus quam minima nulla architecto temporibus cupiditate ipsa tenetur. Sequi ipsum esse, maiores consectetur corporis animi excepturi nulla voluptates nisi, fuga perspiciatis repudiandae officia rem, quisquam placeat qui. Laudantium, doloribus tempora odit consequatur earum hic. Pariatur earum expedita harum autem sunt cupiditate accusantium? Eaque praesentium ratione officia cupiditate vitae facilis velit cum adipisci mollitia! Quasi suscipit pariatur nihil ipsum atque quis tempore.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod dolor eos distinctio. Fugiat dolorum distinctio inventore sequi ratione? Officia soluta eaque, rem nostrum suscipit velit, unde porro animi in molestiae, iste minus vitae impedit eius vel tempora ducimus accusamus quam minima nulla architecto temporibus cupiditate ipsa tenetur. Sequi ipsum esse, maiores consectetur corporis animi excepturi nulla voluptates nisi, fuga perspiciatis repudiandae officia rem, quisquam placeat qui. Laudantium, doloribus tempora odit consequatur earum hic. Pariatur earum expedita harum autem sunt cupiditate accusantium? Eaque praesentium ratione officia cupiditate vitae facilis velit cum adipisci mollitia! Quasi suscipit pariatur nihil ipsum atque quis tempore.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod dolor eos distinctio. Fugiat dolorum distinctio inventore sequi ratione? Officia soluta eaque, rem nostrum suscipit velit, unde porro animi in molestiae, iste minus vitae impedit eius vel tempora ducimus accusamus quam minima nulla architecto temporibus cupiditate ipsa tenetur. Sequi ipsum esse, maiores consectetur corporis animi excepturi nulla voluptates nisi, fuga perspiciatis repudiandae officia rem, quisquam placeat qui. Laudantium, doloribus tempora odit consequatur earum hic. Pariatur earum expedita harum autem sunt cupiditate accusantium? Eaque praesentium ratione officia cupiditate vitae facilis velit cum adipisci mollitia! Quasi suscipit pariatur nihil ipsum atque quis tempore.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod dolor eos distinctio. Fugiat dolorum distinctio inventore sequi ratione? Officia soluta eaque, rem nostrum suscipit velit, unde porro animi in molestiae, iste minus vitae impedit eius vel tempora ducimus accusamus quam minima nulla architecto temporibus cupiditate ipsa tenetur. Sequi ipsum esse, maiores consectetur corporis animi excepturi nulla voluptates nisi, fuga perspiciatis repudiandae officia rem, quisquam placeat qui. Laudantium, doloribus tempora odit consequatur earum hic. Pariatur earum expedita harum autem sunt cupiditate accusantium? Eaque praesentium ratione officia cupiditate vitae facilis velit cum adipisci mollitia! Quasi suscipit pariatur nihil ipsum atque quis tempore.</p>
			</div>
		</div>
		


		<div class="auth-overlay ">
			<div class="auth-card">
				<button type="button" class="btn-exit">&times;</button>
				<div class="auth-tabs">
					<ul>
						<li><button class="is-active" type="button">authorization</button></li>
						<li><button type="button">registration</button></li>
					</ul>
				</div>
				
				<div class="auth-content">
					<form class="auth-form-login" id="auth-form-login" name="auth-form-login" action="" method="post">
						
						<label for="user_login">Login</label>
						<input 
							type="text"
							name="user_login"
							id="user_login"
							placeholder="Login"
							autofocus>
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
						<button class="btn-submit" type="submit">send</button>			
					</form>

					<form class="auth-form-reg is-hiden" name="reg_window" id="reg_window" action="" method="post">
					
						<label for="new_user_login">Login</label>
						<input 
							type="text"
							name="new_user_login"
							id="new_user_login"
							placeholder="Login"
							autofocus>
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
						<button class="btn-submit" type="submit">registration user</button>
					</form>

				</div>
			</div>
		</div>
	
		<div class="user_window is-none" id="user_panel">
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


