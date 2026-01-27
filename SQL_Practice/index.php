<?php
require_once __DIR__ . '/config.php';

require_once INCLUDES_PATH . '/helpers.php';
require_once TEMPLATES_PATH . '/header.tpl';

// echo "<br>";



?>

<div class="content-wrapper" data-status="guest">

<aside class="sidebar">
	<div class="options-navigation">
		<div class="shortUserInfo">
			<div class="avatar"></div>
			<div class="personal_info"></div>
			<div class="userE-mail"></div>
		</div>
		
		<nav class="nav-group">
			<h2 class="nav-caption">Main options</h2>
			<ul class="switch-tabs-button">
				
				<li>
					<button class="nav-btn is-active" 
							data-action="switch" 
							data-target="">
						<i class="icon-options"></i> Global Settings
					</button>
				</li>
				<li>
					<button class="nav-btn" 
							data-action="switch" 
							data-target="">
						<i class="icon-FirstIndex"></i> First Index
					</button>
				</li>
								<li>
					<button class="nav-btn" data-action="switch" data-target="index_calc">
						<i class="icon-FirstIndex""></i> Second Index
					</button>
				</li>
			</ul>
		</nav>

		<div class="nav-group only-user is-none">
			<h2 class="nav-caption">Personal</h2>
			<ul class="switch-tabs-button">
				
				<li>
					<button class="nav-btn" data-action="switch" data-target="user_window">
						My Portfolio
					</button>
				</li>
			</ul>
		</div>
			<div class="nav-group only-admin is-none">
			<h2 class="nav-caption">admin</h2>
			<ul class="switch-tabs-button" >
				<li>
					<button class="nav-btn" data-action="switch" data-target="user_window">
					</button>
				</li>
			</ul>
		</div>
	</div>
	<div class="options">
		<ul>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</aside>

    <main class="main_window">
        
        <button class="sidebar-toggle" data-action="open" data-target="sidebar">☰ Menu</button>

        <div class="content">
            <div class="guest-content" data-panel="guest_view">
                <h1>Inflation Indexes</h1>
                <p>Please Sign In to customize your dashboard.</p>
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis sunt quod atque, qui rem est neque voluptate delectus! Et placeat nesciunt architecto labore minus cupiditate soluta eos deleniti facere eaque!
				Dolorum accusamus reprehenderit iure repudiandae quisquam! Sunt cumque, dolore excepturi ab sit ipsum. Beatae cumque incidunt aspernatur debitis, doloribus a, laborum commodi molestiae ullam, iste reiciendis alias recusandae obcaecati esse.
				Expedita eveniet fugiat, ut maxime sequi facilis voluptatem pariatur accusantium illo dolore aperiam ipsa, minus laborum optio! Rem ut doloremque laboriosam reiciendis pariatur, expedita porro error quis, aliquid, magni facere!
				Dolor quisquam vero tenetur adipisci explicabo distinctio non animi corrupti dolorum? Adipisci ipsum aspernatur, quasi nobis consequuntur error at consectetur? Nulla dolore, earum ipsam odio iure explicabo culpa voluptatum fuga!
				Saepe, voluptatem. Repellendus temporibus impedit consequuntur animi tempore. Voluptatum, velit tempora asperiores enim impedit facere ad. Et dolores delectus voluptatum vero. Eveniet aperiam magni numquam blanditiis dignissimos nihil facilis ipsam.
				Quos ab et enim vel soluta maxime adipisci sequi quae nesciunt, saepe repellat consequatur reiciendis. Qui voluptatem est nostrum cum libero soluta, possimus, quae totam ratione nam repudiandae aspernatur doloribus.
				Necessitatibus temporibus tempora expedita est nobis minus deserunt culpa sint dicta repellat at, libero provident ducimus deleniti fugit labore? Laboriosam dolorem ducimus sit similique necessitatibus quod aliquid voluptatum amet dignissimos.
				Perspiciatis maiores ratione, pariatur explicabo fuga ea aperiam, nostrum alias reprehenderit amet fugit dolor laboriosam iure exercitationem quod labore dolore vel, voluptates iste dicta minima laborum numquam harum repellendus. Libero!
				Maxime vel unde voluptatibus ipsum enim molestiae consequatur sapiente, consequuntur, eos at beatae tempora perferendis? Est fuga nemo similique molestiae voluptas accusamus obcaecati dolor, exercitationem porro assumenda laborum voluptates ratione.
				Nihil animi dolor laborum repellat amet maiores recusandae sed, fuga numquam velit saepe odit quod consequuntur quia sequi, impedit, veritatis error temporibus minima laboriosam? Omnis tempora placeat voluptatibus rerum atque?</p>
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
							placeholder="mail@you-email.com" >
						<span class="error-text"></span>
						<label for="user_pas">Password</label>
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
							placeholder="mail@you-email.com" >
						<span class="error-text"></span>
						<label for="new_user_pas">Password</label>
						<input 
							type="password"
							name="new_user_pas"
							id="new_user_pas"
							placeholder="******">
						<span class="error-text"></span>
						<label for="new_user_pas_rep">Repeat Password</label>
						
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
	
		<div class="user_window is-none" data-panel="user_window">
                <h2>Welcome, <span class="user_name">Vasia</span> !</h2>
                <div class="personal_data">
                    <h3>Your Dashboard Settings</h3>
                    <hr>
                    <form action="" method="post">
                        <ul>
                            <li>
                                <span>E-mail: 213213@gmail.com</span>
                                <input type="text" placeholder="Custom Label">
                                <input type="checkbox" id="notify">
                            </li>
                        </ul>
                        <button type="submit" class="btn">Save changes</button>
                    </form>
                </div>
            </div>

            <div class="admin_window is-none" data-panel="admin_window">
                <h2>Admin Control Panel</h2>
                <p>System status: OK</p>
                </div>
        </div>
    </main>
</div>
</div>
<?php
	require_once TEMPLATES_PATH . '/footer.tpl';
?>


