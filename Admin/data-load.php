<?php
// memanggil file config.php
include("koneksi.php");
include("ses.php");
session_start();
$role_session = $_SESSION['role'];
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
// DB table to use
$table = 'tb_oldmember';
// Table's primary key
$primaryKey = 'id_user';
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case object
// parameter names
$columns = array(
	array( 'db' => 'id_user', 'dt' => 0 ),
	array( 'db' => 'nama',  'dt' => 1 ),
	array( 'db' => 'gender',  'dt' => 2 ),
	array( 'db' => 'tgl_lahir',  'dt' => 3 ),
	array( 'db' => 'alamat',  'dt' => 4 ),
	array( 'db' => 'email',  'dt' => 5 ),
	array( 'db' => 'no_hp',  'dt' => 6 ),
	array( 'db' => 'profesi',  'dt' => 7 ),
	array( 'db' => 'keahlian',  'dt' => 8 ),
	array( 'db' => 'instagram',  'dt' => 9 ),
	array( 'db' => 'linkedln',  'dt' => 10 ),
	array( 'db' => 'facebook',  'dt' => 11 ),
	array( 'db' => 'website',  'dt' => 12 ),
	array( 'db' => 'ktp',  'dt' => 13 ),
    ),
);
// SQL server connection information
$sql_details = array(
	'root' => $dbuser,
	'' => $dbpass,
	'absen_bdv'   => $dbname,
	'localhost' => $dbhost
);
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
require( 'includes/scripts/ssp.class.php' );
echo json_encode(
	SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);