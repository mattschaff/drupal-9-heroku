<?php

$settings['s3fs.access_key'] = getenv('S3_ACCESS_KEY');
$settings['s3fs.secret_key'] = getenv('S3_SECRET_KEY');
$config['s3fs.settings']['bucket'] = getenv('S3_BUCKET');
$config['s3fs.settings']['region'] = getenv('S3_REGION');
$config['s3fs.settings']['public_folder'] = 'public';
$config['s3fs.settings']['private_folder'] = 'private';
$config['s3fs.settings']['use_https'] = TRUE;
$settings['s3fs.use_s3_for_private'] = TRUE;
$settings['s3fs.use_s3_for_public'] = TRUE;
$settings['s3fs.upload_as_private'] = TRUE;

