<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Proba</title>
<?php 
	add_css('reset'); 
	add_css('style'); 

	add_js('script');
	
	
?>


</head>

<body>

<header class="main-header">
  <div class="header-container">
    
    <a href="/" class="logo-box">
      <strong>Alt-Inflation</strong>
    </a>

    <nav class="main-nav">
      <ul class="nav-list">
        <li class="nav-item"><a href="#about" class="nav-link">About Us</a></li>
        <li class="nav-item"><a href="#contacts" class="nav-link">Contacts</a></li>
        <li class="nav-item"><a href="#responsibility" class="nav-link">Responsibility</a></li>
      </ul>
    </nav>

    <div class="auth-box">
      
      <button
         class="btn btn-header" 
         data-action="open" 
         data-target="auth-overlay">
         Sign In
      </button>

      <div class="avatar"></div>
    </div>

  </div>
</header>

