<?php
require_once 'includes/init.php';
Auth::requireLogin();

$conn = require_once 'includes/db.php';

$senatorialCandidates = Candidate::getAllCandidatesByPosition('senator', $conn);
$presidentialCandidates = Candidate::getAllCandidatesByPosition('president', $conn);
$vpCandidates = Candidate::getAllCandidatesByPosition('vice president', $conn);

$checkExceeded = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['senator']) && !empty($_POST['senator'])) {
        if (count($_POST['senator']) > 12) {
            $checkExceeded = true;
        }
    }

    foreach ($_POST as $post) {

        if (is_array($post)) {
            foreach ($post as $senator) {
                $vote = new Vote($_SESSION['voterID'], $senator);                
                $vote->castVote($conn);
            }
        } else {
            $vote = new Vote($_SESSION['voterID'], $post);

            if ($vote->castVote($conn)) {
                redirect('profile.php');
            }
        }
        
    }
}

?>

<?php require_once APPROOT . '/includes/header.php' ?>

<div class="frame <?= $checkExceeded ? '' : 'hide' ?>">
    <div class="modal <?= $checkExceeded ? '' : 'hide' ?>">
        <img src="https://100dayscss.com/codepen/alert.png" width="44" height="38" />
        <span class="title">Amount Exceeded!</span>
        <p>You can only check at most 12 senators.</p>
        <div class="button">Dismiss</div>
    </div>
</div>
<div class="vote-container">
    <?php require_once APPROOT . '/includes/navbar.php' ?>
    <div class="dashed-border-container">
        <form action="<?= htmlspecialchars(URLROOT . '/vote.php') ?>" method="POST">
            <div class="ballot-container center">

                <div class="position-container president-container">
                    <div class="president-title">
                        <h2>PRESIDENT</h2>
                        <p>Vote no more than 1, or leave blank.</p>
                    </div>
                    <div class="candidates-grid president">
                        <?php $count = 1; ?>
                        <?php foreach ($presidentialCandidates as $pCandidate) : ?>
                            <div>
                                <input type="radio" name="president" id="<?= $pCandidate->CandidateID; ?>" value="<?= $pCandidate->CandidateID; ?>">
                                <label for="<?= $pCandidate->CandidateID ?>"><?= $count++; ?>. <?= $pCandidate->LastName ?>, <?= $pCandidate->FirstName ?> (<?= $pCandidate->Party; ?>)</label>
                            </div>
                        <?php endforeach; ?>
                        <div></div>
                        <div></div>
                    </div>
                </div>

                <div class="position-container vice-president-container">
                    <div class="vice-president-title">
                        <h2>VICE PRESIDENT</h2>
                        <p>Vote no more than 1, or leave blank.</p>
                    </div>
                    <div class="candidates-grid vice-president">
                        <?php $count = 1; ?>
                        <?php foreach ($vpCandidates as $vpCandidate) : ?>
                            <div>
                                <input type="radio" name="vice-president" id="<?= $vpCandidate->CandidateID ?>" value="<?= $vpCandidate->CandidateID ?>">
                                <label for="<?= $vpCandidate->CandidateID ?>"><?= $count++ ?>. <?= $vpCandidate->LastName ?>, <?= $vpCandidate->FirstName ?> (<?= $vpCandidate->Party ?>)</label>
                            </div>
                        <?php endforeach; ?>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>

                <div class="position-container senator-container">
                    <div class="senator-title">
                        <h2>SENATOR</h2>
                        <p>Vote no more than 12, or leave blank.</p>
                    </div>
                    <div class="candidates-grid senator">
                        <?php $count = 1; ?>
                        <?php foreach ($senatorialCandidates as $senatorialCandidate) : ?>
                            <div>
                                <input type="checkbox" name="senator[]" id="<?= $senatorialCandidate->CandidateID; ?>" value="<?= $senatorialCandidate->CandidateID; ?>">
                                <label for="<?= $senatorialCandidate->CandidateID; ?>"><?= $count++; ?>. <?= $senatorialCandidate->LastName ?>, <?= $senatorialCandidate->FirstName ?> (<?= $senatorialCandidate->Party; ?>)</label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div id="submit-container">
                    <input type="submit" value="Submit" id="voteSubmit-btn">
                    <input type="button" value="Start over" id="start-over-btn">
                </div>
            </div>
        </form>
    </div>
</div>
<?php require_once APPROOT . '/includes/footer.php'; ?>