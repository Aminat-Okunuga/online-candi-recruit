<?php

class Answer
{
    //properties
    private $db;
    private $id;
    private $answer;
    private $question_id;
    private $correct_answer;


    function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
    }


    public function getAnswers($id)
    {
        try {
//            $stmt = $this->db->prepare("SELECT * FROM answers WHERE answer_id = 1 ORDER BY answer ");
            $stmt = $this->db->prepare("SELECT * FROM answers WHERE question_id =:id ");
//            $stmt = $this->db->prepare("SELECT * FROM answers ORDER BY answer ");
            $stmt->execute(array(":id"=> $id));

            if ($stmt->rowCount() > 0) {
                $result = array();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $result[] = $row;
                }
            } else {
                $result = "";
            }
            return $result;

        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return "";
        }

    }


    public function setAnswers($id)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM answers WHERE id=:id");
            $stmt->execute(array(":id" => $id));
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->setId($result['id']);
            $this->setAnswer($result['answer']);
            $this->setQuestionId($result['question_id']);
            $this->setCorrectAnswer($result['correct_answer']);
            return true;

        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    public function getQuestionAnswer($question_id)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM answers WHERE correct_answer = '1' AND question_id = $question_id");
            $stmt->execute();

            if($stmt->rowCount() > 0){
                $result = array();
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    $result[] = $row;
                }
            }else{
                $result = "";
            }
            return $result;

        }catch(PDOException $ex){
            echo $ex->getMessage();
            return "";
        }
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setAnswer($answer)
    {
        $this->answer = $answer;
    }

    public function getAnswer()
    {
        return $this->answer;
    }

    public function setQuestionId($question_id)
    {
        $this->question_id = $question_id;
    }

    public function getQuestionId()
    {
        return $this->question_id;
    }
    public function setCorrectAnswer($correct_answer)
    {
        $this->correct_answer = $correct_answer;
    }

    public function getCorrectAnswer()
    {
        return $this->correct_answer;
    }
}

?>