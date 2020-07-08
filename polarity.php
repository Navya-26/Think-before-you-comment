<?php
require"config.php";
?>
<?php
 $command=escapeshellcmd('python twitter.py');
 $output=shell_exec($command);
 echo$output;
?>