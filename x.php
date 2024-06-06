Illuminate\Queue\MaxAttemptsExceededException: App\Jobs\SendMessage has been attempted too many times. in /home/zepson.co.tz/portal.zepsonsms.co.tz/vendor/laravel/framework/src/Illuminate/Queue/MaxAttemptsExceededException.php:24
Stack trace:
#0 /home/zepson.co.tz/portal.zepsonsms.co.tz/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(785): Illuminate\Queue\MaxAttemptsExceededException::forJob()
#1 /home/zepson.co.tz/portal.zepsonsms.co.tz/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(519): Illuminate\Queue\Worker->maxAttemptsExceededException()
#2 /home/zepson.co.tz/portal.zepsonsms.co.tz/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(429): Illuminate\Queue\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts()
#3 /home/zepson.co.tz/portal.zepsonsms.co.tz/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(389): Illuminate\Queue\Worker->process()
#4 /home/zepson.co.tz/portal.zepsonsms.co.tz/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(176): Illuminate\Queue\Worker->runJob()
#5 /home/zepson.co.tz/portal.zepsonsms.co.tz/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(138): Illuminate\Queue\Worker->daemon()
#6 /home/zepson.co.tz/portal.zepsonsms.co.tz/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(121): Illuminate\Queue\Console\WorkCommand->runWorker()
#7 /home/zepson.co.tz/portal.zepsonsms.co.tz/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\Queue\Console\WorkCommand->handle()
#8 /home/zepson.co.tz/portal.zepsonsms.co.tz/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\Container\BoundMethod::Illuminate\Container\{closure}()
#9 /home/zepson.co.tz/portal.zepsonsms.co.tz/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\Container\Util::unwrapIfClosure()
#10 /home/zepson.co.tz/portal.zepsonsms.co.tz/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(37): Illuminate\Container\BoundMethod::callBoundMethod()
#11 /home/zepson.co.tz/portal.zepsonsms.co.tz/vendor/laravel/framework/src/Illuminate/Container/Container.php(662): Illuminate\Container\BoundMethod::call()
#12 /home/zepson.co.tz/portal.zepsonsms.co.tz/vendor/laravel/framework/src/Illuminate/Console/Command.php(211): Illuminate\Container\Container->call()
#13 /home/zepson.co.tz/portal.zepsonsms.co.tz/vendor/symfony/console/Command/Command.php(326): Illuminate\Console\Command->execute()
#14 /home/zepson.co.tz/portal.zepsonsms.co.tz/vendor/laravel/framework/src/Illuminate/Console/Command.php(181): Symfony\Component\Console\Command\Command->run()
#15 /home/zepson.co.tz/portal.zepsonsms.co.tz/vendor/symfony/console/Application.php(1096): Illuminate\Console\Command->run()
#16 /home/zepson.co.tz/portal.zepsonsms.co.tz/vendor/symfony/console/Application.php(324): Symfony\Component\Console\Application->doRunCommand()
#17 /home/zepson.co.tz/portal.zepsonsms.co.tz/vendor/symfony/console/Application.php(175): Symfony\Component\Console\Application->doRun()
#18 /home/zepson.co.tz/portal.zepsonsms.co.tz/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(201): Symfony\Component\Console\Application->run()
#19 /home/zepson.co.tz/portal.zepsonsms.co.tz/artisan(37): Illuminate\Foundation\Console\Kernel->handle()
#20 {main}


/usr/local/lsws/lsphp81/bin/php -q  /home/zepson.co.tz/portal.zepsonsms.co.tz/artisan schedule:run	