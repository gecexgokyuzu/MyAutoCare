<div class="d-flex align-items-center">
    <div class="login-box">
        <form action="login.php" method="post">
            <h4 class="text-light text-center mb-1">Please choose login method</h4>
            <div class="d-flex mb-3 justify-content-around">
                <button type="button" class="btn btn-sm btn-primary col-3" disabled>Email</button>
                <button type="button" class="btn btn-sm btn-primary col-3">Phone</button>
                <button type="button" class="btn btn-sm btn-primary col-3">ID Number</button>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control needs-validation" id="email" placeholder="your@email.com" autocomplete="email" required>
                <label for="email">Email</label>
                <div class="invalid-feedback">
                    Please enter a valid email address.
                </div>
            </div>
            <div class="form-floating mb-3">
                <input type="tel" class="form-control needs-validation" id="phone" placeholder="012 234 5678" autocomplete="tel" required>
                <label for="phone">Phone</label>
                <div class="invalid-feedback">
                    Please enter a valid phone number.
                </div>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control needs-validation" id="idnumber" placeholder="123456789" autocomplete="on" required>
                <label for="idnumber">ID Number</label>
                <div class="invalid-feedback">
                    Please enter a valid ID Number.
                </div>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control needs-validation" id="password" placeholder="Password" autocomplete="current-password" required>
                <label for="password">Password</label>
                <div class="invalid-feedback">
                    Please enter your password.
                </div>
            </div>
            <div class="form-group form-check mb-2 mx-1">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">Keep me logged in</label>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
</div>