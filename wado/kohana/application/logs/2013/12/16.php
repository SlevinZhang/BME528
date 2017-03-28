<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-12-16 07:02:12 --- ERROR: writing
2013-12-16 08:33:07 --- ERROR: writing
2013-12-16 08:33:07 --- ERROR: writing
2013-12-16 08:33:07 --- ERROR: writing
2013-12-16 08:33:07 --- ERROR: writing
2013-12-16 09:10:35 --- ERROR: writing
2013-12-16 09:10:35 --- ERROR: writing
2013-12-16 09:15:25 --- ERROR: writing
2013-12-16 09:34:24 --- ERROR: writing
2013-12-16 11:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2013-12-16 11:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2013-12-16 11:30:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2013-12-16 11:30:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2013-12-16 12:18:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2013-12-16 12:18:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}