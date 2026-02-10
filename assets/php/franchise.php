<?php
session_start();


if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPRS - Franchise</title>
    <link rel="icon" href="../icon/PSTMD.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/cssmain/franchise.css">
</head>
<body>

<header>
    <div class="header-logo">
        <img src="../img/caloocanlogo.png" alt="Caloocan Logo">
        <img src="../img/AMLOGO.png" alt="Mayor Along Logo">
    </div>

    <div class="header-title">
        <h1>Public Safety and Traffic Management Department</h1>
        <h2>Tricycle and Pedicab Regulatory Services</h2>
    </div>
    <div class="header-logo">
        <img src="../icon/PSTMD.png" alt="PSTMD Logo">
        <img src="../icon/itdologo.png" alt="ITDO Logo">
    </div>
</header>

<div class="form-container">
    <nav class="top-navbar">
        <button class="nav-item active" onclick="window.location.href='franchise.php'">
            Franchise
        </button>
        <button class="nav-item" onclick="window.location.href='billing.php'">
            Billing
        </button>
        <button class="nav-item" onclick="window.location.href='permits.php'">
            Permits
        </button>
    </nav>
    <div class="form-fields">
    <!-- Rest of your form content -->
     <div class="form-fields">
    <div class="logout-container">
        <span class="username-display">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
        <button class="btn-logout" onclick="window.location.href='logout.php'">Logout</button>
    </div>


    <div class="form-header">
        <div class="image-section">
            <div class="image-box" title="Click to upload image">NO IMAGE</div>
        </div>

        <div class="form-fields">
            <div class="form-section">
                <span class="section-title">CASE INFORMATION</span>
                <div class="form-row">
                    <div class="form-group">
                        <label>Case Number</label>
                        <input type="text" id="casenumber" placeholder="-">
                    </div>
                    <div class="form-group">
                        <label>Old Case Number</label>
                        <input type="text" id="oldcasenumber" placeholder="-">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Conductor Name</label>
                        <input type="text" id="conductname" placeholder="-">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" id="altername" placeholder="-">
                    </div>
                </div>
                 <div class="form-row">
                    <div class="form-group">
                        <label>Valid Up To</label>
                        <input type="date" id="validate">
                    </div>
                    <div class="form-group">
                        <label>Date issued</label>
                        <input type="date" id="issuedate">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" id="status" placeholder="Active">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-section">
        <span class="section-title">LOCATION DETAILS</span>
        <div class="form-row">
            <div class="form-group">
                <label>Address</label>
                <input type="text" id="address" placeholder="-">
            </div>
            <div class="form-group">
                <label>Barangay</label>
                <input type="text" id="barangay" placeholder="-">
            </div>
            <div class="form-group">
                <label>District</label>
                <input type="text" id="district" placeholder="-">
            </div>
        </div>
    </div>

    <div class="form-section">
        <span class="section-title">TODA DETAILS</span>
        <div class="form-row">
            <div class="form-group">
                <label>Type</label>
                <input type="text" id="type" placeholder="-">
            </div>
            <div class="form-group">
                <label>Class</label>
                <input type="text" id="class" placeholder="-">
            </div>
            <div class="form-group">
                <label>Mode</label>
                <input type="text" id="mode" placeholder="-">
            </div>
             <div class="form-group">
                <label>Make</label>
                <input type="text" id="make" placeholder="-">
            </div>
        </div>
            <div class="form-row">
            <div class="form-group">
                <label>Motor Number</label>
                <input type="text" id="motornum" placeholder="-">
            </div>
            <div class="form-group">
                <label>Plate Number</label>
                <input type="text" id="platenum" placeholder="-">
            </div>
            <div class="form-group">
                <label>Chassis Number</label>
                <input type="text" id="chassisnum" placeholder="-">
            </div>
             <div class="form-group">
                <label>Body Number</label>
                <input type="text" id="bodynum" placeholder="-">
            </div>
             <div class="form-group">
                <label>Color Scheme</label>
                <input type="text" id="colorscheme" placeholder="-">
            </div>
        </div>
    </div>

    <div class="form-section">
        <span class="section-title">Route Information</span>
        <div class="form-row">
            <div class="form-group">
                <label>Toda</label>
                <input type="text" id="toda" placeholder="-">
            </div>
            <div class="form-group">
                <label>Route</label>
                <input type="text" id="route" placeholder="-">
            </div>
            <div class="form-group">
                <label>Remarks</label>
                <input type="text" id="remarks" placeholder="-">
            </div>
        </div>
    </div>




    <div class="button-section">
        <div class="button-group">
            <button class="btn-generate" id="franchisencode">Generate</button>
            <button class="btn-find"id="franchisearch">Find</button>
            <button class="btn-edit"id="franchisedit">Edit</button>
            <button class="btn-delete"id="franchisedelete">Delete</button>
            <button class="btn-print"id="franchiseprint">Print</button>
        </div>
    </div>
    </div>
</div>



</body>
</html>