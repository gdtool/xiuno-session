<?php
function sys_user_read()
{
	global $uid;
	$suser = user_read($uid);
	return $suser;
}