<!DOCTYPE html>
<html>

<?php
require('../DB/DB.php');
$db = new DB();
session_start();
if ($_SESSION['valid'] == 1) {
?>

<head>
<title>Academic center</title>

    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

    <link rel="stylesheet" href="../assets/css/admin/module.admin.page.shop_products.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="../assets/images/icon.png"  sizes="32x32"  rel="icon">

    <script src="../assets/components/library/jquery/jquery.min.js?v=v1.2.0"></script>
    <script src="../assets/components/library/jquery/jquery-migrate.min.js?v=v1.2.0"></script>
    <script src="../assets/components/library/modernizr/modernizr.js?v=v1.2.0"></script>
    <script src="../assets/components/plugins/less-js/less.min.js?v=v1.2.0"></script>
    <script src="../assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.2.0"></script>
    <script src="../assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.2.0"></script>
    <script src="../assets/components/library/jquery-ui/js/jquery-ui.min.js?v=v1.2.0"></script>
    <script src="../assets/components/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js?v=v1.2.0"></script>
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">

    <script>
        $(function () {
            $("#includedMenu").load("menu.php");
        });
    </script>

    <style type="text/css">
        .inactiveStatus {
            color: red !important;
            text-align: center;
        }

        .activeStatus {
            color: rgb(0, 190, 0) !important;
            text-align: center;
        }

        .FinishedStatus {
            color: rgb(248 148 54) !important;
            text-align: center;
        }

        .content-heading {
            margin: 0 auto;
            text-align: center;
            padding: 20px !important; /* Adjust the padding as needed */
        }

        body,
        label,
        th,
        td {
            font-size: 18px !important;
            color: #333333;
            font-family: 'Poppins', sans-serif !important;
            font-weight: 500 !important;
            letter-spacing: 0.5px;
        }

        .active9 {
            background-color: #cb4040;
            color: #fff;
        }
    </style>
</head>

<body>
    <div id="includedMenu"></div>

    <div id="content">
        <h1 class="bg-white content-heading border-bottom text-primary">Courses management</h1>

        <form id="crform" action='../DB/addClassRoomDB.php' method="POST" enctype="multipart/form-data" hidden>
            <input name="courseId" id="courseIdcrform" value="" readonly hidden />
        </form>

        <form id="Statusform" action='../DB/toggleCourseStatus.php' method="POST" enctype="multipart/form-data" hidden>
            <input name="courseId" id="courseIdStatusform" value="" readonly hidden />
            <input name="courseStatus" id="courseStatusform" value="" hidden readonly />
        </form>

        <br>
        <div style="display: flex; justify-content: center;" class="input-group mb-3">
            <input style="width: 15%;" type="text" class="form-control" id="searchInput" placeholder="Search">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button" id="searchButton">Search</button>
            </div>
        </div>
        <br>
        <center>
        <table style="width: 90%; border: 3px solid #cb4040;" class="table table-bordered table-condensed table-striped table-primary table-vertical-center">
    <thead>
        <tr>
            <th style="width: 5%;" class="center">Number</th>
            <th class="center">Course name</th>
            <th class="center">Teacher</th>
            <th style="width: 10%;" class="center">Number of enrolled students</th>
            <th class="center">Status</th>
            <th class="center">Status Actions</th>
            <th class="center">Classroom</th>
            <th class="center">Classroom Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $result = $db->getCourseWithTeachers();
        $No = 0;
        foreach ($result as $item) {
            $No = $No + 1;
            $status = $item['status'];

            $classroom = $item['classroom'];
            $classroomtxt = 'Inactive';
            $classroomclass = 'inactiveStatus';
            $classroomid = 'c';

            $statustxt = 'active';
            $statusclass = 'activeStatus';

            if ($classroom == 1) {
                $classroomtxt = 'Active';
                $classroomclass = 'activeStatus';
            }

            if ($status == 1) {
                $statustxt = 'Active';
                $statusclass = 'activeStatus';
            } else if ($status == 2) {
                $statustxt = 'Inactive';
                $statusclass = 'inactiveStatus';
            } else if ($status == 3) {
                $statustxt = 'Finished';
                $statusclass = 'FinishedStatus';
            }

            echo " <tr>
                <td class='center'>" . $No . "</td>
                <td class='center'>  " . $item['name'] . " </td>
                <td class='center'>" . $item['firstName'] . " " . $item['lastName'] . " </td>
                <td class='center'>  " . $item['enrolledNumber'] . " </td> 
                <td class='center $statusclass'>" . $statustxt . "</td> 
                <td class='center'>
                    <div class='btn-group btn-group-sm'>
                        <select class='selectpicker' data-width='fit' id='stSel" . $item['id'] . "' onchange='myFunction(this.id)' name='cars'>
                            <option>Select...</option>
                            <option value='1'>Active</option>
                            <option value='2'>Inactive</option>
                            <option value='3'>Finished</option>
                        </select>
                    </div>
                </td>
                <td class='center $classroomclass'>" . $classroomtxt . "</td>
                <td class='center'>
                    <div class='btn-group btn-group-lg'>
                        <a title='Inactive courses' href='#' id='cr" . $item['id'] . "'  class='$classroomclass' onclick='runMyFunctionclassroom(this.id)'><button class='btn btn-info'>Toggle status</button></a>
                        ";
            if ($classroom == 1) {
                echo "
                <form class='center' action='admin_advertisements.php' method='POST' enctype='multipart/form-data' >
                    <input type='text' name='courseId' value='" . $item['id'] . "' hidden readonly>
                    <br>
                    <button  type='submit' name ='submitDB' title='go to classroom' class='btn btn-success'>Visit classroom</button>
                    
                </form> <br>";
            }

            echo "
                    </div>
                </td>
            </tr> ";
        }
        ?>
    </tbody>
</table>


        </center>

        <!-- // Products table END -->
    </div>

    <!-- // Content END -->



    </div>
    <!-- // Main Container Fluid END -->

    <!-- Global -->
    <script>
        $(".btn").mouseup(function () {
            $(this).blur();
        });

        var basePath = '',
            commonPath = '../assets/',
            rootPath = '../',
            DEV = false,
            componentsPath = '../assets/components/';

        var primaryColor = '#cb4040',
            dangerColor = '#b55151',
            infoColor = '#466baf',
            successColor = '#8baf46',
            warningColor = '#ab7a4b',
            inverseColor = '#45484d';

        var themerPrimaryColor = primaryColor;

        // Function to handle the delete action
        function myFunction(id) {
            var courseid = id.substring(5);
            var x = document.getElementById(id).value;
            var swaltext = '';
            if (x == 1) {
                swaltext = "Are you sure you want to Activate this course?";
            } else if (x == 2) {
                swaltext = "Are you sure you want to Deactivate this course?";
            } else if (x == 3) {
                swaltext = "Are you sure you want to Finish this course?";
            }
            swal({
                    title: "Caution",
                    text: swaltext,
                    type: "info",
                    showCancelButton: true,
                    confirmButtonColor: "green",
                    confirmButtonText: "Yes",
                    closeOnConfirm: false
                },
                function () {
                    document.getElementById("courseIdStatusform").value = courseid;
                    document.getElementById("courseStatusform").value = x;
                    document.getElementById("Statusform").submit();
                });
        }

        function runMyFunctionclassroom(id) {
            const el = document.getElementById(id);
            var ClassroomStatus = el.className;
            var textswal =
                swal({
                    title: "Caution",
                    text: "Are you sure you want to toggle Classroom Status?",
                    type: "info",
                    showCancelButton: true,
                    confirmButtonColor: "green",
                    confirmButtonText: "Yes",
                    closeOnConfirm: false
                },
                function () {
                    var courseid = id.substring(2);
                    document.getElementById("courseIdcrform").value = courseid;
                    document.getElementById("crform").submit();
                });
        }

        document.addEventListener("DOMContentLoaded", function () {
            // Get the input field and button
            const searchInput = document.getElementById("searchInput");
            const searchButton = document.getElementById("searchButton");

            // Get all table rows
            const tableRows = document.querySelectorAll("table tbody tr");

            // Add an event listener to the search button
            searchButton.addEventListener("click", function () {
                const searchText = searchInput.value.toLowerCase();

                // Loop through all table rows
                tableRows.forEach(function (row) {
                    const rowData = row.textContent.toLowerCase();
                    if (rowData.includes(searchText)) {
                        row.style.display = ""; // Show matching rows
                    } else {
                        row.style.display = "none"; // Hide non-matching rows
                    }
                });
            });
        });
    </script>

    <script src="../assets/components/library/bootstrap/js/bootstrap.min.js?v=v1.2.0"></script>
    <script src="../assets/components/plugins/nicescroll/jquery.nicescroll.min.js?v=v1.2.0"></script>
    <script src="../assets/components/plugins/breakpoints/breakpoints.js?v=v1.2.0"></script>
    <script src="../assets/components/core/js/animations.init.js?v=v1.2.0"></script>
    <script src="../assets/components/plugins/holder/holder.js?v=v1.2.0"></script>
    <script src="../assets/components/modules/admin/forms/elements/bootstrap-select/assets/lib/js/bootstrap-select.js?v=v1.2.0"></script>
    <script src="../assets/components/modules/admin/forms/elements/bootstrap-select/assets/custom/js/bootstrap-select.init.js?v=v1.2.0"></script>
    <script src="../assets/components/modules/admin/forms/elements/uniform/assets/lib/js/jquery.uniform.min.js?v=v1.2.0"></script>
    <script src="../assets/components/modules/admin/forms/elements/uniform/assets/custom/js/uniform.init.js?v=v1.2.0"></script>
    <script src="../assets/components/modules/admin/tables/classic/assets/js/tables-classic.init.js?v=v1.2.0"></script>
    <script src="../assets/components/core/js/sidebar.main.init.js?v=v1.2.0"></script>
    <script src="../assets/components/core/js/sidebar.collapse.init.js?v=v1.2.0"></script>
    <script src="../assets/components/helpers/themer/assets/plugins/cookie/jquery.cookie.js?v=v1.2.0"></script>
    <script src="../assets/components/core/js/core.init.js?v=v1.2.0"></script>
    </body>
</html>
</html>
 <?php }
else {
       header('Location:../Pallms/signInUp.php');
}

?>  