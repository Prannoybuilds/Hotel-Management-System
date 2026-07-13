 <?php
include 'connect.php';

class customer extends connect
{

	public function __construct()
	{
		parent::__construct();
	}

	/* ===================== SHARED LAYOUT: HEADER ===================== */
	private function renderHeader($title = "Customer Search Results")
	{
		echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Taj Hotels &amp; Resorts | {$title}</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="form.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Inter:wght@300;400;500;600;700&family=Cormorant+Garamond:wght@500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="logo-box">
            <img src="taj-logo.png" class="sidebar-logo" alt="Taj">
            <div class="brand"><h1>TAJ</h1><p>HOTELS &amp; RESORTS</p></div>
        </div>
        <button class="hamburger" id="sidebarToggle" aria-label="Toggle sidebar">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
        </button>
    </div>

    <nav class="sidebar-nav">
        <span class="nav-heading">Overview</span>
        <a href="index.html" class="nav-link"><span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 10.5L12 3l9 7.5"/><path d="M5 9.8V20h14V9.8"/></svg></span><span class="link-text">Dashboard</span></a>

        <span class="nav-heading">Guest Services</span>
        <a href="customer.php" class="nav-link active"><span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="8" r="3.4"/><path d="M5 20c0-4 3.2-6 7-6s7 2 7 6"/></svg></span><span class="link-text">Customer</span></a>
        <a href="room.html" class="nav-link"><span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 17V8h18v9"/><path d="M3 13h18"/><path d="M7 8V5h4v3"/></svg></span><span class="link-text">Room</span></a>
        <a href="room_type.html" class="nav-link"><span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="4" y="3" width="16" height="18" rx="2"/><path d="M8 7h2"/><path d="M14 7h2"/><path d="M8 11h2"/><path d="M14 11h2"/><path d="M8 15h8"/></svg></span><span class="link-text">Room Type</span></a>
        <a href="booking1.php" class="nav-link"><span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18"/><path d="M8 3v4"/><path d="M16 3v4"/></svg></span><span class="link-text">Booking</span></a>

        <span class="nav-heading">Finance</span>
        <a href="payment.html" class="nav-link"><span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2.5" y="5" width="19" height="14" rx="2"/><path d="M2.5 10h19"/></svg></span><span class="link-text">Payment</span></a>
        <a href="invoice.html" class="nav-link"><span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M6 3h9l3 3v15H6z"/><path d="M9 9h6"/><path d="M9 13h6"/><path d="M9 17h4"/></svg></span><span class="link-text">Invoice</span></a>

        <span class="nav-heading">Organisation</span>
        <a href="emp_info.html" class="nav-link"><span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="8" r="3"/><path d="M5 20c0-4 3-6 7-6s7 2 7 6"/></svg></span><span class="link-text">Employee</span></a>
        <a href="dept_info.html" class="nav-link"><span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="5" y="3" width="14" height="18"/><path d="M9 7h2"/><path d="M13 7h2"/><path d="M9 11h2"/><path d="M13 11h2"/><path d="M9 15h6"/></svg></span><span class="link-text">Department</span></a>
        <a href="job_info.html" class="nav-link"><span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="7" width="18" height="12" rx="2"/><path d="M8 7V5a2 2 0 012-2h4a2 2 0 012 2v2"/><path d="M3 12h18"/></svg></span><span class="link-text">Job</span></a>

        <span class="nav-heading">Tools</span>
        <a href="spsearch.html" class="nav-link"><span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg></span><span class="link-text">SP Search</span></a>
    </nav>

    <div class="sidebar-footer"><a href="login.html" class="logout-btn">Logout</a></div>
</aside>

<main class="main" id="main">
    <header class="topbar">
        <div class="welcome"><span class="eyebrow">Guest Relations</span><h2>{$title}</h2></div>
        <div class="top-right">
            <a href="spsearch.html" class="search-box search-btn">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
                <span>Search Customer</span>
            </a>
            <div class="date-time"><span id="today"></span><span id="clock"></span></div>
            <button class="theme-toggle" id="themeToggle" aria-label="Toggle day/night theme">
                <svg class="moon-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20 14.5A8.5 8.5 0 1 1 9.5 4a7 7 0 0 0 10.5 10.5z"/></svg>
                <svg class="sun-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="4.5"/><path d="M12 2v3M12 19v3M4.2 4.2l2.1 2.1M17.7 17.7l2.1 2.1M2 12h3M19 12h3M4.2 19.8l2.1-2.1M17.7 6.3l2.1-2.1"/></svg>
            </button>
        </div>
    </header>

HTML;
	}

	/* ===================== SHARED LAYOUT: FOOTER ===================== */
	private function renderFooter()
	{
		echo <<<HTML
    <footer class="footer">
        <div class="footer-left">
            <img src="taj-logo.png" alt="Taj">
            <div><h3>TAJ HOTELS</h3><p>Excellence in Hospitality Since 1903</p></div>
        </div>
        <div class="footer-center">
            <a href="#">Help &amp; Support</a><span>•</span><a href="#">Terms</a><span>•</span><a href="#">Privacy</a>
        </div>
        <div class="footer-right">
            <p>&copy; 2026 Taj Hotels &amp; Resorts</p>
            <div class="social">
                <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M15 8h2V5h-2a3 3 0 0 0-3 3v2H9v3h3v6h3v-6h2.2l.8-3H15V8z"/></svg></a>
                <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="4" y="4" width="16" height="16" rx="4"/><circle cx="12" cy="12" r="3.2"/><path d="M16.2 7.8h.01"/></svg></a>
                <a href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="4" y="4" width="16" height="16" rx="3"/><path d="M8 11v5M8 8v.01M12 16v-3a2 2 0 0 1 4 0v3M12 13v3"/></svg></a>
                <a href="#" aria-label="X"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M5 5l14 14M19 5L5 19"/></svg></a>
            </div>
        </div>
    </footer>

<script>
const sidebar=document.getElementById('sidebar'),sidebarToggle=document.getElementById('sidebarToggle'),main=document.getElementById('main');
sidebarToggle.addEventListener('click',()=>{sidebar.classList.toggle('collapsed');main.classList.toggle('expanded');});
const themeToggle=document.getElementById('themeToggle'),root=document.documentElement;
function applyTheme(t){if(t==='dark'){root.setAttribute('data-theme','dark');}else{root.removeAttribute('data-theme');}localStorage.setItem('taj-theme',t);}
applyTheme(localStorage.getItem('taj-theme')||'light');
themeToggle.addEventListener('click',()=>{applyTheme(root.getAttribute('data-theme')==='dark'?'light':'dark');});
function updateDateTime(){const now=new Date();document.getElementById('today').textContent=now.toLocaleDateString('en-GB',{day:'2-digit',month:'long',year:'numeric'});document.getElementById('clock').textContent=now.toLocaleTimeString([],{hour:'2-digit',minute:'2-digit'});}
updateDateTime();setInterval(updateDateTime,1000);
function spsearch(){ window.open("spsearch.html"); }
</script>
</main>
</body>
</html>
HTML;
	}

	/* ===================== MAIN ENTRY FORM (form-hero) ===================== */
	public function renderForm()
	{
		$this->renderHeader("Customer Management");
		echo <<<HTML
    <section class="form-hero">
        <img src="customer.png" class="form-hero-image" alt="">
        <div class="form-hero-overlay"></div>

        <div class="form-panel">

            <div class="form-page-header">
                <h2>Customer Registration</h2>
                <p>Luxury Guest Information</p>
            </div>

            <form action="customer.php" method="post" name="f" class="form-card">
                <div class="form-grid">
                    <div class="form-group"><label>Customer ID</label><input type="text" name="t1" placeholder="Enter Customer ID"></div>
                    <div class="form-group"><label>Customer Name</label><input type="text" name="t2" placeholder="Enter Full Name"></div>
                    <div class="form-group full-width"><label>Address</label><input type="text" name="t3" placeholder="Street, City, State"></div>
                    <div class="form-group"><label>Mobile Number</label><input type="number" name="t4" placeholder="9876543210"></div>
                    <div class="form-group"><label>Date of Birth</label><input type="date" name="t5"></div>
                    <div class="form-group">
                        <label>Gender</label>
                        <select name="t6"><option value="">Select</option><option>Male</option><option>Female</option><option>Other</option></select>
                    </div>
                    <div class="form-group">
                        <label>Marital Status</label>
                        <select name="t7"><option value="">Select</option><option>Single</option><option>Married</option><option>Other</option></select>
                    </div>
                    <div class="form-group"><label>Created Date</label><input type="date" name="t8"></div>
                    <div class="form-group"><label>Created By</label><input type="text" name="t9" placeholder="Admin"></div>
                </div>

                <div class="form-actions">
                    <input type="button" class="btn btn-outline" value="New" onclick="document.forms['f'].reset()">
                    <input type="submit" class="btn btn-gold" value="Save" name="b2">
                    <input type="submit" class="btn btn-gold" value="Update" name="b3">
                    <input type="submit" class="btn btn-danger" value="Delete" name="b4">
                </div>

                <div class="search-row">
                    <input type="submit" class="btn btn-outline" value="All Search" name="b5">
                    <input type="submit" class="btn btn-outline" value="P Search" name="b6">
                    <input type="button" class="btn btn-outline" value="SP Search" onclick="spsearch()">
                    <input type="button" class="btn btn-outline" value="Home" onclick="window.location.href='index.html'">
                </div>
            </form>
        </div>
    </section>

HTML;
		$this->renderFooter();
	}

	/* ===================== ORIGINAL LOGIC — UNTOUCHED ===================== */

	public function input()
	{
		if($this->db_handle)
		{
			$f = 0;
			$r = mysqli_query($this->db_handle, "SELECT customer_id FROM customer");

			while($db_field = mysqli_fetch_assoc($r))
			{
				if($db_field['customer_id'] == $_POST['t1'])
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
				$sql="insert into customer values('$_POST[t1]' , '$_POST[t2]' , '$_POST[t3]' , '$_POST[t4]' , '$_POST[t5]' , '$_POST[t6]' , '$_POST[t7]' ,  '$_POST[t8]','$_POST[t9]')";
				mysqli_query($this->db_handle , $sql);
				echo"<script language=javascript> alert('Record Save')</script>";
			}
		}
	}


	public function delete()
	{
		if($this->db_handle)
		{
			$sql="delete from customer where customer_id='$_POST[t1]' ";
			mysqli_query($this->db_handle , $sql);
			echo"<script language=javascript> alert('Record Delete')</script>";
		}
	}

	public function update()
    {
        if ($this->db_handle) 
		{
            $sql = "UPDATE customer 
                    SET customer_name='$_POST[t2]',
                        address='$_POST[t3]',
                        mob_no='$_POST[t4]',
                        dob='$_POST[t5]',
                        gender='$_POST[t6]',
                        marital_status='$_POST[t7]',
                        created_date='$_POST[t8]',
                        created_by='$_POST[t9]'
                    WHERE customer_id='$_POST[t1]'";
            mysqli_query($this->db_handle, $sql);
            echo "<script language='javascript'> alert('Record Updated')</script>";
        }
    }

	public function allsearch()
	{
		if($this->db_handle)
		{
			$r=mysqli_query($this->db_handle,"select * from customer");

			$this->renderHeader("All Search Results");
			echo '<section class="results-section"><div class="results-page">';
			echo '<div class="results-header"><h2>All Search Results</h2></div>';
			echo '<div class="data-table-wrap"><table class="data-table">';
			echo"<thead><tr>";
			echo"<th> CUSTOMER ID </th> 
			<th> CUSTOMER NAME </th>
			<th> ADDRESS </th>
			<th> MOBILE NUMBER </th>
			<th> DATE OF BIRTH </th>
			<th> GENDER </th>
			<th> MARITAL STATUS </th>
			<th> CREATED DATE </th>
			<th> CREATED BY </th>";
			echo"</tr></thead><tbody>";
			while($db_field=mysqli_fetch_assoc($r))
				{
					echo "<tr>";
					echo "<td>" . $db_field['customer_id'] . "</td>";
					echo "<td>" . $db_field['customer_name'] . "</td>";
					echo "<td>" . $db_field['address'] . "</td>";
					echo "<td>" . $db_field['mob_no'] . "</td>";
					echo "<td>" . $db_field['dob'] . "</td>";
					echo "<td>" . $db_field['gender'] . "</td>";	
					echo "<td>" . $db_field['marital_status'] . "</td>";
					echo "<td>" . $db_field['created_date'] . "</td>";
					echo "<td>" . $db_field['created_by'] . "</td>";
					echo "</tr>";
				}
				echo"</tbody></table></div></div></section>";
			$this->renderFooter();
		}
	}


	public function psearch()
	{
		if($this->db_handle)
			{
				$r=mysqli_query($this->db_handle,"select * from customer where customer_id = '$_POST[t1]'");

				$this->renderHeader("P Search Results");
				echo '<section class="results-section"><div class="results-page">';
				echo '<div class="results-header"><h2>P Search Results</h2></div>';
				echo '<div class="data-table-wrap"><table class="data-table">';
				echo"<thead><tr>";
				echo"<th> CUSTOMER ID </th> 
				<th> CUSTOMER NAME </th>
				<th> ADDRESS </th>
				<th> MOBILE NUMBER </th>
				<th> DATE OF BIRTH </th>
				<th> GENDER </th>
				<th> MARITAL STATUS </th>
				<th> CREATED DATE </th>
				<th> CREATED BY </th>";
				echo"</tr></thead><tbody>";
				while($db_field=mysqli_fetch_assoc($r))
					{
						echo "<tr>";
						echo "<td>" . $db_field['customer_id'] . "</td>";
						echo "<td>" . $db_field['customer_name'] . "</td>";
						echo "<td>" . $db_field['address'] . "</td>";
						echo "<td>" . $db_field['mob_no'] . "</td>";
						echo "<td>" . $db_field['dob'] . "</td>";
						echo "<td>" . $db_field['gender'] . "</td>";
						echo "<td>" . $db_field['marital_status'] . "</td>";
						echo "<td>" . $db_field['created_date'] . "</td>";
						echo "<td>" . $db_field['created_by'] . "</td>";
						echo "</tr>";
					}
					echo"</tbody></table></div></div></section>";
				$this->renderFooter();
			}
	}

	public function spsearch()
    {
        if ($this->db_handle)
        {
            $field=$_POST["s"];
            
            if($field=="all")
                $str="SELECT * FROM customer";
            else
                $str="SELECT * FROM customer WHERE $field='$_POST[t1]'";


            $sql = mysqli_query($this->db_handle, $str);

            $this->renderHeader("SP Search Results");
            echo '<section class="results-section"><div class="results-page">';
            echo '<div class="results-header"><h2>SP Search Results</h2></div>';
            echo '<div class="data-table-wrap"><table class="data-table">';
            echo "<thead><tr>";
            echo "<th> CUSTOMER ID </th>";
            echo "<th> CUSTOMER NAME </th>";
            echo "<th> ADDRESS </th>";
            echo "<th> MOBILE NUMBER </th>";
            echo "<th> DATE OF BIRTH </th>";
			echo "<th> GENDER </th>";
			echo "<th> MARITAL STATUS </th>";
			echo "<th> CREATED DATE </th>";
			echo "<th> CREATED BY </th>";
            echo "</tr></thead><tbody>";

            while ($db_field = mysqli_fetch_assoc($sql))
            {
                echo "<tr>";
                echo "<td>".$db_field['customer_id']."</td>";
                echo "<td>".$db_field['customer_name']."</td>";
                echo "<td>".$db_field['address']."</td>";
                echo "<td>".$db_field['mob_no']."</td>";
                echo "<td>".$db_field['dob']."</td>";
				echo "<td>".$db_field['gender']."</td>";
				echo "<td>".$db_field['marital_status']."</td>";
				echo "<td>".$db_field['created_date']."</td>";
				echo "<td>".$db_field['created_by']."</td>";
                echo "</tr>";
            }
            echo"</tbody></table></div></div></section>";
            $this->renderFooter();
		}
	}

}

$obj=new customer();

if(isset($_REQUEST["b2"]))
	$obj->input();

if(isset($_REQUEST["b3"]))
	$obj->update();

if(isset($_REQUEST["b4"]))
	$obj->delete();

if(isset($_REQUEST["b5"]))
{
	$obj->allsearch();
}
elseif(isset($_REQUEST["b6"]))
{
	$obj->psearch();
}
elseif(isset($_REQUEST["spsearch"]))
{
	$obj->spsearch();
}
else
{
	$obj->renderForm();
}

?>