<?php
include('connection.php');
 
$column = array(
    'id',
    'page_url',
    'referrer_url',
    'user_ip_address',
    'user_agent',
    'created'
);
 
$query = "SELECT * FROM visitor_logs";
 
if (isset($_POST['search']['value'])) {
    $query .= '
 WHERE id LIKE "%' . $_POST['search']['value'] . '%" 
 OR page_url LIKE "%' . $_POST['search']['value'] . '%" 
 OR referrer_url LIKE "%' . $_POST['search']['value'] . '%" 
 OR user_ip_address LIKE "%' . $_POST['search']['value'] . '%" 
 OR user_agent LIKE "%' . $_POST['search']['value'] . '%" 
 OR created LIKE "%' . $_POST['search']['value'] . '%" 
 ';
}
 
if (isset($_POST['order'])) {
    $query .= 'ORDER BY ' . $column[$_POST['order']['0']['column']] . ' ' . $_POST['order']['0']['dir'] . ' ';
} else {
    $query .= 'ORDER BY id DESC ';
}
 
$query1 = '';
 
if ($_POST['length'] != -1) {
    $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
 
$statement = $connect->prepare($query);
 
$statement->execute();
 
$number_filter_row = $statement->rowCount();
 
$statement = $connect->prepare($query . $query1);
 
$statement->execute();
 
$result = $statement->fetchAll();
 
$data = array();
 
foreach ($result as $row) {
    $sub_array   = array();
    $sub_array[] = $row['id'];
    $sub_array[] = $row['page_url'];
    $sub_array[] = $row['referrer_url'];
    $sub_array[] = $row['user_ip_address'];
    $sub_array[] = $row['user_agent'];
    $sub_array[] = $row['created'];
    $data[]      = $sub_array;
}
 
function count_all_data($connect)
{
    $query     = "SELECT * FROM visitor_logs";
    $statement = $connect->prepare($query);
    $statement->execute();
    return $statement->rowCount();
}
 
$output = array(
    'draw' => intval($_POST['draw']),
    'recordsTotal' => count_all_data($connect),
    'recordsFiltered' => $number_filter_row,
    'data' => $data
   
);
 
echo json_encode($output);
 
?>