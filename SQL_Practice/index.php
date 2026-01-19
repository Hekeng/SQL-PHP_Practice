<?php
require_once __DIR__ . '/config.php';

require_once INCLUDES_PATH . '/helpers.php';
require_once TEMPLATES_PATH . '/header.tpl';

echo "<br>";



?>


	<div class="main_window">

		<div class="content active">
			<div class="some_content">
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod dolor eos distinctio. Fugiat dolorum distinctio inventore sequi ratione? Officia soluta eaque, rem nostrum suscipit velit, unde porro animi in molestiae, iste minus vitae impedit eius vel tempora ducimus accusamus quam minima nulla architecto temporibus cupiditate ipsa tenetur. Sequi ipsum esse, maiores consectetur corporis animi excepturi nulla voluptates nisi, fuga perspiciatis repudiandae officia rem, quisquam placeat qui. Laudantium, doloribus tempora odit consequatur earum hic. Pariatur earum expedita harum autem sunt cupiditate accusantium? Eaque praesentium ratione officia cupiditate vitae facilis velit cum adipisci mollitia! Quasi suscipit pariatur nihil ipsum atque quis tempore.</p>
			</div>
		</div>
		



		<div  class="auth-window " id="auth_window">

			<form action="" method="post">
				<h2>Login</h2>
				<label for="user_id">User name</label>
				<input 
					type="text"
					id="user_id"
					placeholder="name">
				<label for="user_pas">Password</label>
				<input 
					type="password"
					id="user_pas"
					placeholder="******">
				<button type="submit">send</button>
				<br>
				<button type="button">add new user</button>
			</form>

		</div>

		<div class="new_user_window " id="reg_window">
			<form action="" method="post">
				<h2>New user</h2>
				<label for="new_user_id">User name</label>
				<input 
					type="text"
					id="new_user_id"
					placeholder="name">
				<label for="new_user_pas">Password</label>
				<input 
					type="password"
					id="new_user_pas"
					placeholder="******">
				<label for="new_user_pas_rep">Repeat Password</label>
				<input 
					type="password"
					id="new_user_pas_rep"
					placeholder="******">
				<br>
				<button type="button">registration user</button>
			</form>

		</div>

		<div class="user_window " id="user_panel">
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

		<div class="admin_window" id="admin_panel">

		</div>

	</div>
	
<?php
	require_once TEMPLATES_PATH . '/footer.tpl';
?>


