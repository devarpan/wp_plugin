<?php


global $wpdb;
		
//$table_name = $wpdb->prefix."contact7_salesforce";
			
$table_name='counter';
$insertResult=$wpdb->insert($table_name,array('counter_name'=> $counterName,'counter_base_val'=> $counterBaseVal,'counter_incrment_with'=> $counter_incrVal,'number_of_days'=> $counter_incrDay,'start_date'=> $counter_incrDate));
$lastid = $wpdb->insert_id;


$query = "SELECT * FROM $table_name where id = ".$lastid;
$result = $wpdb->get_results($query);



?>
		