<?php 

$dbbkpfolder = 'DBBackup'.date('dmY');
$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "root";
$db_port = "3306";

if (!is_dir("../_lib/DbBkp/")) {
	mkdir("../_lib/DbBkp/", 0777); //Creating DBBkp Folder
    mkdir("../_lib/DbBkp/".$dbbkpfolder, 0777); //Creating a new folder directory datewise if folder not exists with currentdate folder
	exec('mysqldump --user='.$db_username.' --password='.$db_password.' --host='.$db_hostname.' --port='.$db_port.' sfa --tables '.$table_name.' > ../_lib/DbBkp/'.$dbbkpfolder.'/'.$table_name.'.sql');
    echo "The directory DbBkp was successfully created.";
    exit;
} else {

	mkdir("../_lib/DbBkp/".$dbbkpfolder, 0777);		
	exec('mysqldump --user='.$db_username.' --password='.$db_password.' --host='.$db_hostname.' --port='.$db_port.' sfa --tables '.$table_name.' > ../_lib/DbBkp/'.$dbbkpfolder.'/'.$table_name.'.sql');

	echo "The directory DbBkp exists.";
}

?>
