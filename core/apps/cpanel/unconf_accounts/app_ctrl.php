<?php 
# @*************************************************************************@
# @ @author Mansur Altamirov (Mansur_TL)									@
# @ @author_url 1: https://www.instagram.com/mansur_tl                      @
# @ @author_url 2: http://codecanyon.net/user/mansur_tl                     @
# @ @author_email: highexpresstore@gmail.com                                @
# @*************************************************************************@
# @ ColibriSM - The Ultimate Modern Social Media Sharing Platform           @
# @ Copyright (c) 21.03.2020 ColibriSM. All rights reserved.                @
# @*************************************************************************@

function cl_get_unconfirmed_accounts() {
	global $db;

	$db = $db->where("time", (time() - 604800), "<");
	$qr = $db->getValue(T_ACC_VALIDS, "COUNT(*)");

	if (is_posnum($qr)) {
		return $qr;
	}

	return 0;
}