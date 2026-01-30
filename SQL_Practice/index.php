<?php
require_once __DIR__ . '/config.php';

require_once INCLUDES_PATH . '/helpers.php';
require_once TEMPLATES_PATH . '/header.tpl';


?>

<div class="content-wrapper">

<aside class="sidebar"
		data-panel="sidebar">
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
					<button class="nav-btn settings" 
							data-action="switchTabButtons" 
							data-value="settings">
						<i class="icon-options"></i> Settings
					</button>
				</li>
				<li>
					<button class="nav-btn firstIndex" 
							data-action="switchTabButtons" 
							data-value="firstIndex">
						<i class="icon-FirstIndex"></i> First Index
					</button>
				</li>
								<li>
					<button class="nav-btn secondIndex" 
							data-action="switchTabButtons" 
							data-value="secondIndex">
						<i class="icon-FirstIndex"></i> Second Index
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
		<div class="options-panel" 
			data-panel="settings">
			<h3>Global Settings</h3>
			<p> Lorem ipsum dolor sit amet 
			 </p>
		</div>
		<div class="options-panel " 
				data-panel="first_index">
			<h3>First Index</h3>
			<input type="number">
		</div>
			<div class="options-panel" 
				data-panel="second_index">
			<h3>Second Index</h3>
			<input type="number">
		</div>
	</div>
</aside>

    <main class="main_window">
 
        <div class="content">
            <div class="guest-content" data-panel="guest_view">
                <h1>Inflation Indexes</h1>
                <p>Please Sign In to customize your dashboard.</p>
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis sunt quod atque, qui rem est neque voluptate delectus! Et placeat nesciunt architecto labore minus cupiditate soluta eos deleniti facere eaque!tetur? Nulla dolore, earum ipsam odio iure explicabo culpa voluptatum fuga!
				tempora placeat voluptatibus rerum atque?</p>
            </div>



		<div class="auth-overlay" 
				data-panel="auth-overlay"> 
			<div class="auth-backdrop" 
				data-action="closeAuthOverlay"
				data-value="closed">
   			 </div>
			<div class="auth-card">
				<button 
					type="button" 
					class="btn-exit" 
					data-action="closeAuthOverlay"
					data-value="closed">
					<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</button>
				
				<ul class="switch-tabs" data-panel="switch-tabs-container">
					<li>
						<button class="auth-tab auth-tab-auth"
								role="heading" 
        						aria-level="2" 
								data-action="switchAuthTab"
								data-value="authorization"
								type="button">
							Authorization
						</button>
					<li>
						<button class="auth-tab auth-tab-reg" 
								role="heading" 
        						aria-level="2" 
								data-action="switchAuthTab"
								data-value="registration"
								type="button">
							Registration
						</button>
					</li>
				</ul>
				
				<div class="auth-content">
					<form class="auth-form-login " 
							id="auth_form_login"
							name="auth_form_login" 
							data-action="loginAsUser"
							data-value="user"
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

					<form class="auth-form-reg" 
						name="reg_window" 
						id="reg_window" 
						data-action="loginAsUser"
						data-value="user"
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


							<div class="sidebar-control-panel">
				<button class="sidebar-toggle btn-burger" 
						data-action="toggleSidebar" 
						data-value="">
					<svg class="icon-design icon-menu" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
						<line class="line-top" x1="4" y1="6" x2="20" y2="6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
						<line class="line-mid" x1="4" y1="12" x2="20" y2="12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
						<line class="line-bot" x1="4" y1="18" x2="20" y2="18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
					</svg>
				</button>

				<button class="sidebar-toggle btn-schevrone" 
						data-action="switch" 
						data-target="switch-tabs-container">
				<svg class="icon-design icon-chevron" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
				<path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
				</button>

				<button class="sidebar-toggle btn-kros" 
						data-action="toggleSidebar" 
						data-value="">
					<svg class="icon-design icon-close" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
						<path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</button>
			</div>
        </div>
    </main>

</div>
<?php
	require_once TEMPLATES_PATH . '/footer.tpl';
?>


