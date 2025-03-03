<?php

namespace Deployer;

add('clear_paths', [
    '.env.dist',
    'assets',
    'README.md',
]);

set('default_timeout', 900);

set('keep_releases', 5);

set('writable_mode', 'skip');