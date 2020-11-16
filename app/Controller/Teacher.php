<?php
    namespace Ura\Dhura\Controller;
    use Ura\Dhura\Support\Database;

    /**
     * Class Teacher
     * @package Ura\Dhura\Controller
     */
    class Teacher extends Database{
        /**
         * @param $name
         * @param $email
         * @param $cell
         * @param $uname
         * Teachers Data Create
         */
        public function teachertmijao($name ,$email, $cell, $uname){
           $data = $this ->create("INSERT INTO teachers (name, email, cell, uname) VALUES ('$name', '$email', '$cell', '$uname')");

           if($data){
               return '<p class="alert alert-success">Student created successful ! <button class="close" data-dismiss="alert">&times;</button></p>';
           }
        }
         /**
          * All teacher data show
          */
         public function allteachershow(){
            $data = $this ->all('teachers');
            return $data;
         }
         public function single_teacher($id){
             $data = $this ->find('teachers', $id);

             return $data;
         }
    }
 ?>