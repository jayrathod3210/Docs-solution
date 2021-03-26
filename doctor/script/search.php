<?php
$con=mysqli_connect('localhost', 'root', '', 'jb_infotech');

$char="";
if(!empty(($_GET['sr']))){ 
    $err=0;
    $char=$_GET['sr'];
   $query="SELECT * FROM product WHERE P_NAME LIKE '%$char%'";
   $result= mysqli_query($con, $query);
   
   if(mysqli_num_rows($result)>0){
     
        
       while($x= mysqli_fetch_array($result)){ 
           
           $sid=$x['S_ID'];
           $sql="SELECT S_NAME FROM sub_cat WHERE S_ID=$sid";
           $rs= mysqli_query($con, $sql);
           $y= mysqli_fetch_assoc($rs);
           
           
           
            
echo "<a href='show_prod_detail.php?id=".$x['P_ID']."&pname=".$x['P_NAME']."'><li style='margin-top:0px;color:black;font-family:Glegoo;font-weight: bold;text-decoration:none;list:decoration:none;text-align: left;height:50px;width:500px;padding-top:5px;margin-bottom:10px;'><img src='admin/img/{$x['IMAGE1']}' height=50px; width=60px; />&nbsp;&nbsp;&nbsp;".$x['P_NAME']."<br/><span style='margin-left:200px;margin-top:-20px;color:black;text-align: right;font-size:13px;font-weight:none;'>   In {$y['S_NAME']}</span></li><br/><span style='display:inline-block;background-color;height:3px;'></span></a>";                                                                           

}
   }else{
    $err++;
}
   $qry="SELECT * FROM sub_cat WHERE S_NAME LIKE '%$char%'";
   $crs= mysqli_query($con, $qry);
   
   if(mysqli_num_rows ($crs)>0){

       while($z= mysqli_fetch_array($crs)){ 
       
           echo "<a href='show_product.php?id=".$z['S_ID']."&sname=".$z['S_NAME']."'><li style='margin-top:30px;color:black;font-family:Glegoo;font-weight: bold;text-decoration:none;list:decoration:none;text-align: left;height:30px;width:500px;padding-top:5px;'>".$z['S_NAME']."</li><br/></a>";
       }    
   }
   else{
       $err++;
   }
   if($err==2){
        echo "<li style='color:black;font-weight: bold;text-decoration:none;list:decoration:none;text-align: left;height:20px;width:440px;padding:20px;'>Result Not Found!!!</li>";                                                                                 
   }
   
 }

 ?>


    
