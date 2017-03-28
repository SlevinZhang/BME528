<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-02-16 11:43:31 --- ERROR: writing
2014-02-16 11:43:31 --- ERROR: writing
2014-02-16 11:44:12 --- ERROR: writing
2014-02-16 11:44:13 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.3.6.1.4.1.9590.100.1.2.304308637611964849121390132702371362187/1.2.3.4.5/1.3.6.1.4.1.9590.100.1.2.299301490111496987615666441421143826923.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-16 11:44:13 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.3.6.1.4.1.9590.100.1.2.304308637611964849121390132702371362187/1.2.3.4.5/1.3.6.1.4.1.9590.100.1.2.299301490111496987615666441421143826923.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2014-02-16 11:44:29 --- ERROR: writing
2014-02-16 11:44:29 --- ERROR: writing
2014-02-16 11:44:29 --- ERROR: writing
2014-02-16 11:45:05 --- ERROR: writing
2014-02-16 11:45:05 --- ERROR: writing
2014-02-16 11:45:05 --- ERROR: writing
2014-02-16 11:45:05 --- ERROR: writing
2014-02-16 11:47:39 --- ERROR: writing
2014-02-16 11:47:39 --- ERROR: writing
2014-02-16 11:48:27 --- ERROR: writing
2014-02-16 11:48:27 --- ERROR: writing
2014-02-16 11:54:54 --- ERROR: writing
2014-02-16 11:54:54 --- ERROR: writing
2014-02-16 11:54:54 --- ERROR: writing
2014-02-16 12:09:49 --- ERROR: writing
2014-02-16 12:19:57 --- ERROR: writing
2014-02-16 12:19:57 --- ERROR: writing
2014-02-16 12:30:00 --- ERROR: writing
2014-02-16 12:30:00 --- ERROR: writing
2014-02-16 12:30:00 --- ERROR: writing
2014-02-16 12:30:00 --- ERROR: writing
2014-02-16 12:30:00 --- ERROR: writing
2014-02-16 12:30:00 --- ERROR: writing
2014-02-16 12:47:48 --- ERROR: writing
2014-02-16 12:47:48 --- ERROR: writing
2014-02-16 12:47:48 --- ERROR: writing
2014-02-16 12:56:50 --- ERROR: writing
2014-02-16 12:56:50 --- ERROR: writing
2014-02-16 12:56:50 --- ERROR: writing
2014-02-16 12:57:05 --- ERROR: writing
2014-02-16 12:57:05 --- ERROR: writing
2014-02-16 12:57:38 --- ERROR: writing
2014-02-16 12:57:38 --- ERROR: writing
2014-02-16 13:02:01 --- ERROR: writing
2014-02-16 13:02:01 --- ERROR: writing
2014-02-16 13:03:37 --- ERROR: writing
2014-02-16 13:03:37 --- ERROR: writing
2014-02-16 13:06:12 --- ERROR: writing
2014-02-16 13:06:52 --- ERROR: writing
2014-02-16 13:06:52 --- ERROR: writing
2014-02-16 13:06:52 --- ERROR: writing
2014-02-16 13:06:52 --- ERROR: writing
2014-02-16 13:19:42 --- ERROR: writing
2014-02-16 13:19:42 --- ERROR: writing
2014-02-16 13:20:47 --- ERROR: writing
2014-02-16 13:20:47 --- ERROR: writing
2014-02-16 13:20:47 --- ERROR: writing
2014-02-16 13:21:17 --- ERROR: writing
2014-02-16 13:21:16 --- ERROR: writing
2014-02-16 13:21:35 --- ERROR: writing
2014-02-16 13:21:35 --- ERROR: writing
2014-02-16 13:31:01 --- ERROR: writing
2014-02-16 13:33:08 --- ERROR: writing
2014-02-16 13:33:08 --- ERROR: writing
2014-02-16 13:33:08 --- ERROR: writing
2014-02-16 13:33:08 --- ERROR: writing
2014-02-16 13:34:47 --- ERROR: writing
2014-02-16 13:34:47 --- ERROR: writing
2014-02-16 13:34:47 --- ERROR: writing
2014-02-16 13:34:47 --- ERROR: writing
2014-02-16 13:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2014-02-16 13:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2014-02-16 13:46:48 --- ERROR: writing
2014-02-16 13:46:48 --- ERROR: writing
2014-02-16 13:46:48 --- ERROR: writing