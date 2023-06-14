<?php
require_once 'includes/init.php';

?>

<?php require_once APPROOT . '/includes/header.php' ?>

<div class="container-homepage">
    <?php require_once APPROOT . '/includes/navbar.php' ?>
    <div class="level-1">
        <div class="front-page">
            <h1 class="front-page-title">how does the philippine electoral system work?</h1>
            <p class="front-page-text">We all know that key people are being elected in different positions. 
                But, do we really know how the system works? How does one become elected?
                What is the process? Skip those long descriptions on Google because we got you covered.
            </p>
            <div class="image-container">
                <img src="<?= URLROOT ?>/resources/images/malacanang-bg.png" alt="">
            </div>
        </div>
    </div>

    <div class="level-2">
        <div class="flex positions">
            <h1>Positions to vote for</h1>
            <p>Elections have long granted the citizens the power to change the country's status quo. With
                thousands of seats to be filled up in the elections, one vote can either break or change a nation.
            </p>
            <p>The 2022 National Elections will take place for executive and legislative branches of the government
                on a national, provincial, and local level. The upcoming election will also decide the successors to
                Philippine president Rodrigo Roa Duterte and vice president Leni Robredo. There will also be elections
                for the 12 Senate seats, 316 seats to the House of Representatives, 81 seats for governors and vice
                governors, and 782 seats to provincial boards in provinces. 146 seats to city mayors and vice mayors,
                and 1,650 seats to city councils in all cities will also be filled up alongside seats to 1,488 municipal
                mayors and vice mayors, and 11,908 seats to municipal councils in all municipalities.
            </p>

            <div class="position-container">
                <a href="" class="position-item president selected">President</a>
                <a href="" class="position-item vice-president">Vice President</a>
                <a href="" class="position-item senators">Senators</a>
            </div>
            <div class="position-card">
                <div class="image-container">
                    <img src="<?= URLROOT ?>/resources/images/president-seal.png" alt="">
                </div>
                <div class="">
                    <h1 class="position-name">President</h1>
                    <p class="term"><strong>Term:</strong> 6 years; may not run for re-election</p>
                    <p class="function"><strong>Function:</strong> The president is the head of state and of government,
                     and functions as the commander-in-chief of the Armed Forces of the Philippines. 
                     As chief executive, the president exercises control over all the executive departments,
                    bureaus, and offices, and general supervision over local governments. The president 
                    appoints government officials, including the cabinet, the justices of the Supreme Court 
                    and heads of constitutional commissions, subject to confirmation requirements.</p>
                    <p class="qualifications-title"><strong>Qualifications:<br/></strong></p>
                    <ul class="qualifications">
                        <li>(1) Natural born and registered voter of the Philippines</li>
                        <li>(2) A registered voter</li>
                        <li>(3) Able to read & write</li>
                        <li>(4) 40 years of age on the day of the election</li>
                        <li>(5) Resident of the Philippines for at least 10 years before the election is held</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once APPROOT . '/includes/footer.php' ?>