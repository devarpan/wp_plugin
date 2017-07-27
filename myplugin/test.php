<?php 

/*
Plugin Name: test plugin
Description: An addon 
Author: Arpan A, Developer at Tech9logy Creators
*/

add_action( 'admin_menu', 'register_my_scplg_menu_page' );

function register_my_scplg_menu_page(){
add_menu_page( 'countsc', 'counter shortcode', 'manage_options', 't9lscplsett', 'my_first_menu_page', '', 6 );
add_submenu_page( 't9lscplsett', 'countsc', 'Entries', 'manage_options', 't9lscpl_entries', 'my_first_submenu_function');

}
function my_first_menu_page(){
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );

	}
	global $table_name;
	
	if(isset($_POST['s1']))
	{
		$counterName=$_POST['counter_name'];
		$counterBaseVal=$_POST['counter_baseVal'];
		$counter_incrVal=$_POST['counter_incrVal'];
		$counter_incrDay=$_POST['counter_incrDay'];
		$counter_incrDate=$_POST['counter_incrDate'];
		
		if(!empty($counterName)&&!empty($counterBaseVal)&&!empty($counter_incrVal)&&!empty($counter_incrDay)&&!empty($counter_incrDate)){
			
		global $wpdb;
		
		//$table_name = $wpdb->prefix."contact7_salesforce";
			
		$table_name='counter';
		$insertResult=$wpdb->insert($table_name,array('counter_name'=> $counterName,'counter_base_val'=> $counterBaseVal,'counter_incrment_with'=> $counter_incrVal,'number_of_days'=> $counter_incrDay,'start_date'=> $counter_incrDate));
		$lastid = $wpdb->insert_id;
		
			$query = "SELECT * FROM $table_name where id = ".$lastid;
			$result = $wpdb->get_results($query);
			
			$counterName=$result[0]->counter_name;
			$counterBaseVal=$result[0]->counter_base_val;
			$counterIncVal=$result[0]->counter_incrment_with;
			$counterIDays=$result[0]->number_of_days;
			$counterStartDate=$result[0]->start_date;
			
			echo '[list-counters counterName="'.$counterName.'" counterBaseVal="'.$counterBaseVal.'" CounterIncWith="'.$counterIncVal.'" CounterDays="'.$counterIDays.'" CounterStartDate="'.$counterStartDate.'" ]';
			

		}else{
			echo 'Every field is required!';
		}
	}
	echo '<div class="wrap">';
?>
	<h1>Create Short code here. </h1>
	
	<form name="shortcode_form" id="shortcode_form" method="post">
	<span style="width:30px">Name:</span>   <input type="text" name="counter_name"><br>
	<span style="width:30px">Base Value:</span>  <input id="" type="text" name="counter_baseVal"><br>
	<span style="width:30px">Increment Value:</span>  <input type="text" name="counter_incrVal"><br>
	<span style="width:30px">Increment Day:</span>	<input type="text" name="counter_incrDay"><br>
	<span style="width:30px">Increment Date:</span> <input type="text" name="counter_incrDate" id="counter_incrDate"><br>
	<br>
	<input type="submit" name="s1" value="send" class="button button-primary">
	
	</form>

<?php
//require_once(dirname (__FILE__) . '/includes/title_form.php');	
	echo '</div>';
}
add_shortcode( 'list-counters', 'rmcc_post_listing_parameters_shortcode12' );
function rmcc_post_listing_parameters_shortcode12( $atts ) {
    ob_start();
	
	$myvariable = ob_get_clean();
	$countername=$atts['countername'];
	$counterbaseval=$atts['counterbaseval'];
	$counterincwith=$atts['counterincwith'];
	$counterdays=$atts['counterdays'];
	$counterstartdate=$atts['counterstartdate'];	
	global $wpdb;

	$counterMetaData = $wpdb->get_results("SELECT * FROM counter where counter_name = '$countername'");
	if($counterMetaData){
		$counterMetaDataupdate = $wpdb->get_results("SELECT * FROM counter where counter_name = '$countername'");
		
		$baseVAl=$counterMetaDataupdate[0]->counter_base_val;
	
		$counterID=$counterMetaDataupdate[0]->id;
		//$baseVAlArr=str_split($baseVAl);
		/*echo '<pre>';
		print_r($baseVAlArr);
		echo '</pre>';
		die;
		*/	
	}
	else{
		$wpdb->insert('counter', array(
		'counter_name' => $countername,
		'counter_base_val' => $counterbaseval,
		'counter_incrment_with' => $counterincwith,
		'number_of_days' => $counterdays,
		'start_date' => $counterstartdate,
		));
		$counterMetaDatainsert = $wpdb->get_results("SELECT * FROM counter where counter_name = '$countername'");
		
		$baseVAl=$counterMetaDatainsert[0]->counter_base_val;
		$counterID=$counterMetaDatainsert[0]->id;
		$baseVAl=$baseVAl;
		//$baseVAlArr=str_split($baseVAl);
	}			
			/*foreach($baseVAlArr as $baseVAlArrVal){
				
				$returningavr.='<div class="counter" id=""><span class="count">'.$baseVAlArrVal.'</span></div>';
				
			}
			*/
	$rv=0;
		$returningavr=$baseVAl;
        return $returningavr;
  }



function counter_table_update12(){
global $wpdb;
$counterTableMetaData = $wpdb->get_results("SELECT * FROM counter ");
	
	foreach($counterTableMetaData as $counterTableData){
		
		$FldCounter_id=$counterTableData->id;
		$FldCounter_name=$counterTableData->counter_name;
		$FldCounter_base_val=$counterTableData->counter_base_val;
		$FldCounter_incrment_with=$counterTableData->counter_incrment_with;
		$FldNumber_of_days=$counterTableData->number_of_days;
		$checkDate=	$counterTableData->start_date;
		
		//echo $checkDate;
		$checkDatesto=strtotime($checkDate);
		$now = time();
		$current_date=date("Y-m-d");
		$datediff = floor(($now-$checkDatesto)/(60*60*24));
		
		if($datediff==$FldNumber_of_days){
			$updatedBaseVal=$FldCounter_base_val+$FldCounter_incrment_with;
			
			$wpdb->query("UPDATE counter SET counter_base_val='$updatedBaseVal',start_date='$current_date' where id ='$FldCounter_id'");
		}
		
	}

	//return print_r($counterTableMetaData);
	
}
function my_first_submenu_function(){
	global $wpdb;
	$counterMetaDatainsert = $wpdb->get_results("SELECT * FROM counter ");
	$i=0;
	foreach($counterMetaDatainsert as $counterDatainsert){
			$i++;
		
			$counterName=$counterDatainsert->counter_name;
			$counterBaseVal=$counterDatainsert->counter_base_val;
			$counterIncVal=$counterDatainsert->counter_incrment_with;
			$counterIDays=$counterDatainsert->number_of_days;
			$counterStartDate=$counterDatainsert->start_date;
			echo '<br>';
			echo $i.'.) <b> [list-counters counterName="'.$counterName.'" counterBaseVal="'.$counterBaseVal.'" CounterIncWith="'.$counterIncVal.'" CounterDays="'.$counterIDays.'" CounterStartDate="'.$counterStartDate.'" ] </b>';
			echo '<br>';
	}
}

counter_table_update12();
?>
