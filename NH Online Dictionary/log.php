<?php 
 
// Include the database configuration file 
include_once 'connection.php'; 
 
// Get current page URL 
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://"; 
$currentURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING']; 
 
// Get server related info 
$user_ip_address = $_SERVER['REMOTE_ADDR']; 
$referrer_url = !empty($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'/'; 
$user_agent = $_SERVER['HTTP_USER_AGENT']; 
 
// Insert visitor log into database 
$sql = "INSERT INTO visitor_logs (page_url, referrer_url, user_ip_address, user_agent, created) VALUES (?,?,?,?,NOW())"; 
$stmt = $conn->prepare($sql); 
$stmt->bind_param("ssss", $currentURL, $referrer_url, $user_ip_address, $user_agent); 
$insert = $stmt->execute(); 
 
?>