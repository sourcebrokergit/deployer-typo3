<?php

namespace Deployer;

// No cache:warmup yet in TYPO3 10
task('typo3:cache:warmup:system')->disable();
