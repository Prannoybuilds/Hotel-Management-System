 <?php
include 'connect.php';
class payment extends connect
{
	
 	public function __construct()
	{
		parent::__construct();
	}

	private function renderHeader($title)
	{
		echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'>";
		echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
		echo "<title>Taj Hotels & Resorts | {$title}</title>";
		echo "<link rel='stylesheet' href='style.css'>";
		echo "<link rel='stylesheet' href='form.css'>";
		echo "<link rel='preconnect' href='https://fonts.googleapis.com'>";
		echo "<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>";
		echo "<link href='https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Inter:wght@300;400;500;600;700&family=Cormorant+Garamond:wght@500;600;700&display=swap' rel='stylesheet'>";
		echo "</head><body>";

		echo "<aside class='sidebar' id='sidebar'>";
		echo "<div class='sidebar-header'>";
		echo "<div class='logo-box'><img src='taj-logo.png' class='sidebar-logo' alt='Taj'>";
		echo "<div class='brand'><h1>TAJ</h1><p>HOTELS & RESORTS</p></div></div>";
		echo "<button class='hamburger' id='sidebarToggle' aria-label='Toggle sidebar'>";
		echo "<svg viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2'><line x1='3' y1='6' x2='21' y2='6'/><line x1='3' y1='12' x2='21' y2='12'/><line x1='3' y1='18' x2='21' y2='18'/></svg>";
		echo "</button></div>";

		echo "<nav class='sidebar-nav'>";
		echo "<span class='nav-heading'>Overview</span>";
		echo "<a href='index.html' class='nav-link'><span class='nav-icon'><svg viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='1.8'><path d='M3 10.5L12 3l9 7.5'/><path d='M5 9.8V20h14V9.8'/></svg></span><span class='link-text'>Dashboard</span></a>";

		echo "<span class='nav-heading'>Guest Services</span>";
		echo "<a href='customer.html' class='nav-link'><span class='nav-icon'><svg viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='1.8'><circle cx='12' cy='8' r='3.4'/><path d='M5 20c0-4 3.2-6 7-6s7 2 7 6'/></svg></span><span class='link-text'>Customer</span></a>";
		echo "<a href='room.html' class='nav-link'><span class='nav-icon'><svg viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='1.8'><path d='M3 17V8h18v9'/><path d='M3 13h18'/><path d='M7 8V5h4v3'/></svg></span><span class='link-text'>Room</span></a>";
		echo "<a href='room_type.html' class='nav-link'><span class='nav-icon'><svg viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='1.8'><rect x='4' y='3' width='16' height='18' rx='2'/><path d='M8 7h2'/><path d='M14 7h2'/><path d='M8 11h2'/><path d='M14 11h2'/><path d='M8 15h8'/></svg></span><span class='link-text'>Room Type</span></a>";
		echo "<a href='booking1.php' class='nav-link'><span class='nav-icon'><svg viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='1.8'><rect x='3' y='5' width='18' height='16' rx='2'/><path d='M3 10h18'/><path d='M8 3v4'/><path d='M16 3v4'/></svg></span><span class='link-text'>Booking</span></a>";

		echo "<span class='nav-heading'>Finance</span>";
		echo "<a href='payment.html' class='nav-link active'><span class='nav-icon'><svg viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='1.8'><rect x='2.5' y='5' width='19' height='14' rx='2'/><path d='M2.5 10h19'/></svg></span><span class='link-text'>Payment</span></a>";
		echo "<a href='invoice.html' class='nav-link'><span class='nav-icon'><svg viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='1.8'><path d='M6 3h9l3 3v15H6z'/><path d='M9 9h6'/><path d='M9 13h6'/><path d='M9 17h4'/></svg></span><span class='link-text'>Invoice</span></a>";

		echo "<span class='nav-heading'>Organisation</span>";
		echo "<a href='emp_info.html' class='nav-link'><span class='nav-icon'><svg viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='1.8'><circle cx='12' cy='8' r='3'/><path d='M5 20c0-4 3-6 7-6s7 2 7 6'/></svg></span><span class='link-text'>Employee</span></a>";
		echo "<a href='dept_info.html' class='nav-link'><span class='nav-icon'><svg viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='1.8'><rect x='5' y='3' width='14' height='18'/><path d='M9 7h2'/><path d='M13 7h2'/><path d='M9 11h2'/><path d='M13 11h2'/><path d='M9 15h6'/></svg></span><span class='link-text'>Department</span></a>";
		echo "<a href='job_info.html' class='nav-link'><span class='nav-icon'><svg viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='1.8'><rect x='3' y='7' width='18' height='12' rx='2'/><path d='M8 7V5a2 2 0 012-2h4a2 2 0 012 2v2'/><path d='M3 12h18'/></svg></span><span class='link-text'>Job</span></a>";

		echo "<span class='nav-heading'>Tools</span>";
		echo "<a href='spsearch.html' class='nav-link'><span class='nav-icon'><svg viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='1.8'><circle cx='11' cy='11' r='7'/><path d='M21 21l-4.3-4.3'/></svg></span><span class='link-text'>SP Search</span></a>";
		echo "</nav>";

		echo "<div class='sidebar-footer'><a href='login.html' class='logout-btn'>Logout</a></div>";
		echo "</aside>";

		echo "<main class='main' id='main'>";
		echo "<header class='topbar'>";
		echo "<div class='welcome'><span class='eyebrow'>Finance</span><h2>{$title}</h2></div>";
		echo "<div class='top-right'>";
		echo "<a href='spsearch.html' class='search-box search-btn'><svg width='18' height='18' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='1.8'><circle cx='11' cy='11' r='7'/><path d='M21 21l-4.3-4.3'/></svg><span>Search Payment</span></a>";
		echo "<div class='date-time'><span id='today'></span><span id='clock'></span></div>";
		echo "<button class='theme-toggle' id='themeToggle' aria-label='Toggle day/night theme'>";
		echo "<svg class='moon-icon' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='1.8'><path d='M20 14.5A8.5 8.5 0 1 1 9.5 4a7 7 0 0 0 10.5 10.5z'/></svg>";
		echo "<svg class='sun-icon' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='1.8'><circle cx='12' cy='12' r='4.5'/><path d='M12 2v3M12 19v3M4.2 4.2l2.1 2.1M17.7 17.7l2.1 2.1M2 12h3M19 12h3M4.2 19.8l2.1-2.1M17.7 6.3l2.1-2.1'/></svg>";
		echo "</button></div></header>";

		echo "<section class='results-section'><div class='results-page'>";
		echo "<div class='results-header'><h2>{$title}</h2></div>";
		echo "<div class='data-table-wrap'><table class='data-table'>";
	}

	private function renderFooter()
	{
		echo "</table></div>";
		echo "</div></section>";

		echo "<footer class='footer'>";
		echo "<div class='footer-left'><img src='taj-logo.png' alt='Taj'><div><h3>TAJ HOTELS</h3><p>Excellence in Hospitality Since 1903</p></div></div>";
		echo "<div class='footer-center'><a href='#'>Help & Support</a><span>•</span><a href='#'>Terms</a><span>•</span><a href='#'>Privacy</a></div>";
		echo "<div class='footer-right'><p>&copy; 2026 Taj Hotels & Resorts</p>";
		echo "<div class='social'>";
		echo "<a href='#' aria-label='Facebook'><svg viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='1.8'><path d='M15 8h2V5h-2a3 3 0 0 0-3 3v2H9v3h3v6h3v-6h2.2l.8-3H15V8z'/></svg></a>";
		echo "<a href='#' aria-label='Instagram'><svg viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='1.8'><rect x='4' y='4' width='16' height='16' rx='4'/><circle cx='12' cy='12' r='3.2'/><path d='M16.2 7.8h.01'/></svg></a>";
		echo "<a href='#' aria-label='LinkedIn'><svg viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='1.8'><rect x='4' y='4' width='16' height='16' rx='3'/><path d='M8 11v5M8 8v.01M12 16v-3a2 2 0 0 1 4 0v3M12 13v3'/></svg></a>";
		echo "<a href='#' aria-label='X'><svg viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='1.8'><path d='M5 5l14 14M19 5L5 19'/></svg></a>";
		echo "</div></div></footer>";

		echo "<script>";
		echo "const sidebar=document.getElementById('sidebar'),sidebarToggle=document.getElementById('sidebarToggle'),main=document.getElementById('main');";
		echo "sidebarToggle.addEventListener('click',()=>{sidebar.classList.toggle('collapsed');main.classList.toggle('expanded');});";
		echo "const themeToggle=document.getElementById('themeToggle'),root=document.documentElement;";
		echo "function applyTheme(t){if(t==='dark'){root.setAttribute('data-theme','dark');}else{root.removeAttribute('data-theme');}localStorage.setItem('taj-theme',t);}";
		echo "applyTheme(localStorage.getItem('taj-theme')||'light');";
		echo "themeToggle.addEventListener('click',()=>{applyTheme(root.getAttribute('data-theme')==='dark'?'light':'dark');});";
		echo "function updateDateTime(){const now=new Date();document.getElementById('today').textContent=now.toLocaleDateString('en-GB',{day:'2-digit',month:'long',year:'numeric'});document.getElementById('clock').textContent=now.toLocaleTimeString([],{hour:'2-digit',minute:'2-digit'});}updateDateTime();setInterval(updateDateTime,1000);";
		echo "</script>";
		echo "</main></body></html>";
	}


	/* ================= YOUR ORIGINAL: input(), untouched ================= */
	public function input()
	{
		if($this->db_handle)
		{
			$f = 0;
			$r = mysqli_query($this->db_handle, "SELECT payment_id FROM payment");

			while($db_field = mysqli_fetch_assoc($r))
			{
				if($db_field['payment_id'] == $_POST['t1'])
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
				$sql="insert into payment values('$_POST[t1]' , '$_POST[t2]' , '$_POST[t3]' , '$_POST[t4]' , '$_POST[t5]', '$_POST[t6]', '$_POST[t7]')";
				mysqli_query($this->db_handle , $sql);
				echo"<script language=javascript> alert('Record Save')</script>";
			}
		}
	}
	/* ================= END YOUR ORIGINAL input() ================= */


	/* ================= YOUR ORIGINAL: delete(), untouched ================= */
	public function delete()
	{
		if($this->db_handle)
		{
			$sql="delete from payment where Payment_ID='$_POST[t1]' ";
			mysqli_query($this->db_handle , $sql);
			echo"<script language=javascript> alert('Record Delete')</script>";
		}
	}
	/* ================= END YOUR ORIGINAL delete() ================= */


	/* ================= YOUR ORIGINAL: update(), untouched ================= */
	public function update()
    {
        if ($this->db_handle) 
		{
            $sql = "UPDATE payment 
                    SET invoice_id='$_POST[t2]',
                        payment_date='$_POST[t3]',
						paid_date='$_POST[t4]',
                        created_date='$_POST[t5]',
                        created_by='$_POST[t6]'
                    WHERE payment_id='$_POST[t1]'";
            mysqli_query($this->db_handle, $sql);
            echo "<script language='javascript'> alert('Record Updated')</script>";
        }
    }
	/* ================= END YOUR ORIGINAL update() ================= */


	public function allsearch()
	{
		if($this->db_handle)
			{
				$r=mysqli_query($this->db_handle,"select * from payment");

				$this->renderHeader("All Payments");
				echo"<tr>";
				echo"<th> PAYMENT ID </th> 
				<th> INVOICE ID </th>
				<th> PAYMENT DATE </th>
				<th> PAID DATE </th>
				<th> CREATED DATE </th>
				<th> CREATED BY </th>";
				echo"</tr>";
				while($db_field=mysqli_fetch_assoc($r))
					{
						echo "<tr>";
						echo "<td>" . $db_field['payment_id'] . "</td>";
						echo "<td>" . $db_field['invoice_id'] . "</td>";
						echo "<td>" . $db_field['payment_date'] . "</td>";
						echo "<td>" . $db_field['paid_date'] . "</td>";
						echo "<td>" . $db_field['created_date'] . "</td>";
						echo "<td>" . $db_field['created_by'] . "</td>";
						echo "</tr>";
					}
				$this->renderFooter();
			}
	}


	public function psearch()
	{
		if($this->db_handle)
			{
				$r=mysqli_query($this->db_handle,"select * from payment where payment_id = '$_POST[t1]'");

				$this->renderHeader("Payment Search Result");
				echo"<tr>";
				echo"<th> PAYMENT ID </th> 
				<th> INVOICE ID </th>
				<th> PAYMENT DATE </th>
				<th> PAID DATE </th>
				<th> CREATED DATE </th>
				<th> CREATED BY </th>";
				echo"</tr>";
				while($db_field=mysqli_fetch_assoc($r))
					{
						echo "<tr>";
						echo "<td>" . $db_field['payment_id'] . "</td>";
						echo "<td>" . $db_field['invoice_id'] . "</td>";
						echo "<td>" . $db_field['payment_date'] . "</td>";
						echo "<td>" . $db_field['paid_date'] . "</td>";
						echo "<td>" . $db_field['created_date'] . "</td>";
						echo "<td>" . $db_field['created_by'] . "</td>";
						echo "</tr>";
					}
				$this->renderFooter();
			}
	}

	public function spsearch()
    {
        if ($this->db_handle)
        {
            $field=$_POST["s"];
            
            if($field=="all")
                $str="SELECT * FROM payment";
            else
                $str="SELECT * FROM payment WHERE $field='$_POST[t1]'";


            $sql = mysqli_query($this->db_handle, $str);

            $this->renderHeader("SP Search Result");
            echo "<tr>";
            echo "<th> PAYMENT ID </th>";
            echo "<th> INVOICE ID </th>";
            echo "<th> PAYMENT DATE </th>";
            echo "<th> PAID DATE </th>";
			echo "<th> CREATED DATE </th>";
			echo "<th> CREATED BY </th>";
            echo "</tr>";

            while ($db_field = mysqli_fetch_assoc($sql))
            {
                echo "<tr>";
                echo "<td>".$db_field['payment_id']."</td>";
                echo "<td>".$db_field['invoice_id']."</td>";
                echo "<td>".$db_field['payment_date']."</td>";
                echo "<td>".$db_field['paid_date']."</td>";
				echo "<td>".$db_field['created_date']."</td>";
				echo "<td>".$db_field['created_by']."</td>";
                echo "</tr>";
            }
			$this->renderFooter();
		}
	}


}
$obj=new payment();
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