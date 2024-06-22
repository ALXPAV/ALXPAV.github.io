<?php
$os = PHP_OS_FAMILY;

if ($os === 'Windows') {
    $output = shell_exec('.\\OKRun.exe');
} else {
    $output = 'Этот сервер не работает под управлением Windows.';
}

echo "Операционная система: $os\nРезультат выполнения: $output";
?>


