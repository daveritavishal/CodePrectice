
<?php
$name = "";
$email = "";
$mobile = "";
$gender = "";
$course = "";
$city = "";
$submitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $mobile = trim($_POST["mobile"] ?? "");
    $gender = $_POST["gender"] ?? "";
    $course = $_POST["course"] ?? "";
    $city = $_POST["city"] ?? "";

    $submitted = true;
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card shadow mt-5">

                    <div class="card-header bg-primary text-white text-center">
                        <h1>Student Registration</h1>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" id="studentForm">
                            <div class="row mb-3">
                                
<?php if ($submitted): ?>

    <div class="alert alert-success mt-4">
        Student Registered Successfully!
    </div>

    <div class="card mt-3">
        <div class="card-header bg-primary text-white">
            <h4>Student Details</h4>
        </div>

        <div class="card-body">
            <p>
                <strong>Student Name:</strong>
                <?= htmlspecialchars($name) ?>
            </p>

            <p>
                <strong>Email:</strong>
                <?= htmlspecialchars($email) ?>
            </p>

            <p>
                <strong>Mobile:</strong>
                <?= htmlspecialchars($mobile) ?>
            </p>

            <p>
                <strong>Gender:</strong>
                <?= htmlspecialchars($gender) ?>
            </p>

            <p>
                <strong>Course:</strong>
                <?= htmlspecialchars($course) ?>
            </p>

            <p>
                <strong>City:</strong>
                <?= htmlspecialchars($city) ?>
            </p>
        </div>
    </div>

<?php endif; ?>

                                <label for="name" class="col-md-4 col-form-label"> Name : </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="Rita Dave">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label">Email :</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="mobile" class="col-md-4 col-form-label"> Mobile :</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter 10 digit mobile number">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label"> Gender :</label>
                                <div class="col-md-8">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                                        <label class="form-check-label" for="male"> Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="other" value="Other">
                                        <label class="form-check-label" for="other">Other </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="course" class="col-md-4 col-form-label"> Course :</label>
                                <div class="col-md-8">
                                    <select class="form-select" id="course" name="course">
                                        <option value="">Select Course</option>
                                        <option value="PHP">PHP</option>
                                        <option value="Laravel">Laravel</option>
                                        <option value="ASP.NET">ASP.NET</option>
                                        <option value="Python">Python</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="city" class="col-md-4 col-form-label"> City : </label>
                                <div class="col-md-8">
                                    <select class="form-select" id="city" name="city">
                                        <option value="">Select City</option>
                                        <option value="Bhavnagar">Bhavnagar</option>
                                        <option value="Surat">Surat</option>
                                        <option value="Ahmedabad">Ahmedabad</option>
                                        <option value="Vadodara">Vadodara</option>
                                    </select>

                                </div>
                            </div>
                            <div class="row">
                                <div >
                                    <button type="submit" class="btn btn-primary w-100" >  Register </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script src="validation.js"></script>

</body>

</html>