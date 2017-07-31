<?php 
/* Template Name: Thank you Page Template */ 

get_header();
$enc=$_GET['unid'];
$visiotr_email_id=hex2bin($enc); // result: Hello
global $wpdb;
$table_prefix=$wpdb->prefix;

$tablename=$table_prefix.'cf7dbplugin_submits';

$query='select * from '.$tablename.' WHERE form_name = "NO TDS Form" AND field_name= "your-email" AND field_value= "'.$visiotr_email_id.'"';
//echo $query;
 $result = $wpdb->get_results($query, OBJECT);


if (count($result)> 0){
$visitor_submit_time=$result[0]->submit_time;
//$visitor_form_name=$result[0]->form_name;
//$visitor_email_id_lab=$result[0]->field_name;
$visitor_email_id=$result[0]->field_value;
//$visitor_field_order$result[0]->field_order;
$sql = "INSERT INTO $tablename (submit_time, form_name,field_name, field_value, field_order,file) VALUES ('$visitor_submit_time', 'NO TDS Form', 'confirmation status', 'confirmed','1100000', NULL)";
		if($wpdb->query($sql)) {
         }
}else{ }

?>
