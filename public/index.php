<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyAutoCare</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link href="assets/css/styles.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <main class="container flex-shrink-0">
        <div class="d-flex flex-wrap justify-content-center mb-3">
            <div class="card m-4">
                <img src="assets/images/concierge.jpg" class="card-img-top" alt="Concierge Image">
                <div class="card-body">
                    <h5 class="card-title">Concierge</h5>
                    <p class="card-text">Concierge service description.</p>
                    <a href="concierge.php" class="btn btn-primary">Go to Concierge</a>
                </div>
            </div>
            <div class="card m-4">
                <img src="assets/images/taxi.jpg" class="card-img-top" alt="Taxi Image">
                <div class="card-body">
                    <h5 class="card-title">Taxi</h5>
                    <p class="card-text">Taxi service description.</p>
                    <a href="taxi.php" class="btn btn-primary">Go to Taxi</a>
                </div>
            </div>
            <div class="card m-4">
                <img src="assets/images/road_assistant.jpg" class="card-img-top" alt="Road Assistant Image">
                <div class="card-body">
                    <h5 class="card-title">Road Assistant</h5>
                    <p class="card-text">Road Assistant service description.</p>
                    <a href="road_assistant.php" class="btn btn-primary">Go to Road Assistant</a>
                </div>
            </div>
            <div class="card m-4">
                <img src="assets/images/drive_home_unlimited.jpg" class="card-img-top" alt="Drive Home Unlimited Image">
                <div class="card-body">
                    <h5 class="card-title">Drive Home Unlimited</h5>
                    <p class="card-text">Drive Home Unlimited service description.</p>
                    <a href="drive_home_unlimited.php" class="btn btn-primary">Go to Drive Home Unlimited</a>
                </div>
            </div>
            <div class="card m-4">
                <img src="assets/images/surface_plan.jpg" class="card-img-top" alt="Surface Plan Image">
                <div class="card-body">
                    <h5 class="card-title">Surface Plan</h5>
                    <p class="card-text">Surface Plan service description.</p>
                    <a href="surface_plan.php" class="btn btn-primary">Go to Surface Plan</a>
                </div>
            </div>
            <div class="card m-4">
                <img src="assets/images/courtesy_car.jpg" class="card-img-top" alt="Courtesy Car Image">
                <div class="card-body">
                    <h5 class="card-title">Courtesy Car</h5>
                    <p class="card-text">Courtesy Car service description.</p>
                    <a href="courtesy_car.php" class="btn btn-primary">Go to Courtesy Car</a>
                </div>
            </div>
            <div class="card m-4">
                <img src="assets/images/armed_response.jpg" class="card-img-top" alt="Armed Response Image">
                <div class="card-body">
                    <h5 class="card-title">Armed Response</h5>
                    <p class="card-text">Armed Response service description.</p>
                    <a href="armed_response.php" class="btn btn-primary">Go to Armed Response</a>
                </div>
            </div>
            <div class="card m-4">
                <img src="assets/images/hijack_assist.jpg" class="card-img-top" alt="Hijack Assist Image">
                <div class="card-body">
                    <h5 class="card-title">Hijack Assist</h5>
                    <p class="card-text">Hijack Assist service description.</p>
                    <a href="hijack_assist.php" class="btn btn-primary">Go to Hijack Assist</a>
                </div>
            </div>
            <div class="card m-4">
                <img src="assets/images/please_call_me.jpg" class="card-img-top" alt="Please Call Me Image">
                <div class="card-body">
                    <h5 class="card-title">Please Call Me</h5>
                    <p class="card-text">Please Call Me service description.</p>
                    <a href="please_call_me.php" class="btn btn-primary">Go to Please Call Me</a>
                </div>
            </div>
            <div class="card m-4">
                <img src="assets/images/my_profile.jpg" class="card-img-top" alt="My Profile Image">
                <div class="card-body">
                    <h5 class="card-title">My Profile</h5>
                    <p class="card-text">My Profile service description.</p>
                    <a href="my_profile.php" class="btn btn-primary">Go to My Profile</a>
                </div>
            </div>
        </div>
    </main>
    <?php include 'includes/footer.php'; ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <script src="assets/javascript/script.js"></script>
    <!-- Modal -->
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
</body>

</html>