<?php
declare(strict_types=1);
?>
<?php
include("Model/Post.php");

class PostLoader{

    public function insertPostData($postData){

        echo "inside INsert POST DATA";
        $newPost = new Post($postData['firstName'],$postData['surname'],$postData['email'],$postData['message']);
        $nextMessage = array(
            "firstName" => $newPost->getFirstName(),
            "surname" => $newPost->getSurname(),
            "email" => $newPost->getEmail(),
            "message" => $newPost->getMessage(),
            "date" => $newPost->getDate()

        );

        $file = 'D:\BeCode\webpage\guestbook-php\guestMessage.txt';
        $current = file_get_contents($file);
        $tempArray = json_decode($current);
        $tempArray[] = $nextMessage;
        $encodedArr = json_encode($tempArray);
        file_put_contents($file, $encodedArr);
    }

    /**
     * get all guest messages
     */
    public function getAllPosts(){
        $fileContents = file_get_contents('D:\BeCode\webpage\guestbook-php\guestMessage.txt', true);
        return json_decode($fileContents, true);
    }
}