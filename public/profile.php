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
    <!-- Flaticon -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <main>
        <?php include 'includes/live-chat.php'; ?>
        <div class="container">
            <div class="profile-box ">
                <div class="mb-2 pb-1">
                    <h1 class="text-light text-center fw-bold text-decoration-underline">My Profile</h1>
                </div>
                <div class="profile-details d-flex flex-row flex-wrap m-3 justify-content-around align-items-center">
                    <div class="col-12 col-md-6 profile-img px-0 m-2">
                        <img class="rounded-circle" src="https://placeholder.pics/svg/150" />
                    </div>
                    <div class="col-12 col-md-6 m-2 text-light fst-italic">
                        <span class="fw-bold">John Doe</span><br>
                        <table class="table table-sm text-light">
                            <tbody>
                                <tr>
                                    <td>Acoount Creation Date</td>
                                    <td>11.11.11</td>
                                </tr>
                                <tr>
                                    <td>Last Login</td>
                                    <td>11.11.11</td>
                                </tr>
                                <tr>
                                    <td>Account Type</td>
                                    <td>Customer</td>
                                </tr>
                                <tr>
                                    <td>Active Package</td>
                                    <td>Level 2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 profile-info d-flex">
                    <div class="row g-3">
                        <div class="col-12 col-lg-6">
                            <label for="name" class="form-label text-light mb-1">Name</label>
                            <input type="text" class="form-control form-control-sm" id="name" value="John" readonly>
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="surname" class="form-label text-light mb-1">Surname</label>
                            <input type="text" class="form-control form-control-sm" id="surname" value="Doe" readonly>
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="gender" class="form-label text-light mb-1">Gender</label>
                            <input type="text" class="form-control form-control-sm" id="gender" value="Male" readonly>
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="mobile-number" class="form-label text-light mb-1">Mobile Number</label>
                            <input type="text" class="form-control form-control-sm" id="mobile-number" value="123-456-7890" readonly>
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="phone-number" class="form-label text-light mb-1">Phone Number</label>
                            <input type="text" class="form-control form-control-sm" id="phone-number" value="098-765-4321" readonly>
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="alternative-number" class="form-label text-light mb-1">Alternative Number</label>
                            <input type="text" class="form-control form-control-sm" id="alternative-number" value="098-765-4321" readonly>
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="email-address" class="form-label text-light mb-1">Email Address</label>
                            <input type="text" class="form-control form-control-sm" id="email-address" value="johndoe@example.com" readonly>
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="city" class="form-label text-light mb-1">City</label>
                            <input type="text" class="form-control form-control-sm" id="city" value="New York" readonly>
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="address" class="form-label text-light mb-1">Address</label>
                            <input type="text" class="form-control form-control-sm" id="address" value="123 Main St" readonly>
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="postal-code" class="form-label text-light mb-1">Postal Code</label>
                            <input type="text" class="form-control form-control-sm" id="postal-code" value="10001" readonly>
                        </div>
                    </div>
                </div>
                <div class="container">
                    
                </div>
            </div>
        </div>
    </main>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/modal.php'; ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/javascript/script.js"></script>
</body>

</html>