<?php defined('SYSPATH') or die('No direct script access.'); ?>

2015-04-21 13:20:29 --- ERROR: writing
2015-04-21 13:45:58 --- ERROR: writing
2015-04-21 13:45:58 --- ERROR: writing
2015-04-21 14:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/IPILab/wado was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2015-04-21 14:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/IPILab/wado was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2015-04-21 14:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/ajax/series was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2015-04-21 14:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/ajax/series was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}