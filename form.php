<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 
</head>
<body style="color: white; background-color: #1d2630;">
    <div class="container mt-5">
    <div class="text-center">
            <h1 class="display-5 mb-5"><strong>Mail Form  <span>(with php)</span></strong></h1>
        </div>
        <div class="main row justify-content-center">
                <form action="mail.php" id="form" class="row justify-content-center mb-4" autocomplete="off" method=>
                    <div class="col-10 col-md-8 mb-3">
                        <label for="firstName">First Name</label>
                        <input class="form-control" id="firstName" type="text" placeholder="Enter First Name">
                    </div>
                    <div class="col-10 col-md-8 col-md-8 mb-3">
                        <label for="email">Email</label>
                        <input class="form-control" id="email" type="text" placeholder="Enter email">
                    </div>
                    <div class="col-10 col-md-8 col-md-8 mb-3">
                        <textarea name="message" id="message" cols="60" rows="10" placeholder = "write you message Here" class="form-control"></textarea>
                    </div>
                    <div class="col-10 col-md-8">
                        <!-- <input class="btn btn-success add-btn" type="submit" value="submit" id="btn"> -->
                        <button  class="btn btn-success add-btn" type="submit" id="submit-btn" style="display: block;" >Submit</button>
                    </div> 
                </form>
        </div>
    </div>
    
</body>
</html>