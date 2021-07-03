<table  id="mytable" class="table table-striped table-hover table-bordered border-info border-top ">
                                                            <thead>
                                                            <tr>
                            <th>FIR </th>
                            <th>Section Name</th>
                            <th>Investigator Name</th>
                            <th>Investigation Details</th>
                            <th>Remark</th>
                            <th>Charge Sheet Date</th>
                            <th>Action</th>
                          </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                            include '../con1.php';
                                                        
                    $f=0;
                    $key = $_GET['key'];
                    session_start();
                    $pid=$_SESSION['pid'];
                    if(!empty($key)){
                        if($f==0){
                            $quer='select * from tbl_chargesheet a,tbl_section b, tbl_police c   where a.Section=b.Sectionid  and a.Nameinvest=c.Policid and a.Status="Charge Sheet Completed" and c.Station="1" and a.Firnumber like "'.$key.'%" ';
                            $f=1;
                        }
                        else
                        {
                            $quer="select * from tbl_chargesheet a,tbl_section b, tbl_police c   where a.Section=b.Sectionid  and a.Nameinvest=c.Policid and a.Status='Charge Sheet Completed' and c.Station='$pid'";
                        }
                    }
                    else{
                        $quer="select * from tbl_chargesheet a,tbl_section b, tbl_police c   where a.Section=b.Sectionid  and a.Nameinvest=c.Policid and a.Status='Charge Sheet Completed' and c.Station='$pid'";
                    }
                    
                    // var_dump($quer);
                    $count=mysqli_query($conn,$quer);
	
    while($row=mysqli_fetch_array($count))
    {
                    
                    ?>
                                                           
                                                           <tr>
                                                           <td>
                                <?php echo $row['Firnumber'] ?>
                              </td>
                              <td>
                                <?php echo $row['Section'] ?>
                              </td>
                              <td>
                                <?php echo $row['Name'] ?>
                              </td>
                              <td>
                                <?php echo $row['Investigationdetail'] ?>
                              </td>
                            
                              <td>
                                <?php echo $row['Remark'] ?>
                              </td>
                              <td>
                                <?php echo $row['Chardate'] ?>
                              </td>
                              <td>
                                <button type="submit" name="view" title="View" value="view" id="<?php echo $row['Firnumber']; ?>" onclick="showdet('<?php echo $row['Firnumber']; ?>')" class="btn bg-gradient-blue btn-sm round-rd elevation-2">
                                  <i class="fas fa-eye"></i>
                                </button>
                            <a href="Chargesheet.php?fid=<?php echo $row['Firnumber']?>" class="btn bg-gradient-indigo btn-sm round-rd elevation-2" title="Charge Sheet"><i class="fas fa-plus"></i
                            ></a>                       
                          </td>
                            </tr>
  <?php
  }
?>
                      </tbody>
                    </table>




