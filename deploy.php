<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/HussainBarakat/deployaction.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('168.119.230.177')
    ->set('remote_user', 'root')
    ->set('deploy_path', '~/deploylaravel');

// Hooks

after('deploy:failed', 'deploy:unlock');
