<?php
require_once 'includes/init.php';

$conn = require_once 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $pass = $_POST['pass'];

    if ($user = Voter::getVoter($conn, $VoterID)) {
        
    }
}
?>

<?php require_once APPROOT . '/includes/header.php' ?>


<!-- KIRK PATTAWI -->
<div class="container-login">
    <?php require_once APPROOT . '/includes/navbar.php'  ?>
    <div class="login">
        <div class="back-center">

        </div>
        <div class="center">
            <img src="resources/images/login.png" alt="Log In" width="200" height="200" class="center-element">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="input-icons">
                    <i class="fa fa-user icon" style="font-size: 1.2rem;"></i>
                    <input type="number" name="id" placeholder="Voter ID"><br>
                </div>
                <div class="input-icons">
                    <i class="fa fa-key icon" style="font-size: 1.2rem;"></i>
                    <input type="password" name="pass" placeholder="Password">
                </div>
                <input type="submit" name="btnLogin" value="Login" class="center-element btn-login">
                <a href="register.php" style="text-decoration:none;" class="signup-link"><button class="center-element btn-register">Sign Up</button></a>
            </form>
        </div>
    </div>
    <?php
    if (isset($_POST['btnLogin'])) {


        $selectAccount = $conn->prepare("SELECT `VoterID`,`Usertype` FROM `user` WHERE `VoterID`= ? AND `Password` = ?;");
        $selectAccount->bind_param("ss", $id, $pass);
        $selectAccount->execute();
        $selectAccount->store_result();
        $selectAccount->bind_result($VoterID, $Usertype);

        if ($selectAccount->num_rows == 0)
            echo '<p> No record found </p>';
        else {
            while ($selectAccount->fetch()) {
                $_SESSION['VoterID'] = $VoterID;
                $_SESSION['Usertype'] = $Usertype;
            }
            if ($_SESSION['Usertype'] == 'Voter')
                header('location: profile.php');
            else if ($_SESSION['Usertype'] == 'Official')
                header('location: profile.php');
        }
    }
    ?>

</div>

<?php // require_once APPROOT . '/includes/footer.php' 
?>