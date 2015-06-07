<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 5/10/2015
 * Time: 8:24 PM
 */

class User{

    public $first_name = "Garrett";
    public $last_name = "Emrick";
    public $age = 20;
    public $username = "username";
    public $profile_pic = "images/garrett.jpg";
    public $days_active = 4;
    public $weight_lost = "2.3lbs";
    public $weight_goal = "45lbs";

    public function __construct($newUsername){
        //Called when class is created
        $this -> loadUser($newUsername);
    }

    public function __destruct(){
        //Called when class is destroyed
    }

    public function __toString(){
        //Converts object to string
        return $this -> first_name . " " . $this -> last_name . " : " . $this -> username;
    }

    private function loadUser($newUsername){
        $this -> username = $newUsername;
        //Dummy data for now
        $this -> name = "Garrett Emrick";
    }

    public function setName($newName){
        $this -> name = $newName;
    }

    public function setUsername($newUsername){
        $this -> username = $newUsername;
    }

    public function getAlbumLength(){
        return count($this -> getAlbumPhotos());
    }

    public function getFeedLength(){
        return 11;
    }

    public function getFeed(){

    }

    private function formatFeed(){

    }

    public function getAlbumPhotos(){
        $result = array();
        $result[0] = "<a href='images/belly.jpg'><img src='images/belly.jpg'/></a>";
        $result[1] = "<a href='images/garrett.jpg'><img src='images/garrett.jpg'/></a>";
        $result[2] = "<a href='images/hiking.jpg'><img src='images/hiking.jpg'/></a>";

        return $result;
    }

    private function formatPhotos($photoArray){
        $result = "";

        $size = count($photoArray);
        for($i = 0; $i <  $size; $i++){

            $result = $result . "<div class='album-photo'>" . $photoArray[$i] . "</div>";


            if($i == 12){
                $i = $size;
            }
        }

        return $result;
    }

    public function getAlbumPhotosFormatted(){ return $this -> formatPhotos( $this -> getAlbumPhotos());}


}

?>