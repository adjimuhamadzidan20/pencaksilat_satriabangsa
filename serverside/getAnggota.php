<?php
 
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
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

require '../config/koneksi_db.php';

// SQL server connection information
$sql_details = array(
    'user' => $user,
    'db'   => $database,
    'pass' => $pass,
    'host' => $host
    // ,'charset' => 'utf8' // Depending on your PHP and MySQL config, you may need this
);
 
// DB table to use
$table = 'dt_anggota';
 
// Table's primary key
$primaryKey = 'ID_anggota';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'ID_anggota', 'dt' => 0 ),
    array( 'db' => 'Nama_lengkap', 'dt' => 1 ),
    array( 'db' => 'Jenis_kelamin', 'dt' => 2 ),
    array( 'db' => 'Alamat', 'dt' => 3 ),
    array( 'db' => 'Sabuk', 'dt' => 4 ),
);
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'ssp.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);