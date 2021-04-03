<?php
class User{
    public function get_profile()
    {
        include('connecttions.php');
        $query = "SELECT * FROM masterlogin INNER JOIN นายช่าง ON masterlogin.username = นายช่าง.username";
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