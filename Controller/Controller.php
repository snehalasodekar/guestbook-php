<?php


include_once('Model/PostLoader.php');
class Controller {
    public $post;
    public $page;

    public function __construct()
    {
        $this->postLoader = new PostLoader();
        $this->page = 'allPost';
    }

    public function invoke(){
       //print_r($_POST);
        if(isset($_POST['page'])){
            $this->page = $_POST['page'];
        }
        switch($this->page){
            case 'newpost':
                //file_put_contet
                include 'view/newPostView.php';
                break;
            case 'allPost':
                //file get content
                $decodedFileContent = $this->postLoader->getAllPosts();
                if($decodedFileContent){$postNumber = count($decodedFileContent);}
                include 'view/allPostView.php';
                break;
            case 'postNumber':

                $decodedFileContent = $this->postLoader->getAllPosts();
                if($decodedFileContent){$postNumber = $_POST['postNumber'];}
                include 'view/allPostView.php';
                break;
            case 'sendMessage':
                $this->postLoader->insertPostData($_POST);
                //echo "Thank you For your message";
            case 'refresh':
                $_SERVER['PHP_SELF'];
            case 'default':

                $decodedFileContent = $this->postLoader->getAllPosts();
                if($decodedFileContent){$postNumber = count($decodedFileContent);}
                include 'view/allPostView.php';
                break;
        }
    }
}