		
			    <table cellpadding="0" cellspacing="0" border="0" class="table  " id="example">                      
                                <thead>
                                    <tr>
                                        <th width="100"></th>
                                        <th class="numberu" width="300">	Number of Subjects :</th>
                                        <th width="50">
											<?php
                            $result1 = mysql_query("SELECT count(unit) FROM grade  where student_id = '$session_id' and school_year like  '%$school_year%' and  semester like '%$semester%'") or die(mysql_error());
							$count = mysql_num_rows($result1);
					
						   while ($rows = mysql_fetch_array($result1)) {
                                ?>
						
								 <?php echo $rows['count(unit)']; ?>
							
                            <?php } ?>
										
										</th>                                 
                                        <th></th>       
                                        <th></th>       
                                        <th class="act"></th>                                                                             
                                        <th></th>
										
									
                                    </tr>
                             
                            </table>