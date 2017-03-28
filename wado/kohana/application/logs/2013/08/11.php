<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-08-11 13:09:47 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/mnodepre/classes/model/standalone.php [ 18 ]
2013-08-11 13:09:47 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/mnodepre/classes/model/standalone.php [ 18 ]
--
#0 /home/pacsproxy/www/wado/kohana/modules/mnodepre/classes/model/standalone.php(18): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/pacsproxy...', 18, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/mnodepre/classes/model/standalone.php(125): Model_Standalone->sql_execute(true)
#2 /home/pacsproxy/www/wado/kohana/application/classes/controller/admin.php(205): Model_Standalone->get_patient_from_study('undefined')
#3 /home/pacsproxy/www/wado/kohana/application/classes/controller/admin.php(181): Controller_Admin->study()
#4 /home/pacsproxy/www/wado/kohana/application/classes/controller/admin.php(173): Controller_Admin->action_dw()
#5 [internal function]: Controller_Admin->action_study()
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#10 {main}
2013-08-11 13:12:23 --- ERROR: writing
2013-08-11 13:12:23 --- ERROR: writing
2013-08-11 13:12:23 --- ERROR: writing
2013-08-11 17:43:50 --- ERROR: writing