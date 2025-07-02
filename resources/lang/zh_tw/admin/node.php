<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => '提供的 FQDN 或 IP 位址無法解析為有效的 IP 位址。',
        'fqdn_required_for_ssl' => '需要一個能解析為公共 IP 位址的完整網域名稱才能為此節點使用 SSL。',
    ],
    'notices' => [
        'allocations_added' => '已成功將分配新增到此節點。',
        'node_deleted' => '節點已成功從面板中移除。',
        'location_required' => '您必須至少設定一個位置才能將節點新增到此面板。',
        'node_created' => '已成功建立新節點。您可以透過造訪「組態」選項卡自動在此機器上組態守護進程。<strong>在新增任何伺服器之前，您必須先分配至少一個 IP 位址和埠。</strong>',
        'node_updated' => '節點資訊已更新。如果任何守護進程設定已更改，您需要重新啟動它才能使這些更改生效。',
        'unallocated_deleted' => '已刪除 <code>:ip</code> 的所有未分配埠。',
    ],
];
