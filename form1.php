<?php include("navbar.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form id="userForm">
        <div class="container my-5">
            <div class="card shadow">
                <div class="card-body">
                    <h1 class="text-center mb-4">Application Form </h1>
                    <div class="row g-3">
                        <!-- Full Name -->
                        <div class="col-md-6">
                            <label for="fullName" class="form-label required">Full Name:</label>
                            <input type="text" class="form-control" placeholder="Full Name" id="fullName" autofocus
                                maxlength="30">
                        </div>

                        <!-- Email -->
                        <div class="col-md-6">
                            <label for="Email" class="form-label required">Email:</label>
                            <input type="email" class="form-control" placeholder="E-mail" id="Email">
                        </div>

                        <!-- Password -->
                        <div class="col-md-6">
                            <label for="Password" class="form-label required">Password:</label>
                            <input type="password" class="form-control" id="Password" placeholder="Password"
                                minlength="8" maxlength="16">
                        </div>

                        <!-- Gender -->
                        <div class="col-md-6">
                            <label class="form-label">Gender:</label>
                            <div class="form-check" id="Abhi">
                                <input class="form-check-input" type="radio" id="male" name="gender" value="male"
                                    checked>
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="female" name="gender" value="female">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                        </div>

                        <!-- Mobile -->
                        <div class="col-md-6">
                            <label for="Mobile" class="form-label required">Mobile No.:</label>
                            <input type="tel" class="form-control" placeholder="Mobile No" id="Mobile" maxlength="10">
                        </div>

                        <!-- State -->
                        <div class="col-md-6">
                            <label for="State" class="form-label">State:</label>
                            <select id="State" class="form-select">
                                <option value="" selected>Select your State</option>
                                <option value="Bihar">Bihar</option>
                                <option value="UP">UP</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Jharkhand">Jharkhand</option>
                            </select>
                        </div>

                        <!-- Address -->
                        <div class="col-md-6">
                            <label for="Address" class="form-label">Address:</label>
                            <textarea id="Address" class="form-control" rows="3" placeholder="Enter Address"
                                maxlength="150"></textarea>
                        </div>

                        <!-- City -->
                        <div class="col-md-6">
                            <label for="City" class="form-label">City:</label>
                            <input type="text" class="form-control" placeholder="Enter City Name" id="City"
                                maxlength="20">
                        </div>

                        <!-- Pincode -->
                        <div class="col-md-6">
                            <label for="Pincode" class="form-label">Pincode:</label>
                            <input type="text" class="form-control" placeholder="Enter Pincode" id="Pincode"
                                pattern="\d*" maxlength="6">
                        </div>

                        <!-- Date -->
                        <div class="col-md-6">
                            <label for="Date" class="form-label">Date:</label>
                            <input type="date" class="form-control" id="Date">
                        </div>

                        <!-- Upload -->
                        <div class="col-md-6">
                            <label for="Upload" class="form-label">Upload Your CV:</label>
                            <input type="file" class="form-control" id="Upload" accept=".jpg, .jpeg, .png"
                                onchange="previewFile()">
                            <img src="" alt="img_upload" class="img-thumbnail mt-3" id="imgPreview"
                                style="display: none; max-width: 100%; height: 100px;">
                        </div>

                        <!-- Hobbies -->
                        <div class="col-12">
                            <label class="form-label">Hobbies:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="Group" value="Reading"
                                    id="Reading">
                                <label class="form-check-label" for="Reading">Reading</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="Group" value="Traveling"
                                    id="Traveling">
                                <label class="form-check-label" for="Traveling">Traveling</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="Group" value="Cooking"
                                    id="Cooking">
                                <label class="form-check-label" for="Cooking">Cooking</label>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Submit Now</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Preview Image for Upload -->
    <div class="container my-4">
        <h3>Display Data:</h3>
        <p id="output"></p>
        <div id="filePreview"></div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="form1.js"></script>
</body>

</html>

<?php include("footer.php"); ?>