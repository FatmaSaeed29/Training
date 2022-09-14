<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="css/1mini_logo.jpg" type="image/x-icon">
    <title>Your Hospital Name</title>
</head>
<body style="overflow-x:hidden ;">
    <section class = "content">
        <article class = "content1">
            <h1>Medicine Purchase List</h1>
            <a href = "purchase2.php">
            <button class = "button1"><i class="fas fa-plus" ></i>Purchase Medicine</button></a>
            <hr class = "hr-head">
        </article>

        <article class="content2">
            <input class = "input" type="text" placeholder="Search...">
            <div class="select">
                <select>
                    <option selected> 100 </option>
                    <option> All </option>
                </select>
                <div class = "icons">
                    <a class = "copy" href ="#"> <i class="far fa-copy"></i></a>
                    <a class = "excel" href = "#"> <i class="far fa-file-excel"></i></a>
                    <a class = "csv" href = "#"> <i class="far fa-file-alt"></i></a>
                    <a class = "pdf" href = "#"> <i class="far fa-file-pdf"></i></a>
                    <a class = "print" href = "#"> <i class="fas fa-print"></i></a>
                    <hr class = "hr-icons">
                </div>
            </div>
        </article>

        <article class = "content3">
            <h1 class = "h1"> Pharmacy Purchaase No <i class="fas fa-sort-down"></i> </h1>
            <h1 class = "h2"> Purchase Date <i class="fas fa-sort-down"></i> </h1>
            <h1 class = "h3"> Bill No <i class="fas fa-sort-down"></i> </h1>
            <h1 class = "h4"> Supplier Name <i class="fas fa-sort-down"></i> </h1>
            <p class = "p1"> Total (<i class="fas fa-dollar-sign"></i>) </p>
            <p class = "p2"> Tax (<i class="fas fa-dollar-sign"></i>)</p>
            <p class = "p3"> Discount (<i class="fas fa-dollar-sign"></i>)</p>
            <p class = "p4"> Net Amount (<i class="fas fa-dollar-sign"></i>)</p>
            <br><hr class = "hr-h">   
        </article>

        <article class = "content4">
            <p class = "p1"> No data available in table </p>
            <img src="css/medicine.svg" style="margin-left:460px;">
            <p class = "p2"> <i class="fas fa-arrow-left"></i> Add new record or search with different criteria. </p>
            <hr>
        </article>
        <article class = "footer">
            <p> Records: 0 to 0 of 0 </p>
            <div class = "one " style=" margin: -15px 0 0 1150px;"> <i class="fas fa-chevron-left mr-2"></i></div>
            <div class = "two" style=" margin: -15px 0 0 1170px;"> <i class="fas fa-chevron-right"></i> </div>
        </article>
        
        
    </section>

</body>

