<?php
require_once 'includes/init.php';

Auth::requireLogin();

$conn = require_once 'includes/db.php';

$voter = Voter::getVoter($conn, $_SESSION['voterID']);

?>

<?php require_once APPROOT . '/includes/header.php' ?>

<!-- DANICA, CHURCHILL -->
<div class="container-profile">
    <?php require_once APPROOT . '/includes/navbar.php' ?>
    <form action="" method="POST" id="LogIn" id="reg">
        <div class="section">
            <div id="box">
                <img src="resources/images/user.png" alt="image" style="width: 150px; height: 150px; float: left; margin: 30px 50px 5px 5px;">
                <div style="font-size: 40px; font-weight: bolder; padding: 10px;"><?= $voter->FirstName; ?> <?= $voter->MiddleName ?> <?= $voter->LastName ?></div>
                <div style="font-size: 20px; font-style: italic;">
                    Voter ID: <?= $voter->VoterID ?>
                </div>
                <div>
                    <hr style="border-top: 5px solid black; ">
                </div>

                <table>
                    <tr>
                        <td class="label">
                            Sex:
                        </td>
                        <td class="input">
                            <?= $voter->Gender; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">
                            Date of Birth:
                        </td>
                        <td class="input">
                            <?= date_format(date_create($voter->Birthday), 'F d, Y'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">
                            Place Of Birth:
                        </td>
                        <td class="input">
                            <?= $voter->BirthCity ?>, <?= $voter->BirthProvince; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">
                            Civil Status:
                        </td>
                        <td class="input">
                            <?= $voter->CivilStatus ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">
                            Name of Spouse, If Married:
                        </td>
                        <td class="input">
                            <?= $voter->Spouse ?? 'N/A' ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h1>Residence/Address</h1>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">
                            Province:
                        </td>
                        <td class="input">
                            <?= $voter->Province; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">
                            City/Municipality:
                        </td>
                        <td class="input">
                            <?= $voter->City ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">
                            Barangay:
                        </td>
                        <td class="input">
                            <?= $voter->Barangay ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">
                            Street:
                        </td>
                        <td class="input">
                            <?= $voter->Street ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <h1>Period of Residence </h1>
                            <h2>In the City/Mun</h2>
                        </td>
                    </tr>

                    <tr>
                        <td class="label">
                            No. of Years:
                        </td>
                        <td class="input">
                            <?= $voter->yearsCity; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">
                            No. of Months:
                        </td>
                        <td class="input">
                            <?= $voter->monthsCity ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <h2>In the Philippines</h2>
                        </td>
                    </tr>

                    <tr>
                        <td class="label">
                            No. of Years:
                        </td>
                        <td class="input">
                            <?= $voter->yearsPH ?>
                        </td>
                    </tr>
                </table>
            </div>
    </form>
</div>

<?php  //  require_once APPROOT . '/includes/footer.php' 
?>