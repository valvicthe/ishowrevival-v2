<?php
header('Content-Type: application/json');

$data = [
    [ 'title' => 'Account Info', 'url' => 'https://ishowrevival.up.railway.app/my/account#!/info', 'suffix' => 'info' ],
    [ 'title' => 'Security', 'url' => 'https://ishowrevival.up.railway.app/my/account#!/security', 'suffix' => 'security' ],
    [ 'title' => 'Privacy', 'url' => 'https://ishowrevival.up.railway.app/my/account#!/privacy', 'suffix' => 'privacy' ],
    [ 'title' => 'Billing', 'url' => 'https://ishowrevival.up.railway.app/my/account#!/billing', 'suffix' => 'billing' ],
    [ 'title' => 'Notifications', 'url' => 'https://ishowrevival.up.railway.app/my/account#!/notifications', 'suffix' => 'notifications' ]
];

echo json_encode($data);
?>
