<html>
    <head>
    <!--<link rel="stylesheet" type="text/css" href="css/styler.css">-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>   
    button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 0px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 80%;
}
button:hover {
    opacity: 0.8;
}

    table {  
        border-collapse: collapse;  
    
    }
    table td{
        padding:10px 5px 10px 5px;
    }
    table ul{
        list-style:none;
    }
    .leftDiv
    {
        float:left;
        /*height:880px;*/
        width:20%;
    }
    .rightDiv
    {
        float:right;
        width:80%;
        
    }
    .inline
    {   
        display: inline-block;   
        float: right; 
        margin:20px 0px;  
    }   
         
    input, button
    {   
        height: 34px;   
    }   
  
   .pagination {   
        display: inline-block;   
        float:none;
        
    }   
    .pagination a {   
        font-weight:bold;   
        font-size:18px;   
        color: black;   
        float: left;   
        padding: 8px 16px;   
        text-decoration: none;   
        border:1px solid black;   
    }   
    .pagination a.active {   
            background-color: rgb(164, 164, 228);;   
    }   
    .pagination a:hover:not(.active) {   
        background-color: #11ffff;   
    }   
        </style>   
       </head>
<body>
<?php
    include("header.php");
?>
    <div class="leftDiv">
        <br>
    <form name="frm">
    <fieldset id="com">
      <legend> <h3>Company</h3></legend>
        <?php
        $cq="select *from company";
        $cre=mysqli_query($con,$cq); 
        while($cr=mysqli_fetch_row($cre))
        {
                echo '<label style="display:block; height:6px; margin:1px;">';
                echo '<input style="vertical-align: middle; position: relative;bottom: 1px; padding:3px;" type="checkbox" id="company" name="company" onclick="filmob()" value="'.$cr[0].'">'.$cr[1];
                echo '</label>';
                echo '<br>';
            
        }
        ?>
    </fieldset>
    
    <fieldset id="ram">
        
     <legend><h3> RAM</h3></legend>  
     <?php 
        $rq="select *from ram";
        $rre=mysqli_query($con,$rq); 
        while($rr=mysqli_fetch_row($rre))
        {
                echo '<label style="display:block; height:6px; margin:1px;">';
                echo '<input style="vertical-align: middle; position: relative;bottom: 1px; padding:3px;" type="checkbox" id="ram" name="ram" onclick="filmob()" value="'.$rr[0].'">'.$rr[1];
                echo '</label>';
                echo '<br>';
            
        }
    
        ?>
    </fieldset>
    <fieldset id="price">
      <legend><h3>Price</h3></legend>
        <?php
        $arr1 = array(0,10000,30000,60000,"above");
        $arr2 = array(9999,29999,59999,89999,90000);
        for($i=0 ; $i < count($arr1) ; $i++)
        {
                echo '<label style="display:block; height:6px; margin:1px;">';
                echo '<input style="vertical-align: middle; position: relative;bottom: 1px; padding:3px;" type="checkbox" id="price" name="price" onclick="filmob()" value="'.$arr1[$i]."-".$arr2[$i].'">'.$arr1[$i]." - ".$arr2[$i];
                echo '</label>';
                echo '<br>';
            
        }
        ?>
    </fieldset>
    
    </form>
    </div>
<div id="right">
<div class="rightDiv">
<table>
    <?php
    include("connection.php");
    if(isset($_POST["comp"]))
    {
        if($_POST["comp"]==NULL)
            unset($varcom);
        else
            $varcom=$_POST["comp"];
    }       
    if(isset($_POST["ram"]))
    {
        if($_POST["ram"]==NULL)
            unset($varram);
        else
            $varram=$_POST["ram"];
    }   
    if(isset($_POST["pnm"]))
    {
        if($_POST["pnm"]==NULL)
            unset($varpr);
        else
            $varpr=$_POST["pnm"];
    }       

    $per_page_record = 10;  
    if (isset($_POST["page"])) {    
        $page  = $_POST["page"];    
    }        
    else 
    {    
      $page=1;    
    }    

    $start_from = ($page-1) * $per_page_record;
    $i=0;
    $query = "SELECT * FROM product";
    if(isset($varcom))     
    {
        $query = $query . " where c_id IN(".$varcom.")"; 
        $i++;
    }
    if(isset($varram))
    {
        if($i==0)
            $query = $query . " where r_id IN(".$varram.")"; 


        else
            $query = $query . " and r_id IN(".$varram.")";
        $i++;
    }
    if(isset($varpr))
    {
        if($i==0)
            $query = $query . " where (";
        else
            $query = $query . " and (";
        $list=explode(",",$varpr);
        for($y=0; $y<count($list); $y++)
        {
            $list1=explode("-",$list[$y]);
            if($y >= 1)
                $query = $query . " or";
            if(is_numeric($list1[0]))
                $query = $query . " price between ".$list1[0]." and ".$list1[1];
            else
                $query = $query . " price>=".$list1[1];
        }
        $query = $query . ")";
        $i++;
    }
    $q = $query;
    $q = $q." LIMIT $start_from, $per_page_record";
    $rs_result = mysqli_query ($con, $q);        
    if(mysqli_num_rows($rs_result)==0)
        echo "<h1>No Record Found</h1>";


    $i=0;
    echo '<br>';
    echo'<tr>';
    while($row=mysqli_fetch_array($rs_result))
    {
        echo '<td width=100></td>';
        echo '<td align="center"><img src="admin/image/'.$row[21].'" width="200" height="200">';
        echo '</br><p align="center">'.$row[1].'</p></br>';
        echo "_________________________";
        echo '<ul>';
        echo '<li><p align="left">*   '.$row[18].'   color</p></li>';
        echo '<li><p align="left">*   '.$row[9].'    storage</p></li>';
        $q="SELECT r_size FROM ram WHERE r_id=".$row[12];
        $r=mysqli_query($con,$q);
        $ans=mysqli_fetch_array($r);
        
        echo '<li><p align="left">*   '.$ans[0].'   ram</p></li></ul>';
        echo " </br><button ><a href='mobile_detail.php?id=$row[0]'>Details</a></button>";  
        echo "</td>";
        $i++;
        if($i==5)
        {
            echo '</tr><tr>';
            $i=0;
        }

    }
 ?>
 </tr>
  </table> 
  <div class="pagination">    
      <?php  
        $rs_result = mysqli_query($con, $query);     
        //$row = mysqli_num_rows($rs_result);     
        $total_records = mysqli_num_rows($rs_result);     
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a onclick='filmob(".($page-1).")'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' onclick='filmob(".$i.")'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a onclick='filmob(".$i.")'>".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a onclick='filmob(".($page+1).")'>  Next </a>";   
        }   
  
      ?>    
      </div>  
  
      <div class="inline">   
      <input id="page" type="number" min="1" max="<?php echo $total_pages?>"   
      placeholder="<?php echo $page."/".$total_pages; ?>" required>   
      <button onClick="go2Page();">Go</button>   
     </div>    

</div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php

    include("footer.php");
?>
<script type="text/javascript">   
    function filmob(pg)
    {
            var flist=document.getElementById('com');
            var chk=flist.getElementsByTagName('input');
            var rlist=document.getElementById('ram');
            var rchk=rlist.getElementsByTagName('input');
            var plist=document.getElementById('price');
            var pchk=plist.getElementsByTagName('input');  
            var nm=null;
            var rnm=null;
            var pnm=null;
            for(var i=0; i<chk.length; i++)
            {
                if(chk[i].checked)
                {
                    if(nm == null)
                    {
                        nm=chk[i].value;
                    }
                    else
                    {
                        nm=nm + "," +chk[i].value
                    }
                }
            }
            for(var i=0; i<rchk.length; i++)
            {
                if(rchk[i].checked)
                {
                    if(rnm == null)
                    {
                        rnm=rchk[i].value;
                    }
                    else
                    {
                        rnm=rnm + "," +rchk[i].value
                    }
                }
            }            
            for(var i=0; i<pchk.length; i++)
            {
                if(pchk[i].checked)
                {
                    if(pnm == null)
                    {
                        pnm=pchk[i].value;
                    }
                    else
                    {
                        pnm=pnm + "," +pchk[i].value
                    }
                }
            }
          
            $("#right").load(" #right",{'comp':nm,'ram':rnm,'pnm':pnm,'page':pg});
    }
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        filmob(page);
    }   
   
  </script>  

</body>

</html>
