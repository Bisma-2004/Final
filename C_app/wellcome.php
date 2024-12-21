
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
<div class="container p-3">
    <div class="row">
        <div class="col">
        <div class="bg-success text-white text-center rounded p-2 m-2 display-5">Admission form</div>
            <form action="progarm.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <!-- name -->
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="name" required>
                    </div>
                    <div class="col">
                        <!-- fname -->
                    <label for="" class="form-label">Father Name</label>
                    <input type="text" class="form-control" name="fname" placeholder="father name" required>
                    </div>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <!-- address -->
                            <label for="" class="form-label">Address</label>
                            <textarea name="address" class="form-control" required></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <!-- age -->
                            <label for="" class="form-label">Age</label>
                            <input type="number" name="age" class="form-control" required> 
                        </div>
                        <div class="col">
                            <!-- dob -->
                            <label for="" class="form-label">DOB</label>
                            <input type="date" name="dob" class="form-control" required> 
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <!-- dom -->
                            <label for="" class="form-label">Domicile</label>
                            <input type="text" name="dom" class="form-control" placeholder="...." required>
                        </div>
                        <div class="col">
                            <!-- rel -->
                            <label for="" class="form-label">Religion</label>
                            <input type="text"name="rel" class="form-control" placeholder="...." required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <!-- num -->
                             <label for="" class="form-label">Phone No</label>
                            <input type="number" placeholder="Number" name="num" class="form-control" required> 
                        </div>
                        <div class="col">
                            <!-- cnic -->
                            <label for="" class="form-label">Cnic No</label>
                            <input type="number" class="form-control" name="cnic" placeholder="don't add dash" required> 
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <!-- email -->
                            <label for="" class="form-label">Email ID</label>
                            <input type="email" name="email" class="form-control" placeholder="abc@gmail.com" required>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">
                            <!-- gender -->
                            <p>Gender</p>
                            <label for="" class="form-label">Male</label>
                            <input type="radio" class="form-radio-input" name="gender" value="Male" required>
                            <label for="" class="form-label">Female</label>
                            <input type="radio"  class="form-radio-input" name="gender" value="Female" required> 
                        </div>
                        <div class="col">
                            <!-- trade -->
                            <label for="" class="form-label">Trade</label>
                            <input type="text" placeholder="Course name" name="trade" class="form-control" required>
                        </div>
                    </div>

                    
                    <div class="row">
                        <div class="col">
                            <!-- gender -->
                            <p>Hobbies</p>
                            <input type="checkbox" class="form-check-input" name="hoby[]" value="Cricket" >Cricket
                            <input type="checkbox" class="form-check-input" name="hoby[]" value="Editing" >Editing
                            <input type="checkbox" class="form-check-input" name="hoby[]" value="Cooking" >Cooking
                            <input type="checkbox" class="form-check-input" name="hoby[]" value="Dancing" >Dancing
                            <span class="was-validated">

                            </span>
                            </div>
                        <div class="col">
                            <!-- trade -->
                            <p>Country</p>
                            <select name="dropdown" >
                                <option selected disabled>Choose country</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Iran">Iran</option>
                                <option value="China">China</option>
                                <option value="Turkey">Turkey</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <!-- img -->
                            <label for="" class="form-label">Image</label>
                            <input type="file" class="form-control" name="img" required>
                        </div>
                    </div>
                    <!-- btn_submit -->
                    <input type="submit" class="btn btn-lg btn-outline-success mt-3" name="btn_submit">
                    <!-- form end -->
                </form>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>