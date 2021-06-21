<?php

/**
 * class Movie
 * v 0.0.1
 * by SC
 * git.....
 */
class Movie{

  public $overview = '';
  private $original_title;
  private $genres = [];
  private $cast = [];
  private $vote_average = 0;
  private static $counter = 0;

  /**
   * constructor
   *
   * @param string $_original_title
   */
  public function __construct($_original_title)
  {
    $this->original_title = $_original_title;
    self::$counter++;
  }


  /***********************************
   * SETTER
   **********************************/

   /**
    * setGenres
    *
    * @param string $genresString
    * @return void
    */
   public function setGenres($genresString){

      $this->genres = explode('|',$genresString);

   }

   /**
    * setCast
    *
    * @param string $castString
    * @return void
    */
   public function setCast($castString){

      $this->cast = explode('|',$castString);

   }

   /**
    * setVote
    *
    * @param int $_vote_average
    * @return void
    */
   public function setVote($_vote_average)
   {
      $this->vote_average  = $_vote_average;
   }



   /***********************************
   * GETTER
   **********************************/

   /**
    * getTitle
    *
    * @return string
    */
   public function getTitle()
   {
     return $this->original_title;
   }

   /**
    * getGenres
    *
    * @return array
    */
   public function getGenres(){
     return $this->genres;
   }

   /**
    * getCast
    *
    * @return array
    */
   public function getCast(){
     return $this->cast;
   }

   /**
    * getVote
    *
    * @return int
    */
   public function getVote(){
     return $this->vote_average;
   }

   /**
    * getCounter
    *
    * @return int
    */
   public static function getCounter(){
     return self::$counter;
   }

}


?>