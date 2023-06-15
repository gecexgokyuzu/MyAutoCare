<footer class="bg-dark text-light">
    <div class="container">
        <div class="row justify-content-between align-items-center m-3">
            <div class="col-md-4">
                <!-- Contact information -->
                <h5 class="d-md-none nav-item" data-bs-toggle="collapse" data-bs-target="#contact" aria-expanded="false" aria-controls="contact">
                    <a href="#" class="nav-link">Contact Us</a>
                </h5>
                <div class="collapse d-md-block justify-content-center text-primary" id="contact">
                    <div class="flex-md-row mb-2">
                        <p class="col-12">Phone: (123) 456-7890</p>
                        <p class="col-12">Email: info@myautocare.com</p>
                    </div>
                    <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Contact Form</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Your Email</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Send message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-1">
                <!-- Useful links -->
                <h5 class="d-md-none nav-item" data-bs-toggle="collapse" data-bs-target="#links" aria-expanded="false" aria-controls="links">
                    <a href="#" class="nav-link">Useful Links</a>
                </h5>
                <div class="collapse d-md-block justify-content-center" id="links">
                    <ul class="navbar-nav mb-1">
                        <li><a href="#" class="nav-link-primary">FAQ</a></li>
                        <li><a href="#" class="nav-link-primary">Support</a></li>
                        <li><a href="#" class="nav-link-primary">Terms of Service</a></li>
                        <li><a href="#" class="nav-link-primary">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 justify-content-between">
                <!-- Logo --> <!-- Trademark -->
                <div class="justify-content-center text-dark align-items-center">
                    <div class="navbar-brand mx-auto d-none d-md-block">
                        <img src="../assets/images/CMHlogo.png" alt="Logo" class="navbar-logo">
                    </div>
                    <p><small><em>&copy; 2023 MyAutoCare, designed by <a href="#" class="link-dark">OmeDesign</em></a></small></p>
                </div>
            </div>
</footer>