<?php
include 'connect.php';

class login extends connect
{
    public function __construct()
    {
        parent::__construct();
    }
    public function register()
	{
		if ($this->db_handle) 
        {
              $result = mysqli_query($this->db_handle, "SELECT id FROM login");
              $g = 0; 
              while ($row = mysqli_fetch_assoc($result)) 
              {
                    if ($row['id'] == $_POST['t1']) 
                    {
                        $g = 1;
                        break;
                    }
            }
        if ($g == 1) 
        {
            echo "<script>alert('ID already exist')</script>";
        } 
        else 
        {
           $sql="insert into login values('$_POST[t1]' , '$_POST[t2]' )";
			mysqli_query($this->db_handle , $sql);
			echo"<script language=javascript> alert('Record Saved')</script>";
        }
	    }
	}

public function login()
{
    if($this->db_handle)
    {
        $f = 0;

        $r = mysqli_query($this->db_handle, "SELECT * FROM login");

        while($db_field = mysqli_fetch_assoc($r))
        {
            if($db_field['id'] == $_POST['t1'] &&
            $db_field['pwd'] == $_POST['t2'])
            {
                $f = 1;
                break;
            }
        }

        if($f == 1)
{
    session_start();
    $_SESSION['taj_admin'] = $_POST['t1'];
    echo "<script>
        alert('WELCOME TO TAJ HOTELS AND RESORTS AND HOPE U HAVE A WONDERFUL STAY AHEAD !!');
        window.location.href = 'home.html';
    </script>";
}
        else
        {
            echo "<script> alert('Wrong Login ID or Password'); </script>";
        }
    }
}
}
$obj = new login();

if(isset($_REQUEST["b1"]))
    $obj->login();
if(isset($_REQUEST["b2"]))
    $obj->register();
?>