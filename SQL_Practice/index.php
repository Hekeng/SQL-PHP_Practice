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
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci non, sint rem maxime velit, quasi soluta neque dolorem maiores beatae suscipit animi, a vitae! Necessitatibus aliquam ducimus reiciendis enim ullam?
				Aspernatur ipsum eveniet earum asperiores, nam ratione numquam dignissimos, fuga in ullam sequi voluptas neque repudiandae ea nihil suscipit cupiditate beatae reiciendis eos. Deserunt officia a quibusdam non laboriosam porro.
				Placeat, dicta! Quia et ad perspiciatis incidunt iure, laborum laboriosam, atque ullam culpa, dolore aperiam odit ab autem nemo qui id soluta vero non praesentium expedita perferendis? Placeat, natus similique.
				Optio distinctio quam doloremque veritatis. Delectus, labore quos! Modi assumenda impedit, neque necessitatibus nulla natus error dolores atque a explicabo harum molestiae tenetur ab vel iste beatae. Eveniet, cupiditate laboriosam.
				Soluta, voluptates repudiandae! Rerum reprehenderit sunt cupiditate doloribus architecto velit temporibus harum excepturi. Repellat assumenda quod voluptatum, nulla iusto quos amet omnis officiis facere laboriosam deserunt vero! Et, atque voluptatem.
				Delectus mollitia commodi perferendis non repudiandae, suscipit deserunt reiciendis! Omnis laborum veniam necessitatibus provident a ut qui nesciunt expedita molestiae enim, recusandae harum accusamus at alias iusto iure distinctio cumque!
				Ad doloribus doloremque, quia in veritatis est dignissimos magnam cumque iste totam amet fugiat perspiciatis quam ullam facilis praesentium, perferendis accusantium quibusdam libero! Ipsa fugit ab nostrum consequuntur at reiciendis?
				Asperiores, obcaecati. Iure eaque culpa optio aut facere repellendus ad, repellat hic, ipsum nobis a illum quas sunt. Excepturi autem cumque velit consequuntur aperiam molestias cupiditate eos libero corrupti architecto.
				Accusamus mollitia nobis laborum dolorum illo porro dolorem, ex natus consequuntur autem cum hic quod sint! Dignissimos labore saepe deleniti. Eos dignissimos nemo error non sequi accusamus exercitationem corrupti esse!
				Laudantium earum sed recusandae in praesentium dolorum molestiae ratione! Voluptas ducimus, veritatis veniam debitis sunt id vel, autem repudiandae amet tempora iste, expedita inventore reprehenderit dolorum nisi architecto. Maxime, non!
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
								data-action="switch" 
								data-target="form-login"
								type="button">
							Authorization
						</button>
					<li>
						<button class="auth-tab" 
								data-action="switch" 
								data-target="form-reg" 
								type="button">
							Registration
						</button>
					</li>
				</ul>
				
				
				<div class="auth-content">
					<form class="auth-form-login " 
							data-panel="form-login"
							id="auth_form_login"
							name="auth_form_login" 
							action="" 
							method="post">
						
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
						<!-- <label class="is-hidden" for="new_user_pas_rep ">auth-spacer</label>
						<input 
							class="auth-spacer is-hidden"
							type="text"
							placeholder="******"> -->
						<!-- <br> -->
						<button class="btn btn-submit" type="submit">Send</button>			
					</form>

					<form class="auth-form-reg is-hidden" 
						data-panel="form-reg" 
						name="reg_window" 
						id="reg_window" 
						action="" 
						method="post">
					
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


