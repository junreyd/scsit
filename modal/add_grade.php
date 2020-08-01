	<?php
		include('../config/db.php');
	if (isset($_POST['edit'])){	
	$year_level=$_POST['year'];
	$grade_id=$_POST['grade_id'];
	$code=$_POST['code'];
	$ave=$_POST['ave'];
	//$mid_term=$_POST['mid_term'];
	$term=$_POST['term'];

	 if ($ave  == '1.0'){ 
	mysql_query("update grades set subject_id = '$code' , gen_ave = '$ave',semester = '$term' , year_level='$year_level', remarks = 'PASS'  where grade_id = '$grade_id' ") or die(mysql_error());
	 } else if($ave == '1.1'){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' ,semester = '$term' , year_level='$year_level', remarks = 'PASS'  where grade_id = '$grade_id' ") or die(mysql_error());
	 }else if($ave == '1.2' ){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' ,semester = '$term' , year_level='$year_level', remarks = 'PASS'  where grade_id = '$grade_id' ") or die(mysql_error());
	 }else if($ave == '1.3'){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' ,semester = '$term' , year_level='$year_level', remarks = 'PASS'  where grade_id = '$grade_id' ") or die(mysql_error());
	 } else if($ave ==  '1.4'){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' , semester = '$term' , year_level='$year_level', remarks = 'PASS'  where grade_id = '$grade_id' ") or die(mysql_error());
	 } else if($ave == '1.5'){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' ,semester = '$term' , year_level='$year_level', remarks = 'PASS'  where grade_id = '$grade_id' ") or die(mysql_error());
	 } else if($ave == '1.6'){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' ,semester = '$term' , year_level='$year_level', remarks = 'PASS'  where grade_id = '$grade_id' ") or die(mysql_error());
	 } else if($ave == '1.7'){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' ,semester = '$term' , year_level='$year_level', remarks = 'PASS'  where grade_id = '$grade_id' ") or die(mysql_error());
	 }else if($ave == '1.8'){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' ,semester = '$term' , year_level='$year_level', remarks = 'PASS'  where grade_id = '$grade_id' ") or die(mysql_error());
	 }else if($ave == '1.9'){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' ,semester = '$term' , year_level='$year_level', remarks = 'PASS'  where grade_id = '$grade_id' ") or die(mysql_error());
	 }else if($ave == '2.0' ){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' ,semester = '$term' , year_level='$year_level', remarks = 'PASS'  where grade_id = '$grade_id' ") or die(mysql_error());
	 }else if($ave == '2.1'){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' ,semester = '$term' , year_level='$year_level', remarks = 'PASS'  where grade_id = '$grade_id' ") or die(mysql_error());
	 } else if($ave ==  '2.2'){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' , semester = '$term' , year_level='$year_level', remarks = 'PASS'  where grade_id = '$grade_id' ") or die(mysql_error());
	 } else if($ave == '2.3'){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' ,semester = '$term' , year_level='$year_level', remarks = 'PASS'  where grade_id = '$grade_id' ") or die(mysql_error());
	 } else if($ave == '2.4'){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' ,semester = '$term' , year_level='$year_level', remarks = 'PASS'  where grade_id = '$grade_id' ") or die(mysql_error());
	 } else if($ave == '2.5'){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' ,semester = '$term' , year_level='$year_level', remarks = 'PASS'  where grade_id = '$grade_id' ") or die(mysql_error());
	 }else if($ave == '2.6'){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' ,semester = '$term' , year_level='$year_level', remarks = 'PASS'  where grade_id = '$grade_id' ") or die(mysql_error());
	 }else if($ave == '2.7'){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' ,semester = '$term' , year_level='$year_level', remarks = 'PASS'  where grade_id = '$grade_id' ") or die(mysql_error());
	}else if($ave == '2.8'){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' ,semester = '$term' , year_level='$year_level', remarks = 'PASS'  where grade_id = '$grade_id' ") or die(mysql_error());
	}else if($ave == '2.9'){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' ,semester = '$term' , year_level='$year_level', remarks = 'PASS'  where grade_id = '$grade_id' ") or die(mysql_error());
	}else if($ave == '3.0'){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' ,semester = '$term' , year_level='$year_level', remarks = 'PASS'  where grade_id = '$grade_id' ") or die(mysql_error());
	}else if($ave == '5.0'){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' ,semester = '$term' , year_level='$year_level', remarks = 'FAILED (Must Repeat)'  where grade_id = '$grade_id' ") or die(mysql_error());
	 }else if($ave == 'ICR'){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' ,semester = '$term' , year_level='$year_level', remarks = 'Incomplete Requirements'  where grade_id = '$grade_id' ") or die(mysql_error());
	}else if($ave == 'W'){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' ,semester = '$term' , year_level='$year_level', remarks = 'Withdrawn'  where grade_id = '$grade_id' ") or die(mysql_error());
}else if($ave == 'NG'){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' ,semester = '$term' , year_level='$year_level', remarks = 'No Grade'  where grade_id = '$grade_id' ") or die(mysql_error());
	 }else if($ave == 'DR'){
	mysql_query("update grades set  subject_id = '$code' , gen_ave = '$ave' ,semester = '$term' , year_level='$year_level', remarks = 'Dropped'  where grade_id = '$grade_id' ") or die(mysql_error());
	 
	 } 

		?>

<script>
alert('Grade Successfully updated');
   window.location = "load.php<?php echo '?subject_id='.$get_id;  ?>";    
</script>
<?php		
	}
	?>
<div class="row-fluid">
 <div class="modal fade" id="add_grade<?php echo $id;?>" >  
  <div class="modal-dialog modal-md">
           <div class="modal-content">
              <div class="modal-header">
			  <div class="col-md-12">
                        <div class="alert alert-info alert-info">
                            <i class="fa fa-book"></i>&nbsp;Add Grades
                        </div>
                    </div>  
                <div class="modal-body" style="padding-left:75px;">  
                <form method="post"> 
                <?php
			$term = $subject_row['semester']; 
			$year = $student['year_level'];      
					?>	
			
				<input type="hidden" value="<?php echo $term ?>"  name="term">
				<input type="hidden" value="<?php echo $year ?>"  name="year"> 
			<input type="hidden" name="grade_id" value="<?php echo $id; ?>" /> 
			<div class="form-group">
        <div class="row">	
			<div class="col-md-4">
				<label class="control-label">Subject Code:&nbsp;&nbsp;&nbsp;</label>
				</div>
			 <div class="col-md-8">	
				<input type="hidden" name="code" value="<?php echo $subject_row['subject_id']; ?>">
				<strong><?php echo $subject_row['code'];  ?></strong>
				</div>
				</div>
				</div>
		<div class="form-group">
        <div class="row">
			<div class="col-md-4">
            	<label class="control-label" >Final Ave.</label>
            	</div>
            <div class="col-md-4">
				<select name="ave" class="form-control input-sm" >
				<option><?php echo $instructor['gen_ave']; ?></option>
				<option></option>
				<option>1.0</option>
				<option>1.1</option>
				<option>1.2</option>
				<option>1.3</option>
				<option>1.4</option>
				<option>1.5</option>
				<option>1.6</option>
				<option>1.7</option>
				<option>1.8</option>
				<option>1.9</option>
				<option>2.0</option>
				<option>2.1</option>
				<option>2.2</option>
				<option>2.3</option>
				<option>2.4</option>
				<option>2.5</option>
				<option>2.6</option>
				<option>2.7</option>
				<option>2.8</option>
				<option>2.9</option>
				<option>3.0</option>
				<option>5.0</option>
				<option>ICR</option>
				<option>DR</option>
				<option>NG</option>
				<option>W</option>
				</select>
				</div>
				</div>
				</div>
		</div>
		<div class="modal-footer">
			<button name="edit" type="submit" class="btn btn-info"><i class="fa fa-save"></i>&nbsp;Update</button>
			<button class="btn btn-default" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i>&nbsp;Close</button>
		</div>
	    </form>	
    </div>
</div>
</div>
</div>
</div>	

	
	