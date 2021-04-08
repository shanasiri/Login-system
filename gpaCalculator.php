<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>FAS</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/gpa.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;1,100;1,700&display=swap"
            rel="stylesheet">
    </head>
    
    <body>
        <div class="container">
            <div class="myCard">
                <div class="row">
                    <div class="col-md-6">
                        <div class="myLeftCtn">
        
                            <form class="myForm text-center">
        
                                <header>GPA CALCULATER</header>
        
                                <div class="form-group">
                                    <input class="myInput" type="text" placeholder="Reg No" id="RegNo" required>
                                    <div class="invalid-feedback">Please fill out this field</div>
                                </div>
        
                                <div class="form-group">
                                    <input class="myInput" type="text" placeholder="First Name" id="fname" required>
                                    <div class="invalid-feedback">Please fill out this field</div>
                                </div>
        
                                <div class="form-group">
                                    <input class="myInput" type="text" placeholder="Last Name" id="lname" required>
                                    <div class="invalid-feedback">Please fill out this field</div>
                                </div>

                                <select class="form-select myInput form-group" aria-label="Default select example">
                                    <option selected>Department</option>
                                    <option value="1">CIS</option>
                                    <option value="2">PST</option>
                                    <option value="3">FST</option>
                                    <option value="4">NR</option>
                                    <option value="5">SSM</option>
                                </select>

                                <select class="form-select myInput form-group" aria-label="Default select example">
                                    <option selected>Year</option>
                                    <option value="1">1st Year 1st Semester</option>
                                    <option value="2">1st Year 2nd Semester</option>
                                    <option value="3">2nd Year 1st Semester</option>
                                    <option value="4">2nd Year 2nd Semester</option>
                                    <option value="5">3rd Year 1st Semester</option>
                                    <option value="6">3rd Year 2nd Semester</option>
                                    <option value="7">3rd Year 1st Semester</option>
                                    <option value="7">3rd Year 2nd Semester</option>
                                </select>
                                    
                                

                                <input type="submit" class="butt" value="CALCULATE">

                            </form>
        
        
                        </div>
                    </div>
        
                    <div class="col-md-6">
                        <div class="myRightCtn">
                            <div class="box">
                                <header>GPA Calculater</header>
        
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit, ipsa necessitatibus eius
                                    nobis veniam aliquid porro sequi excepturi, sapiente expedita quisquam quasi quas quidem
                                    tenetur dignissimos totam autem, iste odio adipisci inventore. Perspiciatis, voluptatem
                                    alias, eaque dolorem nostrum laboriosam laborum temporibus, quas natus magni nesciunt neque
                                    aliquid autem doloribus reiciendis!</p>


                                    <input type="button" class="butt_out" value="Back to Home" onclick="window.location.href='home.html'">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
            crossorigin="anonymous"></script>
    </body>
</html>