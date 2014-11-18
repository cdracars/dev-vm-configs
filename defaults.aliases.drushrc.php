$aliases['localdev'] = array(
  'target-command-specific' => array(
    'sql-sync' => array(
      'sanitize' => TRUE,
      'confirm-sanitizations' => TRUE,
      'no-ordered-dump' => TRUE,
      'no-cache' => TRUE,
      'enable' => array(
        'devel',
        'stage_file_proxy',
        'ds_ui',
        'fields_ui',
        'views_ui',
      ),
    ),
  ),
);
