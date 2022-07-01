<?php
declare(strict_types=1);
?>
<?php
include("Model/Post.php");

class PostLoader{

    public function insertPostData($postData){

        echo "inside INsert POST DATA";
        $newPost = new Post($postData['firstName'],$postData['surname'],$postData['email'],$postData['message']);

        $file = 'D:\BeCode\webpage\guestbook-php\guestMessage.txt';
// Open the file to get existing content
        $current = file_get_contents($file);
// Append a new person to the file
        $current .= " \n  ".$newPost->getFirstName()."  ".$newPost->getSurname()."  ".$newPost->getEmail()."  ".$newPost->getMessage();
// Write the contents back to the file
        file_put_contents($file, $current);


    }

    /**
     * get all guest messages
     */
    public function getAllPosts(){
        // If strict types are enabled i.e. declare(strict_types=1);
        $file = file_get_contents('D:\BeCode\webpage\guestbook-php\guestMessage.txt', true);
        return $file;
    }
}