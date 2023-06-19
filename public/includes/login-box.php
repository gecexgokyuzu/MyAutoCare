<div class="d-flex align-items-center">
    <div class="login-box has-form">
        <h5 class="text-light text-center mb-3 ">Please choose a login method</h5>
        <div class="d-flex mb-4 justify-content-around">
            <button type="button" class="btn btn-sm btn-primary col-3" id="email-button" onclick="toggleInput('email')" disabled>Email</button>
            <button type="button" class="btn btn-sm btn-primary col-3" id="phone-button" onclick="toggleInput('phone')">Phone</button>
            <button type="button" class="btn btn-sm btn-primary col-3" id="idnumber-button" onclick="toggleInput('idnumber')">ID Number</button>
        </div>
        <div class="input-carousel mb-3">
            <div class="form-floating mb-3 fade d-none slow-fade" id="email-input-wrapper">
                <div class="form-floating mb-3" id="email-input">
                    <input type="email" class="form-control needs-validation" id="email" placeholder="your@email.com" autocomplete="email" required>
                    <label for="email">Email</label>
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3 fade d-none slow-fade" id="phone-input-wrapper">
                <div class="form-floating mb-3" id="phone-input">
                    <input type="tel" class="form-control needs-validation" id="phone" placeholder="012 234 5678" autocomplete="tel" required>
                    <label for="phone">Phone</label>
                    <div class="invalid-feedback">
                        Please enter a valid phone number.
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3 fade d-none slow-fade" id="idnumber-input-wrapper">
                <div class="form-floating mb-3" id="idnumber-input">
                    <input type="number" class="form-control needs-validation" id="idnumber" placeholder="123456789" autocomplete="on" required>
                    <label for="idnumber">ID Number</label>
                    <div class="invalid-feedback">
                        Please enter a valid ID Number.
                    </div>
                </div>
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
        <div class="w-100">
            <button class="btn btn-primary btn-action btn-block login-button w-100"> <!--<?= $lang['text']['Login'] ?>-->Login</button>
        </div>
    </div>
</div>