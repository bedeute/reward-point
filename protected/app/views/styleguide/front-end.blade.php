@extends('layouts.styleguide.main')

@section('content')
<nav role="navigation" class="navbar-default navbar-static-side">
	<div class="sidebar-collapse">				  
		<ul id="sidemenu" class="nav expanded-menu">
			<li class="logo-header">
				<a class="navbar-brand" href="http://reward.dev/dashboard">
					<img src="http://reward.dev/sximo/images/logo.png" alt="Laravel - Sximo">
				</a>
			</li>
			<li class="rp-login">
				<div class="rp-login-inner">
					<h5 style="margin-top: 0;" class="text-center">Cek your reward</h5>
					<hr style="margin: 4px 0 8px;">
					<form role="form">
						<div class="form-group">
							<label for="name">Name according by ID Card</label>
							<input type="text" class="form-control" id="name" placeholder="your name">
						</div>
						<div class="form-group">
							<label for="phone">Phone number</label>
							<input type="text" id="phone" class="form-control" placeholder="081xxxx">
						</div>
						<button type="button" class="btn btn-primary">submit</button>
					</form>
				</div>
			</li>
			<li class="rp-how">
				<div class="rp-how-inner">
					<h4>How it works</h4>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</li>
		</ul>
	</div>
</nav>
<div class="page-wrapper" >
	
	<h1>Dapatkan hadiah menarik dari <a href="#">Ponorogo City Center</a> dengan menukarkan struk belanja anda dengan Point</h1>
	<hr>
	<div class="container">
		<div class="row">
			<div class="xs">
				
			</div>
		</div>
	</div>
</div>
@stop