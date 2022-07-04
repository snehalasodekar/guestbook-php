<?php
declare(strict_types=1);
?>
<?php
include("Model/Post.php");

class PostLoader{
    public string $imgPath;
    public function insertPostData($postData){

       // echo "inside INsert POST DATA <pre/>";

        $imagePath = $this->saveImageData($_FILES["fileToUpload"]);

        if($imagePath == 3){
            $newPost = new Post($postData['firstName'],$postData['surname'],$postData['title'],$postData['message'],$this->imgPath);
            $nextMessage = array(
                "firstName" => $newPost->getFirstName(),
                "surname" => $newPost->getSurname(),
                "title" => $newPost->getTitle(),
                "message" => $this->checkMessage($newPost->getMessage()),
                "date" => $newPost->getDate(),
                "image"=>$newPost->getImage()

            );

            $file = '.\src\guestMessage.txt';
            $current = file_get_contents($file);
            $tempArray = json_decode($current);
            $tempArray[] = $nextMessage;
            $encodedArr = json_encode($tempArray);
            file_put_contents($file, $encodedArr);
        }else {
            echo '<div class="alert alert-danger" role="alert">Please enter valid image and don\'t use bad words</div>';
        }
    }
    /**
     * message validation
     */
    public function checkMessage($message):string {
        $badWordsArr = ['stupid','idiot','fuck', 'shit', 'ass', 'bitch'];
        $replaceBadWords = ['s*','i*','f*', 'sh*', 'a*', 'b*'];
        $filteredMessage = str_replace($badWordsArr, $replaceBadWords, $message);
        $textEmojis = [':)', ':-)', ':(', ':-(', ':D', ':-D', 'xD', ':o', ':-o'];
        $emojis = ['&#128522', '&#128522', '&#128543', '&#128543', '&#128516', '&#128516', '&#128518', '&#128558', '&#128558'];

        return str_replace($textEmojis, $emojis ,$filteredMessage);
    }

    /**
     * Save uploaded file to the folder and return it's name
     */
    public function saveImageData($imageFile){
        //var_dump($fileName);exit;
        $maxsize=2097152;
        $returnVal = 3;
        $format=array("image/jpeg", "image/gif", "image/png");
        if($imageFile['size']>=$maxsize) {
            $error_1='File Size too large';
            //return false;
            return '<script>alert("'.$error_1.'")</script>';
        }
        elseif($imageFile['size']==0){
            $error_2='Invalid File';
            //return false;
            return '<script>alert("'.$error_2.'")</script>';
        }
        elseif(!in_array($imageFile['type'],$format)){
            $error_3='Format Not Supported.Only .jpeg files are accepted';
            //return false ;
            return '<script>alert("'.$error_3.'")</script>';
        }else{
            $target_dir = ".\src\uploadedImg\/";
            $target_file = $target_dir .'_a_'. basename($imageFile["name"]);
            if(move_uploaded_file($imageFile["tmp_name"], $target_file)){
                $this->imgPath = $target_file;
                return $returnVal;
            }

        }
    }
    /**
     * get all guest messages
     */
    public function getAllPosts(){
        $fileContents = file_get_contents('.\src\guestMessage.txt', true);
        return json_decode($fileContents, true);
    }
}