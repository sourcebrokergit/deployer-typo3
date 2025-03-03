<?php

namespace Deployer;

add('clear_paths', ['assets']);

task('deploy:writable')->disable();