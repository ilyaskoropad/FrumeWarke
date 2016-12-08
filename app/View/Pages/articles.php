	<?php
	$DB = Dbconnect::instance()->getConnect();
        var_dump($DB);
echo '1111111111111111111111111111';
        $user = $DB->selectRow('SELECT * FROM `article`;');
	print_r($user);
	?>
						