<?php
$admin_options_defs=array();
$admin_options_defs['Administration']['SuperSweetAdmin']=array(
        'Administration',
        'LBL_SUPERSWEETADMIN_ENTRY_TITLE',
        'LBL_SUPERSWEETADMIN_DESC',
        'javascript:var supersweetadmin = window.open("./index.php?module=Administration&entryPoint=SuperSweetAdmin",
            "newwin",
            "width=500,height=500,toolbar=1,resizable=1,scrollbars=1");'
);
$admin_options_defs['Administration']['phpinfo']=array(
        'Administration',
        'LBL_PHPINFO_ENTRY_TITLE',
        'LBL_PHPINFO_DESC',
        'javascript:var supersweetadmin = window.open("./index.php?module=Administration&entryPoint=SuperSweetAdmin&phpinfo=1",
            "newwin",
            "width=500,height=500,toolbar=1,resizable=1,scrollbars=1");'
);
$admin_group_header[]=array(
    'LBL_SUPERSWEETADMIN_TITLE',
    '',
    false,
    $admin_options_defs
);
?>