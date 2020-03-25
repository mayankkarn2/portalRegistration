<?php  
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Registration</title>
  </head>
  <body>
    <?php require_once 'process.php'; ?>
    <div class="container">
        <div class="row topm">
        </div>
    </div>
    <form name="form1" action="" method="POST" onSubmit="return check();">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Personal Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name of the dealer</label>
                                <span class="required">*</span>
                                <input type="text" name="name" class="form-control" placeholder="Enter your Name" required>
                                <?php if (isset($_SESSION['clientErrName'])) : ?>
                                    <span class="required">* 
                                        <?php 
                                            echo $_SESSION['clientErrName'];
                                            unset($_SESSION['clientErrName']); 
                                        ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label>Name of the Shop</label>
                                <span class="required">*</span>
                                <input type="text" name="shop" class="form-control" placeholder="Enter your shop name" required>
                            </div>
                            <div class="form-group">
                                <label>GST Number</label>
                                <span class="required">*</span>
                                <input type="text" name="gstnum" class="form-control" placeholder="Enter your GST IN"
                                required>
                                <?php if (isset($_SESSION['clientErrGST'])) : ?>
                                    <span class="required">* 
                                        <?php 
                                            echo $_SESSION['clientErrGST'];
                                            unset($_SESSION['clientErrGST']); 
                                        ?>
                                    </span>
                                <?php endif; ?> 
                            </div>
                            <div class="form-group">
                                <label>Mobile Number</label>
                                <span class="required">*</span>
                                <input type="text" name="mblnum" id="mobile" 
                                class="form-control" placeholder="Enter your Mobile Number" required>
                                <?php if (isset($_SESSION['clientErr'])) : ?>
                                    <span class="required">* 
                                        <?php 
                                            echo $_SESSION['clientErr'];
                                            unset($_SESSION['clientErr']); 
                                        ?>
                                    </span>
                                <?php endif; ?> 
                            </div>
                            <div>
                                <label>Address of the shop</label>
                                <span class="required">*</span>
                                <textarea  rows="3" name="address" class="form-control" cols="50" placeholder="Enter the address" required></textarea>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="col-md-6">
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Bank Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name of the Account</label>
                                <span class="required">*</span>
                                <input type="text" name="accname" class="form-control" placeholder="Enter your Account Name" required>
                                <?php if (isset($_SESSION['clientErrAName'])) : ?>
                                    <span class="required">* 
                                        <?php 
                                            echo $_SESSION['clientErrAName'];
                                            unset($_SESSION['clientErrAName']); 
                                        ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label>Account Number</label>
                                <span class="required">*</span>
                                <input type="text" name="accnumber" class="form-control" placeholder="Enter your Account Number" required> 
                                <?php if (isset($_SESSION['clientErrAN'])) : ?>
                                    <span class="required">* 
                                        <?php 
                                            echo $_SESSION['clientErrAN'];
                                            unset($_SESSION['clientErrAN']); 
                                        ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                            
                            <div class="form-group">
                                <label>Confirm Account Number</label>
                                <span class="required">*</span>
                                <input type="password" name="caccnumber" class="form-control" placeholder="Confirm Account number" required>
                                <?php if (isset($_SESSION['clientErrs'])) : ?>
                                    <span class="required">* 
                                        <?php 
                                            echo $_SESSION['clientErrs'];
                                            unset($_SESSION['clientErrs']); 
                                        ?>
                                    </span>
                                <?php endif; ?> 
                            </div>
                            <div class="form-group">
                                <label>IFSC Code</label>
                                <span class="required">*</span>
                                <input type="text" name="ifsc" class="form-control" placeholder="Enter IFSC code" required> 
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="container">
                <div class="row float-right">
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark" name="save">Register</button>
                    </div> 
                </div>
            </div>  
        </div>
        </br>  
    </form>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>