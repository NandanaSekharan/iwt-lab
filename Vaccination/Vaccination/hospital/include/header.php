<?php
$Log_Id=$_SESSION['SESS_HOSPITAL_ID'];
$result = $db->prepare("select * from user where Log_Id='$Log_Id'");
$result->execute();
for($i=0; $row = $result->fetch(); $i++)
{
    $husername = $row['name'];	
}
?>
<header id="navbar">
    <div id="navbar-container" class="boxed">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand">
                <i class="fa fa-cube brand-icon"></i>
                <div class="brand-title">
                    <span class="brand-text"> I - Vaccination</span>
                </div>
            </a>
        </div>
        <div class="navbar-content clearfix">
                <ul class="nav navbar-top-links pull-right">
                <li class="tgl-menu-btn">
                   	<h3>Welcome To <?php echo $husername;?></h3>
                </li>
                </ul>            
        </div>      
    </div>
</header>