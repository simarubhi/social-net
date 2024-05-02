<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

		@vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
		<header class="row">
			<nav
				class="navbar bg-primary navbar-expand-lg"
				data-bs-theme="dark"
			>
				<div class="d-flex container-xl align-items-center px-3">
					<a
						href="#"
						class="navbar-brand text-light fw-semibold fs-2"
						>Social Net</a
					>

					<button
						class="navbar-toggler"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#navbarCol"
						aria-controls="navbarCol"
						aria-expanded="false"
						aria-label="Toggle navigation"
					>
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="navbar-collapse collapse" id="navbarCol">
						<ul class="navbar-nav ms-auto gap-xl-4 gap-lg-2">
							<li class="nav-item">
								<a
									class="nav-link active"
									aria-current="page"
									{{-- href="{{ route('feed') }}" --}}
									>Home</a
								>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Friends</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">My Profile</a>
							</li>
							<form action="{{ route('users.store') }}" method="POST" class="d-flex" role="search">
								@csrf
								{{-- @method('DELETE') --}}
								<button class="btn btn-danger">Logout</button>
							</form>
						</ul>
					</div>
				</div>
			</nav>
		</header>

        {{ $slot }}

		<footer class="row">
			<nav
				class="navbar bg-primary-subtle navbar-expand-sm d-flex flex-column"
				data-bs-theme="dark"
			>
				<div class="d-flex container-xl align-items-center px-3">
					<ul
						class="navbar-nav mx-auto gap-xl-4 gap-lg-2 align-items-center"
					>
						<li class="nav-item">
							<a
								class="nav-link active"
								aria-current="page"
								href="#"
								>Home</a
							>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Friends</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">My Profile</a>
						</li>
					</ul>
				</div>
				<span class="text-light mt-2 fs-10"
					>Social Net Copyright &copy; 2024</span
				>
			</nav>
		</footer>
    </body>
</html>
