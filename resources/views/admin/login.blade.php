<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="theme-style" rel="stylesheet" href="/assets/css/portal.css">
</head>

<body class="app app-login p-0">
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5" style="display: block;margin: 0px auto;">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">
				    <div class="app-auth-branding mb-4"><a class="app-logo"><img class="logo-icon me-2" src="/assets/images/app-logo.svg" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-5">Log in</h2>
			        <div class="auth-form-container text-start">
						<form class="auth-form login-form" method="POST" action="/admin/login">
							@csrf
							<div class="email mb-3">
								<label class="sr-only" for="signin-email">Email</label>
								<input id="signin-email" name="email" type="email" class="form-control signin-email" placeholder="Email address" required="required">
                            </div>
							<div class="password mb-3">
								<label class="sr-only" for="signin-password">Password</label>
								<input id="signin-password" name="password" type="password" class="form-control signin-password" placeholder="Password" required="required">
                                @if (session('status'))
                                    <p class="text-danger">{{ session('status')}}</p>
                                @endif
							</div>
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Log In</button>
							</div>
						</form>
					</div>
			    </div>
		    </div>
	    </div>
    </div>
</body>
</html>

