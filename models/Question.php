<?php
class Question{
    //properties
    private $db;
    private $id;
    private $question;



    function __construct(){
        $database = new Database();
        $this->db = $database->getConnection();
    }


    public function getQuestions($id){
        try{
            $stmt = $this->db->prepare("SELECT * FROM questions WHERE id =:id ORDER BY question");
            $stmt->execute(array(":id"=>$id));

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



    public function setQuestions($id){
        try{
            $stmt = $this->db->prepare("SELECT * FROM questions WHERE id=:id");
            $stmt->execute(array(":id"=>$id));

            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->setId($result['id']);
            $this->setQuestion($result['question']);

            return true;

        }catch(PDOException $ex){
            echo $ex->getMessage();
            return false;
        }
    }



    public function getQuestionAnswer()
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM questions");
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

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setQuestion($question){
        $this->question = $question;
    }
    public function getQuestion(){
        return $this->question;
    }


}

?>