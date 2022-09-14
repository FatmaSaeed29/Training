<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="shortcut icon" href="images/1mini_logo.jpg" type="image/x-icon">
  <title>Your Hospital Name</title>
</head>

<body>


  <div class="card text-center" id="car1">
    <div class="card-header" id="carHead" style="overflow:visible;">
      Medicines Stock
      <div id="div1">
        <a href="Import Med.php" class="external"><button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Import Medicines" id="butt1">Import Medicines
          </button></a>

        <a href="addMedicines.php"><button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Add Medicine" id="butt1">Add Medicine
          </button> </a>

        <a href="purchase.php"><button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Purchase" id="butt1"> Purchase
          </button></a>

      </div>
    </div><br>
    <hr>
    <nav class="navbar navbar-light bg-light">
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search..." aria-label="Search" id="input1">
        <a src="#"><button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Add Medicine" id="butt2">Delete Selected
          </button> </a>
        <select class="sele1" style="margin-top: 70px;">
          <option value="100">100</option>
          <option value="100">1</option>
        </select>
        <div class="right" style="margin-left:1160px; margin-top:-40px; font-size:20px;">
                <a class="btn btn-default dt-button buttons-copy buttons-html5 btn-copy" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Copy"><span><i class="far fa-copy"></i></span></a>

                <a class="btn btn-default dt-button buttons-excel buttons-html5 btn-excel" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Excel"><span><i class="far fa-file-excel"></i></span></a>

                <a class="btn btn-default dt-button buttons-csv buttons-html5 btn-csv" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="CSV"><span><i class="fal fa-file-csv"></i></span></a>

                <a class="btn btn-default dt-button buttons-pdf buttons-html5 btn-pdf" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="PDF"><span><i class="far fa-file-pdf"></i></span></a>

                <a class="btn btn-default dt-button buttons-print btn-print" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Print"><span><i class="fas fa-print"></i></span></a>
        </div>
      </form>
    </nav>
    <div class="dropdown">
      <input type="checkbox" class="input2">
      #
      <a src="#"> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Medicine Name <span>&#x25BC;</span>
        </button></a>
      <a src="#"> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Medicine Company <span>&#x25BC;</span>
        </button></a>
      <a src="#"> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Medicine Composition <span>&#x25BC;</span>
        </button></a>
      <a src="#"> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Medicine Category <span>&#x25BC;</span>
        </button></a>
      <a src="#"> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Medicine Group <span>&#x25BC;</span>
        </button></a>
      <a src="#"> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Unit <span>&#x25BC;</span>
        </button></a>
      <a src="#"> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Avaliable Qty <span>&#x25BC;</span>
        </button></a>
    </div>
    <hr>
    <div class="div2">
      <h3>No Data Is Avaliable</h3>
      <img src="addnewitem.svg" class="img1"></img>
      <p class="p1">Add new record or search with different critiria</p>
    </div>

  </div>

  <script src="bootstrap-5.2.0-dist/js/bootstrap.bundle.js"></script>
  <script src="bootstrap-5.2.0-dist/css/bootstrap-grid.min.css"></script>
</body>

</html>