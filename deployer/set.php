<?php

namespace Deployer;

// We use the "bin/composer" from "sourcebroker/deployer-extended/includes/settings/bin_composer.php"
set('composer_channel', '2');

// We store the frontend in "assets" folder.
add('clear_paths', [
    '.env.dist',
    'assets',
    'README.md',
]);

# Deployer standard is 300. This can be too little for db:media tasks.
set('default_timeout', 900);

# Deployer standard is 10 releases. This is too many for us.
set('keep_releases', 5);

# For most hosters we use, the ssh username is the same as httpd user.
set('writable_mode', 'skip');

# Set the branch you want to deploy explicitly by setting `->set("branch", "main");` or by adding cli param `--branch=`
# If branch is not set the task "deploy:check_branch_local" will stop deploy.
set('branch', function () {
    return null;
});

// Do not allow dangerous media sync to top instances.
// Look https://github.com/sourcebroker/deployer-extended-media for docs
set('media_allow_push_live', false);
set('media_allow_copy_live', false);
set('media_allow_link_live', false);
set('media_allow_pull_live', false);

// Do not allow dangerous database sync to top instances.
// Look https://github.com/sourcebroker/deployer-extended-database for docs
set('db_allow_push_live', false);
set('db_allow_pull_live', false);
set('db_allow_copy_live', false);

// Set database backup rotations
set('db_dumpclean_keep', ['*' => 5, 'live' => 10,]);
