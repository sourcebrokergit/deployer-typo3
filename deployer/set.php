<?php

namespace Deployer;

set('composer_channel', '2');

add('clear_paths', [
    '.env.dist',
    'assets',
    'README.md',
]);

# Deployer standard is 300. This can be too little for db:media tasks.
set('default_timeout', 900);

# Deployer standard is 10 releases.
set('keep_releases', 5);

# For most hosters we use the ssh username is the same as httpd user.
set('writable_mode', 'skip');

# Set the branch you want to deploy explicitly by setting `->set("branch", "main");` or by adding cli param `--branch=`
# If branch is not set the task "deploy:check_branch_local" will stop deploy.
set('branch', function () {
    return null;
});