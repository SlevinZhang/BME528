<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-01-25 08:07:39 --- ERROR: writing
2014-01-25 08:24:25 --- ERROR: writing
2014-01-25 09:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2014-01-25 09:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2014-01-25 09:48:34 --- ERROR: writing
2014-01-25 10:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2014-01-25 10:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2014-01-25 10:30:54 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/mnodepre/classes/model/standalone.php [ 18 ]
2014-01-25 10:30:54 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/mnodepre/classes/model/standalone.php [ 18 ]
--
#0 /home/pacsproxy/www/wado/kohana/modules/mnodepre/classes/model/standalone.php(18): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/pacsproxy...', 18, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/mnodepre/classes/model/standalone.php(125): Model_Standalone->sql_execute(true)
#2 /home/pacsproxy/www/wado/kohana/application/classes/controller/admin.php(205): Model_Standalone->get_patient_from_study('1.2.840.113619....')
#3 /home/pacsproxy/www/wado/kohana/application/classes/controller/admin.php(181): Controller_Admin->study()
#4 /home/pacsproxy/www/wado/kohana/application/classes/controller/admin.php(173): Controller_Admin->action_dw()
#5 [internal function]: Controller_Admin->action_study()
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#10 {main}
2014-01-25 10:31:11 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/mnodepre/classes/model/standalone.php [ 18 ]
2014-01-25 10:31:11 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/mnodepre/classes/model/standalone.php [ 18 ]
--
#0 /home/pacsproxy/www/wado/kohana/modules/mnodepre/classes/model/standalone.php(18): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/pacsproxy...', 18, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/mnodepre/classes/model/standalone.php(125): Model_Standalone->sql_execute(true)
#2 /home/pacsproxy/www/wado/kohana/application/classes/controller/admin.php(205): Model_Standalone->get_patient_from_study('1.2.840.113619....')
#3 /home/pacsproxy/www/wado/kohana/application/classes/controller/admin.php(181): Controller_Admin->study()
#4 /home/pacsproxy/www/wado/kohana/application/classes/controller/admin.php(173): Controller_Admin->action_dw()
#5 [internal function]: Controller_Admin->action_study()
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#10 {main}
2014-01-25 11:06:01 --- ERROR: writing
2014-01-25 11:06:01 --- ERROR: writing
2014-01-25 11:06:01 --- ERROR: writing
2014-01-25 11:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2014-01-25 11:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2014-01-25 11:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2014-01-25 11:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2014-01-25 11:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2014-01-25 11:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2014-01-25 12:06:53 --- ERROR: writing
2014-01-25 12:06:53 --- ERROR: writing
2014-01-25 12:06:53 --- ERROR: writing
2014-01-25 12:06:53 --- ERROR: writing
2014-01-25 12:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2014-01-25 12:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2014-01-25 12:26:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2014-01-25 12:26:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2014-01-25 12:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2014-01-25 12:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2014-01-25 12:36:10 --- ERROR: writing
2014-01-25 12:39:25 --- ERROR: writing
2014-01-25 12:39:25 --- ERROR: writing
2014-01-25 12:41:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2014-01-25 12:41:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2014-01-25 12:50:02 --- ERROR: writing
2014-01-25 12:50:02 --- ERROR: writing
2014-01-25 12:50:02 --- ERROR: writing
2014-01-25 12:50:02 --- ERROR: writing
2014-01-25 12:50:02 --- ERROR: writing
2014-01-25 12:57:25 --- ERROR: writing
2014-01-25 13:08:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2014-01-25 13:08:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2014-01-25 13:19:22 --- ERROR: writing
2014-01-25 13:19:22 --- ERROR: writing
2014-01-25 13:25:12 --- ERROR: writing
2014-01-25 13:25:12 --- ERROR: writing
2014-01-25 13:49:38 --- ERROR: writing