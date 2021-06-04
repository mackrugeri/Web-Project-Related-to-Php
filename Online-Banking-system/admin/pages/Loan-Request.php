<?php 
    include "connect.php";
    session_start();
    $account = $_POST["account"];
    echo $account;
    if (isset($_POST["Approve"])) {
        $qry = "SELECT * From `loanapproval` WHERE Account_number = ". $account;
        $res =  $cont->query($qry);
        if ($res->num_rows > 0)
        {
            $qry = "DELETE FROM `loanapproval` WHERE Account_number = ". $account;
            $cont->query($qry);
        }
        else{
            echo "<script type='text/javascript'>";
            echo "alert('Wrong Account Number');";
            echo "</script>";
        }
        header("Location:Loan-Request.php?Message=$msg");
    }
 ?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>
<style>

input[type=text] {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 3px;
  margin-bottom: 5px;
  margin-left:25%;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left:25%;
  
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  background-color: #f2f2f2;
}
</style>
<body>
  <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="admin.php">MAC E-Banking</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        

                   <!-- Notification in nav bar -->
               
                      
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">Ahsan Chughtai </h5>
                                    <span class="status"></span><span class="ml-2">Administrator</span>
                                </div>
                                <a class="dropdown-item" href="../../Front-page/index.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="../admin.php" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    
                           
                            <li class="nav-item">
                                <a class="nav-link" href="Loan-Request.php"data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Loan Request</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="Delete-Account.php" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Delete Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Zakat-Account.php" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Zakat Detection </a>
                            </li>
                           <li class="nav-item">
                                <a class="nav-link" href="Zakat-Accountt.php" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Zakat Account </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Transaction-history.php" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-id-card"></i>Transaction History</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="Loan-history.php" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-id-card"></i>Loan History</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h3 class="text-center" style="background-color:black;margin-left:25%;margin-right:10%; padding:10px 10px; color:white;">Loan Requests</h3>
                    </div>
                </div>
            </div>
<?php 
    $qry = "SELECT * FROM `loanapproval`";
    $res = $cont->query($qry);
    $result = "";
    if ($res->num_rows > 0) {
        $result .='<div class="dashboard-wrapper">
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Account Number</th>
                                                        <th class="border-0">Loan Type</th>
                                                        <th class="border-0">Product Type</th>
                                                        <th class="border-0">Loan Amount</th>
                                                        <th class="border-0">Account Amount</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>'; 
        while($row =$res->fetch_assoc()){
            $result .=' <tr>
                            <td>'.$row["Account_number"].'</td>
                            <td>'.$row["TypeOfLoanAccount"].' </td>
                            <td>'.$row["Loantype"].'</td>
                            <td>'.$row["LoanAmount"].'</td>
                            <td>'.$row["AmountInBank"].'</td>
                        </tr>';
        }

                        $result .= '  </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>';
    echo $result;
    }

 ?>
            <div class="container">
                <h3 style="text-align:center;">Approval of Loan</h3>
                  <form action="#" method="Post">
                    <input type="text" id="fname" name="account" placeholder="Account Number" required>
                    <br>
                    <input type="submit" value="Approve" name="Approve">
                  </form>
                </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
</body>
 
</html>