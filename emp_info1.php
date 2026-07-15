 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Taj Hotels & Resorts | Employee</title>
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
            <div class="brand">
                <h1>TAJ</h1>
                <p>HOTELS & RESORTS</p>
            </div>
        </div>
        <button class="hamburger" id="sidebarToggle" aria-label="Toggle sidebar">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="3" y1="6" x2="21" y2="6"/>
                <line x1="3" y1="12" x2="21" y2="12"/>
                <line x1="3" y1="18" x2="21" y2="18"/>
            </svg>
        </button>
    </div>

    <nav class="sidebar-nav">

        <span class="nav-heading">Overview</span>
        <a href="home.html" class="nav-link">
            <span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 10.5L12 3l9 7.5"/><path d="M5 9.8V20h14V9.8"/></svg></span>
            <span class="link-text">Dashboard</span>
        </a>

        <span class="nav-heading">Guest Services</span>
        <a href="customer.html" class="nav-link">
            <span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="8" r="3.4"/><path d="M5 20c0-4 3.2-6 7-6s7 2 7 6"/></svg></span>
            <span class="link-text">Customer</span>
        </a>
        <a href="hotel1.php" class="nav-link">
    <span class="nav-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M4 21V5h16v16"/>
            <path d="M9 9h2"/>
            <path d="M13 9h2"/>
            <path d="M9 13h2"/>
            <path d="M13 13h2"/>
            <path d="M10 21v-4h4v4"/>
        </svg>
    </span>
    <span class="link-text">Hotel</span>
</a>
        <a href="room1.php" class="nav-link">
            <span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 17V8h18v9"/><path d="M3 13h18"/><path d="M7 8V5h4v3"/></svg></span>
            <span class="link-text">Room</span>
        </a>
        <a href="room_type.html" class="nav-link">
            <span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="4" y="3" width="16" height="18" rx="2"/><path d="M8 7h2"/><path d="M14 7h2"/><path d="M8 11h2"/><path d="M14 11h2"/><path d="M8 15h8"/></svg></span>
            <span class="link-text">Room Type</span>
        </a>
        <a href="booking1.php" class="nav-link">
            <span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18"/><path d="M8 3v4"/><path d="M16 3v4"/></svg></span>
            <span class="link-text">Booking</span>
        </a>

        <span class="nav-heading">Finance</span>
        <a href="payment1.php" class="nav-link">
            <span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2.5" y="5" width="19" height="14" rx="2"/><path d="M2.5 10h19"/></svg></span>
            <span class="link-text">Payment</span>
        </a>
        <a href="invoice1.php" class="nav-link">
            <span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M6 3h9l3 3v15H6z"/><path d="M9 9h6"/><path d="M9 13h6"/><path d="M9 17h4"/></svg></span>
            <span class="link-text">Invoice</span>
        </a>

        <span class="nav-heading">Organisation</span>
        <a href="emp_info1.php" class="nav-link active">
            <span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="8" r="3"/><path d="M5 20c0-4 3-6 7-6s7 2 7 6"/></svg></span>
            <span class="link-text">Employee</span>
        </a>
        <a href="dept_info.html" class="nav-link">
            <span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="5" y="3" width="14" height="18"/><path d="M9 7h2"/><path d="M13 7h2"/><path d="M9 11h2"/><path d="M13 11h2"/><path d="M9 15h6"/></svg></span>
            <span class="link-text">Department</span>
        </a>
        <a href="job_info.html" class="nav-link">
            <span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="7" width="18" height="12" rx="2"/><path d="M8 7V5a2 2 0 012-2h4a2 2 0 012 2v2"/><path d="M3 12h18"/></svg></span>
            <span class="link-text">Job</span>
        </a>

        <span class="nav-heading">Tools</span>
        <a href="spsearch.html" class="nav-link">
            <span class="nav-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg></span>
            <span class="link-text">SP Search</span>
        </a>

    </nav>

    <div class="sidebar-footer">
        <a href="login.html" class="logout-btn">Logout</a>
    </div>

</aside>

<main class="main" id="main">

    <header class="topbar">
        <div class="welcome">
            <span class="eyebrow">Human Resources</span>
            <h2>Employee Management</h2>
        </div>

        <div class="top-right">
            <a href="spsearch.html" class="search-box search-btn">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <circle cx="11" cy="11" r="7"/>
                    <path d="M21 21l-4.3-4.3"/>
                </svg>
                <span>Search Employee</span>
            </a>

            <div class="date-time">
                <span id="today"></span>
                <span id="clock"></span>
            </div>

            <button class="theme-toggle" id="themeToggle" aria-label="Toggle day/night theme">
                <svg class="moon-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20 14.5A8.5 8.5 0 1 1 9.5 4a7 7 0 0 0 10.5 10.5z"/></svg>
                <svg class="sun-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="4.5"/><path d="M12 2v3M12 19v3M4.2 4.2l2.1 2.1M17.7 17.7l2.1 2.1M2 12h3M19 12h3M4.2 19.8l2.1-2.1M17.7 6.3l2.1-2.1"/></svg>
            </button>
        </div>
    </header>

    <section class="form-hero">
        <img src="employee.png" class="form-hero-image" alt="">
        <div class="form-hero-overlay"></div>

        <div class="form-panel">

            <div class="form-page-header">
                <h2>Employee Registration</h2>
                <p>Staff & Personnel Records</p>
            </div>

            <form action="emp_info.php" method="post" name="f" class="form-card">
                <div class="form-grid">
                    <div class="form-group"><label>Employee ID</label><input type="text" name="t1" placeholder="Enter Employee ID"></div>
                    <div class="form-group"><label>Employee Name</label><input type="text" name="t2" placeholder="Enter Full Name"></div>
                    <div class="form-group full-width"><label>Address</label><input type="text" name="t3" placeholder="Street, City, State"></div>
                    <div class="form-group"><label>Status</label><input type="text" name="t4" placeholder="Active / Inactive"></div>
                    <div class="form-group"><label>Nationality</label><input type="text" name="t5" placeholder="Enter Nationality"></div>
                    <div class="form-group"><label>Created Date</label><input type="date" name="t6"></div>
                    <div class="form-group"><label>Created By</label><input type="text" name="t7" placeholder="Admin"></div>
                    <div class="form-group">
                        <label>Gender</label>
                        <select name="t8">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Dept ID</label>
                        <select name="t9">
                            <?php 
                                $conn=mysqli_connect("localhost","root", "1234","hotel");  
                                $sql = mysqli_query($conn,"SELECT dept_id FROM dept_info ORDER BY dept_id");
                                while ($db_field = mysqli_fetch_assoc($sql)) {
                                    echo "<option>".$db_field['dept_id']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Job ID</label>
                        <select name="t10">
                            <?php 
                                $conn=mysqli_connect("localhost","root", "1234","hotel");  
                                $sql = mysqli_query($conn,"SELECT job_id FROM job_info ORDER BY job_id");
                                while ($db_field = mysqli_fetch_assoc($sql)) {
                                    echo "<option>".$db_field['job_id']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-actions">
                    <input type="button" class="btn btn-outline" value="New" name="b1" onclick="document.forms['f'].reset()">
                    <input type="submit" class="btn btn-gold" value="Save" name="b2">
                    <input type="submit" class="btn btn-gold" value="Update" name="b3">
                    <input type="submit" class="btn btn-danger" value="Delete" name="b4">
                </div>

                <div class="search-row">
                    <input type="submit" class="btn btn-outline" value="Allsearch" name="b5">
                    <input type="submit" class="btn btn-outline" value="Psearch" name="b6">
                    <input type="button" class="btn btn-outline" value="Spsearch" name="b7" onclick="spearch()">
                    <input type="button" class="btn btn-outline" value="Home" name="b8" onclick="window.location.href='home.html'">
                </div>
            </form>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-left">
            <img src="taj-logo.png" alt="Taj">
            <div>
                <h3>TAJ HOTELS</h3>
                <p>Excellence in Hospitality Since 1903</p>
            </div>
        </div>

        <div class="footer-center">
            <a href="#">Help & Support</a>
            <span>•</span>
            <a href="#">Terms</a>
            <span>•</span>
            <a href="#">Privacy</a>
        </div>

        <div class="footer-right">
            <p>© 2026 Taj Hotels & Resorts</p>
            <div class="social">
                <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M15 8h2V5h-2a3 3 0 0 0-3 3v2H9v3h3v6h3v-6h2.2l.8-3H15V8z"/></svg></a>
                <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="4" y="4" width="16" height="16" rx="4"/><circle cx="12" cy="12" r="3.2"/><path d="M16.2 7.8h.01"/></svg></a>
                <a href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="4" y="4" width="16" height="16" rx="3"/><path d="M8 11v5M8 8v.01M12 16v-3a2 2 0 0 1 4 0v3M12 13v3"/></svg></a>
                <a href="#" aria-label="X"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M5 5l14 14M19 5L5 19"/></svg></a>
            </div>
        </div>
    </footer>

</main>

<script>
function updateDateTime(){
  const now = new Date();
  document.getElementById("today").textContent = now.toLocaleDateString("en-GB",{day:"2-digit",month:"long",year:"numeric"});
  document.getElementById("clock").textContent = now.toLocaleTimeString([],{hour:"2-digit",minute:"2-digit"});
}
updateDateTime();
setInterval(updateDateTime, 1000);

const sidebar = document.getElementById("sidebar");
const sidebarToggle = document.getElementById("sidebarToggle");
const main = document.getElementById("main");
sidebarToggle.addEventListener("click", () => {
  sidebar.classList.toggle("collapsed");
  main.classList.toggle("expanded");
});

const themeToggle = document.getElementById("themeToggle");
const root = document.documentElement;
function applyTheme(theme){
  if(theme === "dark"){ root.setAttribute("data-theme","dark"); }
  else{ root.removeAttribute("data-theme"); }
  localStorage.setItem("taj-theme", theme);
}
applyTheme(localStorage.getItem("taj-theme") || "light");
themeToggle.addEventListener("click", () => {
  applyTheme(root.getAttribute("data-theme") === "dark" ? "light" : "dark");
});

function spearch(){ window.open("spsearch.html"); }
</script>
</body>
</html>