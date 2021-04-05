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
    public function git_img(){
        $username = $_SESSION['userprofile'];
        // echo $username;
        include('connecttions.php');
        $query = "SELECT * FROM นายช่าง  WHERE username = '$username'";
        $result = mysqli_query($connect, $query)or die ("Error in query: $query " . mysqli_error($connect));

        if($result)
        {
            return $result;
        }else{
            return false;
        }
    }
    public function get_search($q){
        include('connecttions.php');
        $query = "SELECT * FROM masterlogin INNER JOIN นายช่าง ON masterlogin.username = นายช่าง.username WHERE ชื่อ LIKE '%$q%' OR นามสกุล LIKE '%$q%' OR ประเภท LIKE '%$q%' OR ราคา LIKE '%$q%'";
        $result = mysqli_query($connect, $query)or die ("Error in query: $query " . mysqli_error($connect));

        if($result)
        {
            return $result;
        }else{
            return false;
        }
    }
    public function get_listprofile(){
        $usernames = $_SESSION['userprofile'];
        include('connecttions.php');
        $query = "SELECT * FROM masterlogin INNER JOIN นายช่าง ON masterlogin.username = นายช่าง.username WHERE นายช่าง.username != '$usernames'";
        $result = mysqli_query($connect, $query)or die ("Error in query: $query " . mysqli_error($connect));

        if($result)
        {
            return $result;
        }else{
            return false;
        }
    }

}


?>