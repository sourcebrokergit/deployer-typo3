<?php

namespace Deployer;

add('clear_paths', [
    '.env.dist',
    'assets',
    'README.md',
]);

task('deploy:writable')->disable();