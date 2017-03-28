<?php defined('SYSPATH') or die('No direct script access.'); ?>

2017-01-24 14:43:05 --- ERROR: Cache_Exception [ 0 ]: PHP APC extension is not available. ~ MODPATH/cache/classes/kohana/cache/apc.php [ 52 ]
2017-01-24 14:43:05 --- STRACE: Cache_Exception [ 0 ]: PHP APC extension is not available. ~ MODPATH/cache/classes/kohana/cache/apc.php [ 52 ]
--
#0 /home/bme528/www/wado/kohana/modules/cache/classes/kohana/cache.php(137): Kohana_Cache_Apc->__construct(Array)
#1 /home/bme528/www/wado/kohana/modules/mnodepre/classes/mnode/core.php(175): Kohana_Cache::instance('apc')
#2 /home/bme528/www/wado/kohana/modules/mnodepre/init.php(4): Mnode_Core::init()
#3 /home/bme528/www/wado/kohana/system/classes/kohana/core.php(565): require_once('/home/bme528/ww...')
#4 /home/bme528/www/wado/kohana/application/bootstrap.php(122): Kohana_Core::modules(Array)
#5 /home/bme528/www/wado/www/index.php(98): require('/home/bme528/ww...')
#6 {main}
2017-01-24 14:51:12 --- ERROR: ErrorException [ 2 ]: mysql_pconnect(): Access denied for user 'icare'@'localhost' (using password: YES) ~ APPPATH/classes/controller/admin.php [ 170 ]
2017-01-24 14:51:12 --- STRACE: ErrorException [ 2 ]: mysql_pconnect(): Access denied for user 'icare'@'localhost' (using password: YES) ~ APPPATH/classes/controller/admin.php [ 170 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_pconnect(...', '/home/bme528/ww...', 170, Array)
#1 /home/bme528/www/wado/kohana/application/classes/controller/admin.php(170): mysql_pconnect('localhost', 'icare', '$icare_Lab')
#2 [internal function]: Controller_Admin->action_study()
#3 /home/bme528/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/bme528/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/bme528/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/bme528/www/wado/www/index.php(105): Kohana_Request->execute()
#7 {main}
2017-01-24 14:54:33 --- ERROR: ErrorException [ 2 ]: mysql_pconnect(): Access denied for user 'icare'@'localhost' (using password: YES) ~ APPPATH/classes/controller/admin.php [ 170 ]
2017-01-24 14:54:33 --- STRACE: ErrorException [ 2 ]: mysql_pconnect(): Access denied for user 'icare'@'localhost' (using password: YES) ~ APPPATH/classes/controller/admin.php [ 170 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_pconnect(...', '/home/bme528/ww...', 170, Array)
#1 /home/bme528/www/wado/kohana/application/classes/controller/admin.php(170): mysql_pconnect('localhost', 'icare', '$icare_Lab')
#2 [internal function]: Controller_Admin->action_study()
#3 /home/bme528/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/bme528/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/bme528/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/bme528/www/wado/www/index.php(105): Kohana_Request->execute()
#7 {main}
2017-01-24 14:54:34 --- ERROR: ErrorException [ 2 ]: mysql_pconnect(): Access denied for user 'icare'@'localhost' (using password: YES) ~ APPPATH/classes/controller/admin.php [ 170 ]
2017-01-24 14:54:34 --- STRACE: ErrorException [ 2 ]: mysql_pconnect(): Access denied for user 'icare'@'localhost' (using password: YES) ~ APPPATH/classes/controller/admin.php [ 170 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_pconnect(...', '/home/bme528/ww...', 170, Array)
#1 /home/bme528/www/wado/kohana/application/classes/controller/admin.php(170): mysql_pconnect('localhost', 'icare', '$icare_Lab')
#2 [internal function]: Controller_Admin->action_study()
#3 /home/bme528/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/bme528/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/bme528/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/bme528/www/wado/www/index.php(105): Kohana_Request->execute()
#7 {main}
2017-01-24 15:11:47 --- ERROR: ErrorException [ 2 ]: mysql_pconnect(): Access denied for user 'icare'@'localhost' (using password: YES) ~ APPPATH/classes/controller/admin.php [ 170 ]
2017-01-24 15:11:47 --- STRACE: ErrorException [ 2 ]: mysql_pconnect(): Access denied for user 'icare'@'localhost' (using password: YES) ~ APPPATH/classes/controller/admin.php [ 170 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_pconnect(...', '/home/bme528/ww...', 170, Array)
#1 /home/bme528/www/wado/kohana/application/classes/controller/admin.php(170): mysql_pconnect('localhost', 'icare', 'icarebme528')
#2 [internal function]: Controller_Admin->action_study()
#3 /home/bme528/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/bme528/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/bme528/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/bme528/www/wado/www/index.php(105): Kohana_Request->execute()
#7 {main}
2017-01-24 21:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template2.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 21:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template2.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/bme528/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/bme528/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/bme528/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2017-01-24 21:08:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template3.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 21:08:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template3.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/bme528/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/bme528/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/bme528/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2017-01-24 21:08:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template4.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 21:08:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template4.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/bme528/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/bme528/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/bme528/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2017-01-24 21:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template8.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 21:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template8.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/bme528/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/bme528/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/bme528/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2017-01-24 21:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template7.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 21:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template7.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/bme528/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/bme528/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/bme528/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2017-01-24 21:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template6.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 21:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template6.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/bme528/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/bme528/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/bme528/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2017-01-24 21:08:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template5.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 21:08:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template5.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/bme528/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/bme528/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/bme528/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2017-01-24 21:08:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template9.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 21:08:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template9.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/bme528/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/bme528/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/bme528/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2017-01-24 21:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template10.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 21:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template10.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/bme528/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/bme528/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/bme528/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2017-01-24 21:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template51.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 21:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template51.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/bme528/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/bme528/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/bme528/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2017-01-24 21:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template52.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 21:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template52.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/bme528/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/bme528/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/bme528/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2017-01-24 21:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template53.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 21:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template53.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/bme528/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/bme528/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/bme528/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2017-01-24 21:08:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template41.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-01-24 21:08:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mask_thumb/template41.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/bme528/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/bme528/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/bme528/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}