<?php
class User{
    public function get_profile()
    {
        include('connecttions.php');
        $query = "SELECT * FROM นายช่าง";
        $result = mysqli_query($connect, $query);
        if($result)
        {
            return $result;
        }else{
            return false;
        }
    }

}


?>