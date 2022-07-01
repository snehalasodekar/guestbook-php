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
                $this->postLoader->getAllPosts();
                include 'view/allPostView.php';
                break;
            case 'sendMessage':
                /*echo "from controller.php <pre/>";
                echo "First Name = ".$_POST['firstName'];
                echo "Surname = ".$_POST['surname'];
                echo "Email = ".$_POST['email'];
                echo "Message = ".$_POST['message'];*/


                //($_POST['firstName'],$_POST['surname'],$_POST['email'],$_POST['message']);
                $this->postLoader->insertPostData($_POST);
                echo "Thank you For your message";
            case 'default':
                $this->postLoader->getAllPosts();
                include 'view/allPostView.php';
                break;
        }
    }
}