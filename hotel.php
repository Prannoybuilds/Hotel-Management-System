 <?php
include 'connect.php';
class hotel extends connect
{
	
 	public function __construct()
	{
		parent::__construct();
	}
	
	public function input()
	{
		if($this->db_handle)
		{
			$f = 0;
			$r = mysqli_query($this->db_handle, "SELECT hotel_code FROM hotel");

			while($db_field = mysqli_fetch_assoc($r))
			{
				if($db_field['hotel_code'] == $_POST['t1'])
				{
					$f = 1;
					break;
				}
			}

			if($f == 1)
			{
				echo "<script>alert('Data Already Exists');</script>";
			}
			else
			{
				$sql="insert into hotel values('$_POST[t1]' , '$_POST[t2]' , '$_POST[t3]' , '$_POST[t4]' , '$_POST[t5]' , '$_POST[t6]')";
				mysqli_query($this->db_handle , $sql);
				echo"<script language=javascript> alert('Record Save')</script>";
			}
		}
	}



	public function delete()
	{
		if($this->db_handle)
		{
			$sql="delete from hotel where Hotel_code='$_POST[t1]' ";
			mysqli_query($this->db_handle , $sql);
			echo"<script language=javascript> alert('Record Delete')</script>";
		}
	}

	public function update()
    {
        if ($this->db_handle) 
		{
            $sql = "UPDATE hotel
                    SET emp_id='$_POST[t2]',
                        location='$_POST[t3]',
                        hotel_name='$_POST[t4]',
                        created_date='$_POST[t5]',
                        created_by='$_POST[t6]'
                    WHERE hotel_code='$_POST[t1]'";
            mysqli_query($this->db_handle, $sql);
            echo "<script language='javascript'> alert('Record Updated')</script>";
        }
    }

	public function allsearch()
	{
		if($this->db_handle)
			{
				$r=mysqli_query($this->db_handle,"select * from hotel");
				echo"<center>";
				echo"<table border=1 bg color=cray>";
				echo"<tr>";
				echo"<th> HOTEL CODE </th> 
				<th> EMP ID </th>
				<th> LOCATION </th>
				<th> HOTEL NAME </th>
				<th> CREATED DATE </th>
				<th> CREATED BY </th>";
				echo"</tr>";
				while($db_field=mysqli_fetch_assoc($r))
					{
						echo "<tr>";
						echo "<td>" . $db_field['hotel_code'] . "</td>";
						echo "<td>" . $db_field['emp_id'] . "</td>";
						echo "<td>" . $db_field['location'] . "</td>";
						echo "<td>" . $db_field['hotel_name'] . "</td>";
						echo "<td>" . $db_field['created_date'] . "</td>";
						echo "<td>" . $db_field['created_by'] . "</td>";
						echo "</tr>";
					}
					echo"</table>";
					echo"</center>";
			}
	}


	public function psearch()
	{
		if($this->db_handle)
			{
				$r=mysqli_query($this->db_handle,"select * from hotel where hotel_code = '$_POST[t1]'");
				echo"<center>";
				echo"<table border=1 bg color=cray>";
				echo"<tr>";
				echo"<th> HOTEL CODE </th> 
				<th> EMP ID </th>
				<th> LOCATION </th>
				<th> HOTEL NAME </th>
				<th> CREATED DATE </th>
				<th> CREATED BY </th>";
				echo"</tr>";
				while($db_field=mysqli_fetch_assoc($r))
					{
						echo "<tr>";
						echo "<td>" . $db_field['hotel_code'] . "</td>";
						echo "<td>" . $db_field['emp_id'] . "</td>";
						echo "<td>" . $db_field['location'] . "</td>";
						echo "<td>" . $db_field['hotel_name'] . "</td>";
						echo "<td>" . $db_field['created_date'] . "</td>";
						echo "<td>" . $db_field['created_by'] . "</td>";
						echo "</tr>";
					}
					echo"</table>";
					echo"</center>";
			}
	}

	public function spsearch()
    {
        if ($this->db_handle)
        {
            $field=$_POST["s"];
            
            if($field=="all")
                $str="SELECT * FROM hotel";
            else
                $str="SELECT * FROM hotel WHERE $field='$_POST[t1]'";


            $sql = mysqli_query($this->db_handle, $str);
            echo "<center>";
            echo "<table border=1 bgcolor=gray>";
            echo "<tr>";
            echo "<th> HOTEL CODE </th>";
            echo "<th> EMP ID </th>";
            echo "<th> LOCATION </th>";
            echo "<th> HOTEL NAME </th>";
			echo "<th> CREATED DATE </th>";
			echo "<th> CREATED BY </th>";
            echo "</tr>";

            while ($db_field = mysqli_fetch_assoc($sql))
            {
                echo "<tr>";
                echo "<td>".$db_field['hotel_code']."</td>";
                echo "<td>".$db_field['emp_id']."</td>";
                echo "<td>".$db_field['location']."</td>";
                echo "<td>".$db_field['hotel_name']."</td>";
				echo "<td>".$db_field['created_date']."</td>";
				echo "<td>".$db_field['created_by']."</td>";
                echo "</tr>";
            }
		}
	}

}
$obj=new hotel();
if(isset($_REQUEST["b2"]))
	$obj->input();
if(isset($_REQUEST["b3"]))
	$obj->update();
if(isset($_REQUEST["b4"]))
	$obj->delete();
if(isset($_REQUEST["b5"]))
	$obj->allsearch();
if(isset($_REQUEST["b6"]))
	$obj->psearch();
if(isset($_REQUEST["spsearch"]))
	$obj->spsearch();

?>

