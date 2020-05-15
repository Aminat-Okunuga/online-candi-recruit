<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 12-May-20
 * Time: 10:03 AM
 */

include 'standardheader.php';
if (isset($_POST['submit'])) {
    if (!empty($_POST['questionAns'])) {
        $count = count($_POST['questionAns']);
        echo "You have answered  " . $count . "questions";



        $selected = $_POST['questionAns'];// answers chosen by candidate

        $result = 0;
        foreach ($selected as $item) {

            $quest = $answer->getQuestionAnswer($item);
            $ans = $answer->getCorrectAnswer();

            $answerId = $answer->getQuestionAnswer($item);
            if ($answerId == $_POST['questionAns']){
                $result++;
            }
        }
    }
}

?>

<!--Log out-->
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 md-auto d-block">
        <button type="submit"><a href="logout.php" class="btn btn-primary">Logout</a></button>
    </div>
</div>