<?php

namespace Deployer;

// No cache:flush for pages only in TYPO3 10
task('typo3:cache:flush:pages', function () {
    run('cd {{release_or_current_path}} && {{bin/php}} {{bin/typo3}} cache:flush');
});