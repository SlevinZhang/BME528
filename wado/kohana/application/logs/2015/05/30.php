<?php defined('SYSPATH') or die('No direct script access.'); ?>

2015-05-30 13:08:10 --- ERROR: writing
2015-05-30 13:18:59 --- ERROR: writing
2015-05-30 13:18:59 --- ERROR: writing
2015-05-30 13:18:59 --- ERROR: writing
2015-05-30 13:21:50 --- ERROR: writing
2015-05-30 13:21:50 --- ERROR: writing
2015-05-30 13:21:50 --- ERROR: writing
2015-05-30 13:25:33 --- ERROR: writing
2015-05-30 13:56:06 --- ERROR: writing
2015-05-30 13:56:06 --- ERROR: writing
2015-05-30 13:56:06 --- ERROR: writing
2015-05-30 13:56:06 --- ERROR: writing
2015-05-30 14:39:38 --- ERROR: writing
2015-05-30 14:39:38 --- ERROR: writing
2015-05-30 14:39:38 --- ERROR: writing
2015-05-30 14:40:23 --- ERROR: writing
2015-05-30 14:40:23 --- ERROR: writing
2015-05-30 15:11:50 --- ERROR: writing
2015-05-30 15:11:50 --- ERROR: writing
2015-05-30 15:11:50 --- ERROR: writing
2015-05-30 15:11:50 --- ERROR: writing
2015-05-30 15:12:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2015-05-30 15:12:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}