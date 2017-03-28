<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-07-03 13:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL < was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2014-07-03 13:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL < was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2014-07-03 13:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL < was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2014-07-03 13:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL < was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}