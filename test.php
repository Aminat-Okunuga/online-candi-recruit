<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 11-May-20
 * Time: 10:51 AM
 */

include 'standardheader.php';
//include 'auto_load.php';

?>

<head><title>Online Test</title></head>
<!-- Slider 1 Area Start Here -->
<div class="slider1-area overlay-default">
    <div class="bend niceties preview-1">
        <div class="inner-page-banner-area" style="background-image: url('img/slider/recruitmenttest-1.jpg'); height: 100px;">
        </div>
    </div>
</div>


<div class="about2-area">
    <div class="container">
        <h1 class="about-title">Welcome To CandiRecruit Online Test</h1>
        <fieldset style="border: 1px solid #000088; padding: 20px;">
            <form role="form" action="validate_answer.php" method="post" class="form">
                <div class="row">
                    <div class="col-lg-8 m-auto d-block">
                        <div class="form-group card">
                            <?php
                            for($id=1; $id <= 2; $id ++){
                                $ques = $question->getQuestions($id);
                                if($ques != ""){
                                    foreach ($ques as $item){
                                        $question->setQuestion($item['question']);
                                        ?>
                                        <h4 class="card-header"><?php echo $question->getQuestion(); ?></h4>

                                        <?php
                                        $ans = $answer->getAnswers($id);
                                        if ($ans != ""){
                                            foreach ($ans as $rec) {
                                                $answer->setAnswers($rec['id']);
                                                ?>
                                                <div class="card-body">
                                                    <input type="radio" name="questionAns['<?php echo $answer->getQuestionId();?>']" value="<?php echo $answer->getId(); ?>" >
                                                    <?php echo $answer->getAnswer();?>
                                                </div>

                                                <?php
                                            }
                                        }}
                                }}
                            ?>
                        </div>
                    </div>
                </div>


                <input type="submit" name="submit" value="Submit" class="btn btn-primary m-auto d-block">
            </form>
        </fieldset>
        <br>
    </div>

</div>

<?php include 'standardfooter.php'; ?>

