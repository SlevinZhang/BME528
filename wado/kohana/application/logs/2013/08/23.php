<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-08-23 15:34:26 --- ERROR: writing
2013-08-23 15:34:26 --- ERROR: writing
2013-08-23 16:55:37 --- ERROR: writing
2013-08-23 16:55:37 --- ERROR: writing
2013-08-23 17:12:45 --- ERROR: writing
2013-08-23 17:12:45 --- ERROR: writing
2013-08-23 17:12:45 --- ERROR: writing
2013-08-23 17:12:45 --- ERROR: writing
2013-08-23 17:13:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2013-08-23 17:13:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}