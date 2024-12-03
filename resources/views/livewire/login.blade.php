<!-- Login 8 - Bootstrap Brain Component -->
<section class="bg-dark p-3 p-md-4 p-xl-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xxl-11">
                <div class="card border-light-subtle shadow-sm">
                    <div class="row g-0">
                        <div class="col-12 col-md-6">
                            <img class="img-fluid rounded-start w-100 h-100 object-fit-cover" loading="lazy"
                                src="https://bootstrapbrain.com/demo/components/logins/login-8/assets/img/logo-img-1.webp"
                                alt="Welcome back you've been missed!">
                        </div>
                        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                            <div class="col-12 col-lg-11 col-xl-10">
                                <div class="card-body p-3 p-md-4 p-xl-5">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-5">
                                                <div class="text-center mb-4">
                                                    <a href="#!">
                                                        <img src="https://bootstrapbrain.com/demo/components/logins/login-8/assets/img/bsb-logo.svg"
                                                            alt="BootstrapBrain Logo" width="175" height="57">
                                                    </a>
                                                </div>
                                                <h4 class="text-center">Welcome back you've been missed!</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <form wire:submit="login">
                                            <div class="row gy-3 overflow-hidden">
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                                            id="email" placeholder="name@example.com"
                                                            wire:model="email">
                                                             @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                        <label for="email" class="form-label">Email</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                                            id="password" value="" placeholder="Password"
                                                            wire:model="password">
                                                             @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                        <label for="password" class="form-label">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="remember_me" id="remember_me">
                                                        <label class="form-check-label text-secondary"
                                                            for="remember_me">
                                                            Keep me logged in
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-grid">
                                                        <button class="btn btn-dark btn-lg" type="submit">Log
                                                            in</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="row">
                                            <div class="col-12">
                                                <div
                                                    class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-center mt-5">
                                                    {{-- <a href="#!" class="link-secondary text-decoration-none">Create new account</a> --}}
                                                    <a href="#!" class="link-secondary text-decoration-none">Forgot
                                                        password</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
