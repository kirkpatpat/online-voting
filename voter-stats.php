<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "votingvotingdb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistics</title>
    <link rel="stylesheet" type="text/css" href="css/voter-stats.css">
</head>
<body>
    <div class="card">
        <div class="content">
            <div class="voted poppins-medium-mine-shaft-20px">
                <span class="poppins-medium-mine-shaft-20px">Voted</span>
            </div>
            <div>
                <?php
                    $answersQuery = $conn->prepare("SELECT COUNT(*) / (SELECT COUNT(*) FROM user) * 100 AS `Percentage` FROM user WHERE VoteStatus='Voted'");
                    $answersQuery->execute();
                    $answersQuery->store_result();
                    $answersQuery->bind_result($result);
                    $answersQuery->fetch();
                    echo number_format($result,2);             
                ?>%
            </div>
        </div>
        <img class="icon" src="resources/images/icon.png" />
    </div>

    <h1>Votes of Candidates per position</h1>

    <form method="post">
        <div class="position-container">
            <button name="pres">President</button>
            <button name="vp">Vice President</button>
            <button name="sen">Senators</button> 
        </div>
    </form>
    
    <div id="space">
        <?php
            $num=1;
            if(isset($_POST['pres'])) {
                $showAccounts = $conn->prepare("SELECT CONCAT(FirstName, ' ', LastName) AS FullName FROM candidate WHERE Position='president';");
                $showAccounts->execute();
                $showAccounts-> store_result();
                $showAccounts -> bind_result($name);
                while ($showAccounts -> fetch()) {
                    echo "<table>
                        <tr>
                        <td>$num. $name<br></td>
                        </tr>
                        </table";
                    $num++;
                }
                $showAccounts->close();
                $conn->close();
            }
        ?>
        <?php
            if(isset($_POST['vp'])) {
                $showAccounts = $conn->prepare("SELECT CONCAT(FirstName, ' ', LastName) AS FullName FROM candidate WHERE Position='vice president';");
                $showAccounts->execute();
                $showAccounts-> store_result();
                $showAccounts -> bind_result($name);
                while ($showAccounts -> fetch()) {
                    echo "<table>
                        <tr>
                        <td>$num. $name<br></td>
                        </tr>
                        </table";
                    $num++;
                }
                $showAccounts->close();
                $conn->close();
            }
        ?>
        <?php
            if(isset($_POST['sen'])) {
                $showAccounts = $conn->prepare("SELECT CONCAT(FirstName, ' ', LastName) AS FullName FROM candidate WHERE Position='senator';");
                $showAccounts->execute();
                $showAccounts-> store_result();
                $showAccounts -> bind_result($name);
                while ($showAccounts -> fetch()) {
                    echo "<table>
                        <tr>
                        <td>$num. $name<br></td>
                        </tr>
                        </table";
                    $num++;
                }
                $showAccounts->close();
                $conn->close();
            }
        ?>        
    </div>
  

    
</body>
</html>