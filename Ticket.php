
<!DOCTYPE HTML>
<HTML>
<HEAD>

<TITLE> Confirm ticket </TITLE>

</HEAD>

<BODY BACKGROUND="http://img.wallpaperfolder.com/f/475AD2081305/city-blue-skyline-1920x1080.jpg">



<style>
.button {
    position: right;
    background-color: #0B1997;
    border: none;
    font-size: 18px;
    color: #FFFFFF;
    padding: 10px;
    width: 100px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
}


</style>

<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
color: #0B1997;
text-align:center;
text-decoration:bold;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #0B1997;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #9FCCF4;}
#customers tr:nth-child(odd){background-color: #9FCCF4;}


#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #0B1997;
    color: #9FCCF4;
}
</style>




<br> </br>
<B> 
<FONT SIZE="7" COLOR="#0B1997" FACE="ARIAL">
<center>
CONFIRM TICKET
</FONT>
</B>
</center>
<HR>


<TABLE id="customers" BORDER="1" CELLPADDING="20">
<TR>

<TH><B><FONT SIZE="4"  FACE="ARIAL">AIRLINE</B></TH>
<TH><B><FONT SIZE="4"  FACE="ARIAL">DEAPRTURE TIME</B></TH>
<TH><B><FONT SIZE="4"  FACE="ARIAL">DURATION</B></TH>
<TH><B><FONT SIZE="4"  FACE="ARIAL">ARRIVAL TIME</B></TH>
<TH><B><FONT SIZE="4"  FACE="ARIAL">PRICE (INR :Rs.)</B></TH>
</BR>
</TR>

<TR>
<TD><img src="https://upload.wikimedia.org/wikipedia/en/thumb/9/9c/SpiceJet_logo.svg/1280px-SpiceJet_logo.svg.png" height="80" width="150"></TD>
<TD>21:30</TD>
<TD>2h 10m</TD>
<TD>23:40</TD>
<TD>6009</TD>

</TR>

</TABLE>

<center> <p> <font size="6" color="red"><b>
Booking ID: 
<?php
 
 $connector = mysqli_connect("localhost","root","");
if(!$connector)
{
echo "not connected";
}
if(!mysqli_select_db($connector,'airgo'))
{
echo "database not connected";
}

$sql="SELECT bkid FROM ticket";
$result=mysqli_query($connector,$sql);
$row=mysqli_fetch_assoc($result);
echo "{$row['bkid']}";
mysqli_free_result($result);
mysqli_close($connector);
?>

<br> </br>
</font>
<font size="10" color="blue"><b>
To continue payment and seat selection (only 24 hours prior to selected flight),<br> visit 
<a href="http://www.spicejet.com" class="button"> AIRLINE </a>

<br></br>

Thankyou for choosing AirGo travels

<br> </br>
<a href="Home.html"><img src="http://amafa.com.au/wp-content/uploads/2014/11/home-icon.png"></a><br>
Home
</p></font>
</center>

</BODY>
</HTML>
