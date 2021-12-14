<?php

namespace Container3s2T1Wn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServicesResetterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DependencyInjection/ServicesResetter.php';

        return $container->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () use ($container) {
            if (isset($container->services['cache.app'])) {
                yield 'cache.app' => ($container->services['cache.app'] ?? null);
            }
            if (isset($container->services['cache.system'])) {
                yield 'cache.system' => ($container->services['cache.system'] ?? null);
            }
            if (isset($container->privates['cache.validator'])) {
                yield 'cache.validator' => ($container->privates['cache.validator'] ?? null);
            }
            if (isset($container->privates['cache.serializer'])) {
                yield 'cache.serializer' => ($container->privates['cache.serializer'] ?? null);
            }
            if (isset($container->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($container->privates['cache.annotations'] ?? null);
            }
            if (isset($container->privates['cache.property_info'])) {
                yield 'cache.property_info' => ($container->privates['cache.property_info'] ?? null);
            }
            if (isset($container->privates['form.choice_list_factory.cached'])) {
                yield 'form.choice_list_factory.cached' => ($container->privates['form.choice_list_factory.cached'] ?? null);
            }
            if (isset($container->privates['mailer.message_logger_listener'])) {
                yield 'mailer.message_logger_listener' => ($container->privates['mailer.message_logger_listener'] ?? null);
            }
            if (isset($container->services['cache.validator_expression_language'])) {
                yield 'cache.validator_expression_language' => ($container->services['cache.validator_expression_language'] ?? null);
            }
            if (isset($container->services['profiler'])) {
                yield 'profiler' => ($container->services['profiler'] ?? null);
            }
            if (isset($container->services['.container.private.validator'])) {
                yield 'debug.validator' => ($container->services['.container.private.validator'] ?? null);
            }
            if (isset($container->privates['debug.stopwatch'])) {
                yield 'debug.stopwatch' => ($container->privates['debug.stopwatch'] ?? null);
            }
            if (isset($container->services['event_dispatcher'])) {
                yield 'debug.event_dispatcher' => ($container->services['event_dispatcher'] ?? null);
            }
            if (isset($container->privates['monolog.handler.main'])) {
                yield 'monolog.handler.main' => ($container->privates['monolog.handler.main'] ?? null);
            }
            if (isset($container->privates['monolog.handler.console'])) {
                yield 'monolog.handler.console' => ($container->privates['monolog.handler.console'] ?? null);
            }
            if (isset($container->services['doctrine'])) {
                yield 'doctrine' => ($container->services['doctrine'] ?? null);
            }
            if (isset($container->privates['form.type.entity'])) {
                yield 'form.type.entity' => ($container->privates['form.type.entity'] ?? null);
            }
            if (isset($container->services['.container.private.security.token_storage'])) {
                yield 'security.token_storage' => ($container->services['.container.private.security.token_storage'] ?? null);
            }
            if (isset($container->privates['cache.security_expression_language'])) {
                yield 'cache.security_expression_language' => ($container->privates['cache.security_expression_language'] ?? null);
            }
        }, function () use ($container) {
            return 0 + (int) (isset($container->services['cache.app'])) + (int) (isset($container->services['cache.system'])) + (int) (isset($container->privates['cache.validator'])) + (int) (isset($container->privates['cache.serializer'])) + (int) (isset($container->privates['cache.annotations'])) + (int) (isset($container->privates['cache.property_info'])) + (int) (isset($container->privates['form.choice_list_factory.cached'])) + (int) (isset($container->privates['mailer.message_logger_listener'])) + (int) (isset($container->services['cache.validator_expression_language'])) + (int) (isset($container->services['profiler'])) + (int) (isset($container->services['.container.private.validator'])) + (int) (isset($container->privates['debug.stopwatch'])) + (int) (isset($container->services['event_dispatcher'])) + (int) (isset($container->privates['monolog.handler.main'])) + (int) (isset($container->privates['monolog.handler.console'])) + (int) (isset($container->services['doctrine'])) + (int) (isset($container->privates['form.type.entity'])) + (int) (isset($container->services['.container.private.security.token_storage'])) + (int) (isset($container->privates['cache.security_expression_language']));
        }), ['cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset'], 'form.choice_list_factory.cached' => [0 => 'reset'], 'mailer.message_logger_listener' => [0 => 'reset'], 'cache.validator_expression_language' => [0 => 'reset'], 'profiler' => [0 => 'reset'], 'debug.validator' => [0 => 'reset'], 'debug.stopwatch' => [0 => 'reset'], 'debug.event_dispatcher' => [0 => 'reset'], 'monolog.handler.main' => [0 => 'reset'], 'monolog.handler.console' => [0 => 'reset'], 'doctrine' => [0 => 'reset'], 'form.type.entity' => [0 => 'reset'], 'security.token_storage' => [0 => 'disableUsageTracking', 1 => 'setToken'], 'cache.security_expression_language' => [0 => 'reset']]);
    }
}
