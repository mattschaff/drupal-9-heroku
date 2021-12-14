<?php

if (PHP_SAPI !== 'cli' && $_SERVER['HTTP_X_FORWARDED_PROTO'] !== 'https') {
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
  exit();
}