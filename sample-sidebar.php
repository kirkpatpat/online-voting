<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>

<style>
    .container {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: 1fr 1fr 1fr;
        gap: 0px 0px;
        grid-auto-flow: row;
        width: 500px;
        border: 1px solid black;
        text-align: center;
        grid-template-areas:
            "."
            "."
            ".";
    }

    .nav-item > a {
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
        column-gap: 2rem;
    }

    .nav-item p {
        font-size: 2rem;
    }

    .nav-item i {
        font-size: 5rem;
    }

    a {
        text-decoration: none;
    }

    a:visited {
        text-decoration: none;
        color: black;
    }

    .icon-container {
        text-align: right;
    }

    .nav-title-container {
        text-align: left;
    }


</style>

<body>
    <div class="container">
        <div class="sidebar-title">PROFILE</div>
        <div class="nav-item">
            <a href="">
                <div class="icon-container">
                    <i class="fa fa-user-circle"></i>
                </div>
                <div class="nav-title-container">
                    <p>Profile</p>
                </div>
            </a>
        </div>
        <div class="nav-item">
            <a href="">
                <div class="icon-container">
                    <i class="fa fa-check-square"></i>
                </div>
                <div class="nav-title-container">
                    <p>Vote</p>
                </div>
            </a>
        </div>
        <div class="nav-item">
            <a href="">
                <div class="icon-container">
                    <i class="fas fa-poll-h"></i>
                </div>
                <div class="nav-title-container">
                    <p>Election Statistics</p>
                </div>
            </a>
        </div>
    </div>
</body>

</html>