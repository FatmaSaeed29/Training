<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/his.css">
    <!-- <link href="css/styles.css" rel="stylesheet" /> -->
    <link rel="shortcut icon" href="images/1mini_logo.jpg" type="image/x-icon">
    <!-- <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script> -->
    <title>Your Hospital Name</title>
</head>
<body >

    <!-- Nav Bar Section  -->

    <nav class="navbar navbar-dark bg-dark">
        <div class="brand">
            <a class="navbar-brand h2" href="#">Pharmacy</a>
        </div>
        <div class="drop">
            <a href="navbar.php">
                <abbr title="Back To Main Page">
                    <i class="fas fa-arrow-alt-left" style="color:green; cursor:pointer; font-size:25px"></i>
                </abbr>
            </a>
        </div>
        <div class="right">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 search" type="search" placeholder="Search By Patient Name" aria-label="Search">
            </form>
            <abbr title="English"><img src="images/USA.png" alt="USA" width="35px" height="20px" ></abbr>
            <i class="far fa-bell"></i>
            <a href="#">
                <i class="fas fa-bed"></i>
                <span style="color: #fff;" class="ml-1">Bed Status</span>
            </a>
            <abbr title="Chat"><a href="#"><i class="fal fa-comment"></i></a></abbr>
            <abbr title="Calendar"><a href="#"><i class="fas fa-calendar-alt"></i></a></abbr>
            <abbr title="Task"><a href="#"><i class="fas fa-tasks"></i></a></abbr>
        </div>

    </nav>
   
      <!-- First Bage In Pharamact Module -->
      <div class="all col-md-12 container">
        <div class="first mt-3">
                <h5 class="ml-3">Pharmacy Bill</h5>
            <div class="buttons mr-3">
                <a href="bill.php">
                    <button type="button" class="btn  btn-sm generatebill" id="load1" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Please Wait.." autocomplete="off"><i class="fa fa-plus"></i> Generate Bill</button>
                </a>
                <a href="medicine.php">
                    <button type="button" class="btn  btn-sm generatebill" id="load1" data-loading-text="<i class='fas fa-bars'></i> Please Wait.." autocomplete="off"><i class="fas fa-bars"></i>Medicines</button>
                </a>
            </div>
        </div>

        <hr class="lineone">
        
        <div class="second">
            <input type="text" placeholder="Search...">
            <div class="right2">
                <select>
                    <option selected>100</option>
                    <option>All</option>
                </select>
                <a class="btn btn-default dt-button buttons-copy buttons-html5 btn-copy" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Copy"><span><i class="far fa-copy"></i></span></a>

                <a class="btn btn-default dt-button buttons-excel buttons-html5 btn-excel" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Excel"><span><i class="far fa-file-excel"></i></span></a>

                <a class="btn btn-default dt-button buttons-csv buttons-html5 btn-csv" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="CSV"><span><i class="fal fa-file-csv"></i></span></a>

                <a class="btn btn-default dt-button buttons-pdf buttons-html5 btn-pdf" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="PDF"><span><i class="far fa-file-pdf"></i></span></a>

                <a class="btn btn-default dt-button buttons-print btn-print" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Print"><span><i class="fas fa-print"></i></span></a>
            </div>
            <br><br>
            <div class="under">
                <table>
                    <thead>
                        <tr>
                            <th>Bill No <i class="fas fa-caret-down"></i></th>
                            <th class="mr-2">Case ID <i class="fas fa-caret-down"></i></th>
                            <!-- <th>Date</th> -->
                            <th>Patient Name <i class="fas fa-caret-down"></i></th>
                            <th>Doctor Name</th>
                            <th>Discount ($) <i class="fas fa-caret-down"></i></th>
                            <th>Amount ($) <i class="fas fa-caret-down"></i></th>
                            <th>Paid Amount ($) <i class="fas fa-caret-down"></i></th>
                            <th>Balance Amount ($)</th>
                        </tr>
                    </thead>
                   <tbody>
                        <?php  
                        // $conn2 = mysqli_connect("localhost", "root", "", "pharmacy");
                        // // Check connection
                        // if ($conn2->connect_error) {
                        //     die("Connection failed: " . $conn2->connect_error);
                        //     }
                        //     $sql = "SELECT ID , hosptialdoc , docname,discount,amount,tax,net FROM bill";
                        //     $result = $conn2->query($sql);
                        //     if ($result->num_rows > 0) {
                        //         // output data of each row
                        //         while($row = $result->fetch_assoc()) {
                        //             echo "<tr><td>" . $row["ID"]. "</td><td>".$row["ID"]. "</td><td>" .$row["docname"] ."</td></tr>";
                        //             }
                        //             echo "</table>";

                        //             // "</td><td>" . $row["hosptialdoc"] . "</td><td>"
                        //             // . $row["docname"]. "</td></tr>" . $row["discount"]. "</td><td>" . $row["amount"] . "</td><td>". $row["tax"]. "</td></tr>" . $row["net"].

                        //     }else { echo "0 results"; }
                        //     $conn2->close();    
                        
                        ?>
                   </tbody>
                </table>
            </div>
        </div>

        <hr class="lineone">

        <div class="three  text-center">
            <h6>No data avaliable in table</h6>
            <img src="images/addnewitem.svg" alt="Add New Item">
            <div class="newrecord">
                <i class="fas fa-arrow-left"></i>
                <span>Add new record or search with different criteria.</span>
            </div>
        </div>

        <hr class="lineone">

        <div class="four text-secondary">
            <p>Records: 0 to 0 of 0</p>
            <div class="arrow">
                <i class="fas fa-chevron-left mr-2"></i>
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
      </div>








    <!-- chart  -->
    <!-- <canvas id="myChart" style="width:100%;max-width:700px"></canvas> -->


    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/script.js"></script>
    <!-- <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script> -->
    <!-- <script src="js/scripts.js"></script> -->
</body>
</html>