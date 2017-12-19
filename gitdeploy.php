<?php

if ($_GET['key']=="3418c2abed0cb7c6e7") {
	$user = posix_getpwuid(posix_getuid());
	shell_exec("eval $(ssh-agent -k) && eval $(ssh-agent -s) && ssh-add " . $user['dir'] . "/.ssh/git_deploy && git fetch origin && git reset --hard HEAD@{upstream} && eval $(ssh-agent -k)");
}

?>