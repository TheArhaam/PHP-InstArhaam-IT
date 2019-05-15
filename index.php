<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>  
<TITLE>InstArhaam</TITLE>
</head>

<link rel="icon" href="favicon.ico" type="image/png" />
<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:IMPACT;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#e7e7e7;
height: 34px;
color: black;
border: 2px solid #555555;
}
#imagelist{
border: thin solid silver;
float:left;
padding:5px;
width:auto;
margin: 0 5px 0 0;
}
p{
margin:0;
padding:0;
text-align: center;
font-style: italic;
font-size: smaller;
text-indent: 0;
}
#caption{
margin-top: 5px;
}
img{
height: 225px;
}
#WebsiteLogo{
height: 300px;
}
-->
</style>
<BODY ID="WebsiteBody">
<center>
<img src="InstArhaam.png" id="WebsiteLogo">
<form action="addexec.php" method="post" enctype="multipart/form-data" name="addroom">
<FONT face="IMPACT"> Select Image:
 <input type="file" name="image" class="ed">
  Caption:</FONT>
 <input name="caption" type="text" class="ed" id="brnu" />
 <br />
 <input type="submit" name="Submit" value="Upload" id="button1" />
</form>
<FONT face="IMPACT" size="15">Photo Archieve</FONT>
<br />
</center>
<br />
<?php
include('config.php');
$result = mysqli_query($bd,"SELECT * FROM photos");
while($row = mysqli_fetch_array($result))
{
echo '<div id="imagelist">';
echo '<p><img src="'.$row['location'].'"></p>';
echo '<p id="caption" class='.$row['caption'].'>'.$row['caption'].' </p>';
echo '</div>';
}
?>
</BODY>
<script>    
 $(document).ready(function(){  
      $(document).on('click', '#caption', function(){  
          var pic = $(this).attr("class");  
           $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{pic:pic},  
                success:function(data){  
                    window.location = "index.php";

                }  
           })  
      });  
 });
</script>
