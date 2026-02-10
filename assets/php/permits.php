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
    <title>TPRS - Permits</title>
    <link rel="icon" href="../assets/icon/PSTMD.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/cssmain/permits.css">
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
        <button class="nav-item " onclick="window.location.href='franchise.php'">
            Franchise
        </button>
        <button class="nav-item" onclick="window.location.href='billing.php'">
            Billing
        </button>
        <button class="nav-item active" onclick="window.location.href='permits.php'">
            Permits
        </button>
    </nav>

    <div class="logout-container">
        <span class="username-display">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
        <button class="btn-logout" onclick="window.location.href='logout.php'">Logout</button>
    </div>
    <div class="form-section">
        <span class="section-title">Permit Information</span>
        <div class="form-row">
            <div class="form-group">
                <label>Control Number</label>
                <input type="text" id="controlnum" placeholder="-">
            </div>
            <div class="form-group">
                <label>Case Number</label>
                <input type="text" id="caseno" placeholder="-">
            </div>
            <div class="form-group">
                <label>Old Case Number</label>
                <input type="text" id="oldcaseno" placeholder="-">
            </div>
            <div class="form-group">
                <label>Operator Name</label>
                <input type="operator" id="approvdate">
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
             <div class="form-group">
                <label>Toda</label>
                <input type="text" id="toda" placeholder="-">
            </div>
             <div class="form-group">
                <label>Route</label>
                <input type="text" id="route" placeholder="-">
            </div>
        </div>
    </div>

    <div class="form-section">
        <span class="section-title">Permit Fees Breakdown</span>
        <div class="fees-grid">
            <div class="fee-item">
                <label>Mayor Permit Fee</label>
                <input type="number" id="mayorfee" placeholder="0.00" step="0.01" min="0">
            </div>
            <div class="fee-item">
                <label>Franchise Fee</label>
                <input type="number" id="franchisefee" placeholder="0.00" step="0.01" min="0">
            </div>
            <div class="fee-item">
                <label>Confirmation Fee</label>
                <input type="number" id="confirmfee" placeholder="0.00" step="0.01" min="0">
            </div>
            <div class="fee-item">
                <label>Private</label>
                <input type="number" id="private" placeholder="0.00" step="0.01" min="0">
            </div>
            <div class="fee-item">
                <label>Annual Sticker</label>
                <input type="number" id="sticker" placeholder="0.00" step="0.01" min="0">
            </div>
            <div class="fee-item">
                <label>Validation Sticker</label>
                <input type="number" id="validation" placeholder="0.00" step="0.01" min="0">
            </div>
            <div class="fee-item">
                <label>Cert. of Roadworthiness</label>
                <input type="number" id="roadworthiness" placeholder="0.00" step="0.01" min="0">
            </div>
            <div class="fee-item">
                <label>Identification Card</label>
                <input type="number" id="idcard" placeholder="0.00" step="0.01" min="0">
            </div>
            <div class="fee-item">
                <label>Registration Plate</label>
                <input type="number" id="regplate" placeholder="0.00" step="0.01" min="0">
            </div>
        </div>

        <div class="total-section">
            <div class="total-row">
                <span class="total-label">TOTAL PERMIT FEE:</span>
                <span class="total-amount" id="totalAmount">₱ 0.00</span>
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


</body>
</html>