<table  id="mytable" class="table table-striped table-hover table-bordered border-info border-top ">
                                                            <thead>
                                                            <tr>
                            <th>FIR </th>
                            <th>Crime Type</th>
                            <th>Name of Accused</th>
                            <th>Complainer Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>FIR Date</th>
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
                            $quer='select * from tbl_fir a,tbl_crimecategory b  where a.crime=b.Crimeid and a.Policeremark!="Charge Sheet Issued" and a.Firnumber like "'.$key.'%" ';
                            $f=1;
                        }
                        else
                        {
                            $quer="select * from tbl_fir a,tbl_crimecategory b  where a.crime=b.Crimeid   and a.Policeremark!='Charge Sheet Issued'  and a.Station='$pid'";
                        }
                    }
                    else{
                        $quer="select * from tbl_fir a,tbl_crimecategory b  where a.crime=b.Crimeid   and a.Policeremark!='Charge Sheet Issued'  and a.Station='$pid'";
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
                                <?php echo $row['Categoryname'] ?>
                              </td>
                              <td>
                                <?php echo $row['Accused'] ?>
                              </td>
                              <td>
                                <?php echo $row['Name'] ?>
                              </td>
                            

                              <td>
                                <?php echo $row['Phone'] ?>
                              </td>
                              <td>
                                <?php echo $row['Addrs'] ?>
                              </td>
                           
                              <td>
                                <?php echo $row['Fdate'] ?>
                              </td>
                              <td>
                                <button type="submit" name="view" title="View" value="view" id="<?php echo $row['Firnumber']; ?>" onclick="showdet('<?php echo $row['Firnumber']; ?>')" class="btn bg-gradient-blue btn-sm round-rd elevation-2">
                                  <i class="fas fa-eye"></i>
                                </button>
                                <a href="Chargesheet.php?fid=<?php echo $row['Firnumber']?>" class="btn bg-gradient-indigo btn-sm round-rd elevation-2" title="Charge Sheet"><i class="fas fa-pen"></i
                            ></a>                   </td>
                            </tr>
  <?php
  }
?>
                      </tbody>
                    </table>




