<table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td colspan="2"><div align="center"><strong><?php
                                     $sqlpen000="SELECT * FROM `project_site` where project_id='$_GET[project_id]'"; 
$sqlpen10000=mysql_query($sqlpen000);
$sqlpen2=mysql_fetch_array($sqlpen10000);
echo $sqlpen2['project_name'];
?></strong></div></td>
  </tr>
  <tr>
    <td width="52%"><div align="left"><strong>Customer Name</strong></div></td>
    <td width="48%"><div align="right"><strong>Supervisior</strong> </div></td>
  </tr>
  <tr>
    <td><div align="left"><?php  $sqlpen000="SELECT * FROM `project_customer` where project_id='$_GET[project_id]'"; 
$sqlpen10000=mysql_query($sqlpen000);
$sqlpen2=mysql_fetch_array($sqlpen10000);
echo $sqlpen2['pc_name'];?></div></td>
    <td><div align="right"><?php  $sqlpen0001="SELECT * FROM `project_site` where project_id='$_GET[project_id]'"; 
$sqlpen100001=mysql_query($sqlpen0001);
$sqlpen21=mysql_fetch_array($sqlpen100001);
echo $sqlpen21['sv_name'];?></div></td>
  </tr>
  <tr>
    <td><div align="left"><?php  
echo $sqlpen2['pc_number'];?></div></td>
    <td><div align="center" style="background-color:#09F; color:#FFF; border-radius:5px;">Expense Rs : <?php $sql = "SELECT sum(parti_amount) as parti_amount FROM  expense_full where project_id='$_GET[project_id]'";
$result=mysql_query($sql);
$rows=mysql_fetch_assoc($result);
$b_qfi=$rows['parti_amount'];
echo $b_qfi;
?>
 </div></td>
  </tr>
</table>

<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
<table width="100%" id="customers">
                                        <thead>
                                            <tr style="font-size:12px">
                                                <th>S.NO</th>
                                                <th>Date</th>
                                                <th>Project</th>
                                                
                                                <th>Particulars</th>
                                                <th>Amount</th>
                                                
                                            </tr>
  </thead>
                                       
                                        <tbody>
                                         <?php
										 $x=0;
							   $sqlpen000="SELECT * FROM `expense_full` where project_id='$_GET[project_id]' "; 
$sqlpen10000=mysql_query($sqlpen000);
while($sqlpen2=mysql_fetch_array($sqlpen10000))
{
	$x++;
	
	?>
                                            <tr style="font-size:12px">
                                            <td><?php echo $x; ?></td>
                                            <td><?php echo $sqlpen2['n_datee']; ?></td>
                                                <td><?php echo $sqlpen2['project_id']; ?></td>
                                                
                                                <td><?php echo $sqlpen2['parti_text']; ?></td>
                                                <td><strong><?php echo $sqlpen2['parti_amount']; ?></strong></td>
                                                
                                            </tr>
                                            <?php } ?>
                                            
                                        </tbody>
</table>