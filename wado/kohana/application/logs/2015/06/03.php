<?php defined('SYSPATH') or die('No direct script access.'); ?>

2015-06-03 09:49:05 --- ERROR: writing
2015-06-03 10:01:18 --- ERROR: writing
2015-06-03 10:19:06 --- ERROR: writing
2015-06-03 11:00:41 --- ERROR: writing
2015-06-03 11:18:43 --- ERROR: writing
2015-06-03 11:25:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2015-06-03 11:25:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2015-06-03 12:25:05 --- ERROR: writing