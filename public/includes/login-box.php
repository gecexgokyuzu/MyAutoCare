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
                    <input type="email" class="form-control needs-validation" id="email" data-name0="email" placeholder="<?= $lang["text"]["your@email.com"] ?>" autocomplete="email" required>
                    <label for="email"><?= $lang["text"]["Email"] ?></label>
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3 fade d-none slow-fade" id="phone-input-wrapper">
                <div class="form-floating mb-3" id="phone-input">
                    <input type="tel" class="form-control needs-validation" id="phone" data-name0="phone" placeholder="<?= $lang["text"]["Phone"] ?>" autocomplete="tel" required>
                    <label for="phone"><?= $lang["text"]["Phone"] ?></label>
                    <div class="invalid-feedback">
                        Please enter a valid phone number.
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3 fade d-none slow-fade" id="idnumber-input-wrapper">
                <div class="form-floating mb-3" id="idnumber-input">
                    <input type="number" class="form-control needs-validation" id="idnumber" data-name0="idnumber" placeholder="<?= $lang["text"]["ID Number"] ?>" autocomplete="on" required>
                    <label for="idnumber"><?= $lang["text"]["ID Number"] ?></label>
                    <div class="invalid-feedback">
                        Please enter a valid ID Number.
                    </div>
                </div>
            </div>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control needs-validation" id="password" placeholder="<? $lang["text"]["Password"] ?>" data-name0="password" autocomplete="current-password" required>
            <label for="password"><?= $lang["text"]["Password"] ?></label>
            <div class="invalid-feedback">
                Please enter your password.
            </div>
        </div>
        <div class="form-group form-check mb-2 mx-1">
            <input type="checkbox" class="form-check-input" id="remember">
            <label class="form-check-label" for="remember"><?= $lang["text"]["Keep me logged in"] ?></label>
        </div>
        <div class="w-100">
            <button class="btn btn-primary btn-action btn-block login-button w-100"><?= $lang['text']['Login'] ?></button>
        </div>
    </div>
</div>