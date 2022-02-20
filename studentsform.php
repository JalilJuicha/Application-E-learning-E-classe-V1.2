<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-LEARNING-APPLICATION /Studentsform</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <script src="bootstrap5/js/bootstrap.min.js"></script>
    <script src="bootstrap5/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <section class="container-fluid">
        <div class="row">
            <!-- Side Bar -->

            <?php include "include/sideBar.php"  ?>

            <div class="col-10">
                <!-- Nav Bar -->
                <?php include "include/navBar.php" ?>

                <!-- Content -->
                <div class="row mt-5 flex-row">
                    <div class="col-10  d-flex flex-nowrap justify-content-between w-100">
                        <h2>Students List</h2>
                    </div>

                    <form action="addstudents.php" method="POST">
                        <div class=" d-flex flex-column text-muted ">
                            <label for="" class="col-form-label">Name</label>
                            <input type="text" id="name" name="name" placeholder="Enter your Name"
                                class="w-100 rounded-3 border  p-2 bg-transparent form-control">
                        </div>
                        <div class=" d-flex flex-column text-muted mt-3 text">
                            <label for="">Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter your Email"
                                class="w-100 rounded-3 border p-2 bg-transparent form-control">
                        </div>
                        <div class=" d-flex flex-column text-muted mt-3 text">
                            <label for="">Phone</label>
                            <input type="number" id="phone" name="phone" placeholder="Enter your PhoneNumber"
                                class="w-100 rounded-3 border p-2 bg-transparent form-control">
                        </div>
                        <div class=" d-flex flex-column text-muted mt-3 text">
                            <label for="">Enroll Number</label>
                            <input type="number" id="number" name="enroll_number" placeholder="Enter your EnrollNumber"
                                class="w-100 rounded-3 border p-2 bg-transparent form-control">
                        </div>
                        <div class=" d-flex flex-column text-muted mt-3 text">
                            <label for="date_of_admission">Date Of Admission</label>
                            <input type="date" id="number" name="date_of_admission"
                                placeholder="Enter the date of admission"
                                class="w-100 rounded-3 border p-2 bg-transparent form-control">
                        </div>

                        <div class="mt-3">
                            <button type="Submit"
                                class="btn btn-info w-100 rounded-3 border-1 text-white text-uppercase" value="Submit"
                                name="save">Save</button>
                        </div>

                    </form>

                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
</body>

</html>