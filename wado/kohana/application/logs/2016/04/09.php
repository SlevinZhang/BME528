<?php defined('SYSPATH') or die('No direct script access.'); ?>

2016-04-09 15:04:45 --- ERROR: writing
2016-04-09 15:14:44 --- ERROR: writing
2016-04-09 15:19:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2016-04-09 15:19:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2016-04-09 19:38:13 --- ERROR: writing
2016-04-09 20:00:05 --- ERROR: writing
2016-04-09 20:02:25 --- ERROR: writing
2016-04-09 20:11:41 --- ERROR: writing
2016-04-09 20:11:42 --- ERROR: writing
2016-04-09 20:11:41 --- ERROR: writing