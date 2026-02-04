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
    <link rel="icon" href="../assets/icon/PSTMD.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/cssmain/franchise.css">
</head>
<body>

<header>
    <div class="header-logo">
        <img src="../assets/img/caloocanlogo.png" alt="Caloocan Logo">
        <img src="../assets/img/AMLOGO.png" alt="Mayor Along Logo">
    </div>

    <div class="header-title">
        <h2>Tricycle and Pedicab Regulatory Services</h2>
        <h1>Franchise Management</h1>
    </div>
    <div class="header-logo">
        <img src="../assets/icon/PSTMD.png" alt="PSTMD Logo">
        <img src="../assets/icon/itdologo.png" alt="ITDO Logo">
    </div>
</header>

<div class="form-container">
     <div class="form-fields">
       
    <div class="logout-container">
        <span class="username-display">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
        <button class="btn-logout" onclick="window.location.href='../logout.php'">Logout</button>
    </div>


    <div class="form-header">
        <div class="image-section">
            <div class="image-box" title="Click to upload image">NO IMAGE</div>
        </div>

        <div class="form-fields">
            <div class="form-section">
                <span class="section-title">Case Information</span>
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
        <span class="section-title">Location Details</span>
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
        <span class="section-title">Vehicle Details</span>
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
    <div class="button-group">
            <button class="btn-nav" onclick="window.location.href='billing.php'">Billing </button>
            <button class="btn-nav" onclick="window.location.href='permits.php'">Permits</button>
    </div>

    <div id="modalContainer"></div>
    <script>
document.getElementById("franchisencode").addEventListener("click", () => {
    fetch("franchisencode.php")
        .then(res => res.text())
        .then(html => {
            document.getElementById("modalContainer").innerHTML = html;
        });
});
</script>

</body>
</html>