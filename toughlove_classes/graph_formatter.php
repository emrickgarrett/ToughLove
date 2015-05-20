<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 5/12/2015
 * Time: 2:43 PM
 */

/**
 * Class graph_formatter. Simply formats the data it receives from the DB in a way that I can use for graphing on the
 * site.
 */
class graph_formatter{

    public $username = "";

    public function __construct($username){
        $this -> username = $username;
    }

    public function __destruct(){

    }

    /**
     * @param $username : Users username
     * @param $graph_type : The information you want, currently Running, Weight and Usage is what I have planned
     * @return string : The data returned in a usable format
     *
     * Call other function that is responsible for pulling data from the database. This class will not be located in GIT
     * for security reasons.
     */
    private function pullInformation($username, $graph_type)
    {
        return [""];
    }

    /**
     * @return string : Formatted Data
     *
     * Gets the running data from the DB and formats it according to how I want it to be graphed. Plannin on all of these
     * being line graphs for the time being.
     */
    public function getRunningData(){
       return $this -> pullInformation($this -> username, 'RUNNING');
    }

    /**
     * @return string : Formatted Data
     *
     * Gets the weight data from the DB and formats it according to how I want it to be graphed. Planning on all of these
     * being line graphs for the time being.
     */
    public function getWeightData(){
       return $this -> pullInformation($this -> username, 'WEIGHT');
    }

    /**
     * @return string : Formatted Data
     * Gets the weight data from the DB and formats it according to how I want it to be graphed. Planning on all of these
     * being line graphs for the time being.
     */
    public function getUsageData(){
       return $this -> pullInformation($this -> username, 'USAGE');
    }



}




?>