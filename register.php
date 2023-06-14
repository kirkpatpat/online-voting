<?php
require_once 'includes/init.php';

$conn = require_once 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

    $voter = new Voter();
    $voter->lastName = cleanInput('lname');
    $voter->firstName = cleanInput('fname');
    $voter->middleName = cleanInput('mname');

    $suppInfo = cleanInput('suppinfo');
    $voter->pwd = $voter->ip = $voter->illiterate = false;
    if ($suppInfo != null) {
        if (in_array('illiterate', $suppInfo)) {
            $voter->illiterate = true;
        }
        if (in_array('pwd', $suppInfo)) {
            $voter->pwd = true;
        }
        if (in_array('ind-p', $suppInfo)) {
            $voter->ip = true;
        }
    }

    $voter->assistedBy = cleanInput('assisted-by');
    $voter->raProvince = cleanInput('province');
    $voter->raCity = cleanInput('city-mun');
    $voter->raBarangay = cleanInput('barangay');
    $voter->raStreet = cleanInput('hn-street');
    $voter->sex = cleanInput('sex');
    $voter->dateOfBirth = cleanInput('date-of-birth');
    $voter->pobCity = cleanInput('pob-city-mun');
    $voter->pobProvince = cleanInput('pob-province');
    $voter->porCityYears = cleanInput('no-years-city');
    $voter->porCityMonths = cleanInput('no-months-city');
    $voter->porPhilYears = cleanInput('no-years-phil');
    $voter->civilStatus = cleanInput('civil-status');
    $voter->spouseName = cleanInput('spouse-name');
    $voter->password = cleanInput('password');
    
    if($voter->registerVoter($conn)) {
        Auth::login([
            "voterID" => $conn->lastInsertId()
        ]);
        redirect('profile.php');
    } else {
        die('Something went wrong.');
    }
}

if (Auth::isLoggedIn()) {
    redirect('profile.php');
}

?>
<?php require_once APPROOT . '/includes/header.php' ?>
<?php require_once APPROOT . '/includes/navbar.php' ?>
<div class="register-container">
    <form action="<?= htmlspecialchars(URLROOT . '/register.php') ?>" class="register-form" method="POST">
        <div class="container-register">
            <div class="name">
                <h2 class="group-title">Name</h2>
                <div class="grid-name">
                    <label for="lname"><sup>*</sup>Last Name</label>
                    <input type="text" name="lname" placeholder="Type in your last name" required>
                    <label for="fname"><sup>*</sup>First Name</label>
                    <input type="text" name="fname" placeholder="Type in your first name" required>
                    <label for="mname"><sup>*</sup>Middle Name</label>
                    <input type="text" name="mname" placeholder="Type in your middle name" required>
                </div>
            </div>
            <div class="supp-info">
                <h2 class="group-title">Supplemental Information</h2>
                <div class="supp-info-item">
                    <input type="checkbox" name="suppinfo[]" value="illiterate">
                    <label for="illiterate">Illiterate</label>
                </div>
                <div class="supp-info-item">
                    <input type="checkbox" name="suppinfo[]" value="pwd">
                    <label for="pwd">Person with Disability</label>
                </div>
                <div class="supp-info-item">
                    <input type="checkbox" name="suppinfo[]" value="ind-p">
                    <label for="ind-p">Indigenous People</label>
                </div>
                <div class="supp-info-item">
                    <div class="assisted-by-container">
                        <label for="assisted-by">Assisted By:</label>
                        <input type="text" name="assisted-by">
                    </div>
                    <p>(Please fill-up Supplemental Data Form/Assistor's Oath)</p>
                </div>
            </div>
            <div class="sex">
                <h2 class="group-title">Sex</h2>
                <div class="sex-flex">
                    <div>
                        <input type="radio" name="sex" value="Male" checked required>
                        <label for="male">Male</label>
                    </div>
                    <div>
                        <input type="radio" name="sex" value="Female">
                        <label for="female">Female</label>  
                    </div>
                </div>

                <h2 class="group-title"><sup>*</sup>Date of Birth</h2>
                <div class="dob-container">
                    <input type="date" name="date-of-birth">
                </div>

                <h2 class="group-title">Place of Birth</h2>
                <div class="pob-flex">
                    <label for="pob-city-mun"><sup>*</sup>City/Mun</label>
                    <input type="text" name="pob-city-mun" placeholder="City/Municipality of birth" required>
                </div>
                <div class="pob-flex">
                    <label for="pob-province"><sup>*</sup>Province</label>
                    <input type="text" name="pob-province" placeholder="Province of birth" required>
                </div>
            </div>
            <div class="residence-address">
                <h2 class="group-title">Residence/Address</h2>
                <div class="residence-address-grid">
                    <label for="province">Province</label>
                    <input type="text" name="province" placeholder="Type in your residence" required>
                    <label for="city-mun">City/Municipality</label>
                    <input type="text" name="city-mun" placeholder="Type in your city/municipality" required>
                    <label for="barangay">Barangay</label>
                    <input type="text" name="barangay" placeholder="Type in your barangay" required>
                    <label for="text" class="hn-street">Street</label>
                    <input type="text" name="hn-street" placeholder="Type in your street address" required>
                </div>
            </div>
            <div class="period-of-residence">
                <h2 class="group-title">Period of Residence</h2>
                <div class="por-flex">
                    <div class="por-margin">
                        <div class="por-title">
                            In the City/Mun
                        </div>
                        <div class="por-item-flex">
                            <label for="no-years-city">No. of Years</label>
                            <input type="number" name="no-years-city">
                        </div>
                        <div class="por-item-flex">
                            <label for="no-months-city">No. of Months</label>
                            <input type="number" name="no-months-city">
                        </div>
                    </div>
                    <div class="por-margin">
                        <div class="por-title">
                            In the Philippines
                        </div>
                        <div class="por-item-flex">
                            <label for="no-years-phil">No. of Years</label>
                            <input type="number" name="no-years-phil">
                        </div>
                    </div>
                </div>
            </div>
            <div class="civil-status">
                <h2 class="group-title">Civil Status</h2>
                <div class="civil-status-flex">
                    <input type="radio" name="civil-status" value="Single" checked required >
                    <label for="civil-status">Single</label>

                    <input type="radio" name="civil-status" value="Married">
                    <label for="civil-status">Married</label>
                </div>
                <div class="spouse-name-container">
                    <label for="spouse-name">Name of Spouse, If Married</label>
                    <input type="text" name="spouse-name">
                </div>
            </div>
            <div class="password">
                <h2 class="group-title"><sup>*</sup>Password</h2>
                <div class="password-container">
                    <input type="password" name="password" required>
                </div>
                <h2 class="group-title"><sup>*</sup>Confirm Password</h2>
                <div class="confirm-password-container">
                    <input type="password" name="confirm-password" required>
                </div>
                <div class="register-submit">
                    <input type="submit" value="Submit">
                </div>
            </div>
        </div>

    </form>
</div>

<?php  require_once APPROOT . '/includes/footer.php' ?>