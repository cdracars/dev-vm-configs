$aliases['localdev'] = array(
  'parent' => '@defaults.localdev',
  'root' => '/var/www/drupal/',
  'uri' => 'dev.usao.edu',
  'path-aliases' => array (
    '%dump' => '/tmp/dump-usao.sql',
    '%files' => 'files',
  ),
);

$aliases['test'] = array (
  'root' => '/var/www/drupal',
  'remote-host' => 'test.usao.worxco.net',
  'remote-user' => 'cdracars',
  'uri' => 'test.usao.edu',
  'path-aliases' => array(
    '%dump' => '/tmp/dump-usao.sql',
    '%files' => 'files',
  ),
);

$aliases['test'] = array (
  'root' => '/var/www/drupal',
  'remote-host' => '65.64.85.221',
  'remote-user' => 'cdracars',
  'uri' => 'usao.edu',
  'path-aliases' => array(
    '%dump' => '/tmp/dump-usao.sql',
    '%files' => 'files',
    ),
);
