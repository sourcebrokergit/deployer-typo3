<?php

namespace Deployer;

task('service:reload_php_fpm', function () {
    $command = get('service_reload_php_fpm_command');
    $shouldStopOnFailure = get('service_reload_php_fpm_stop_on_failure', false);

    if ($command) {
        try {
            run($command);
            if (output()->isVerbose()) {
                writeln('PHP-FPM reloaded successfully.');
            }
        } catch (\Exception $e) {
            if ($shouldStopOnFailure) {
                throw new GracefulShutdownException('Error reloading PHP-FPM: ' . $e->getMessage());
            }
            writeln('Error reloading PHP-FPM: ' . $e->getMessage());
        }
    } else {
        if (output()->isVerbose()) {
            writeln('No command defined to reload PHP-FPM.');
        }
    }
})->desc('Reload PHP-FPM service.');

after('deploy:symlink', 'service:reload_php_fpm');
