<?php

function searchClient(string $clientName, array $clients): ?array {
    foreach ($clients as $client) {
        if ($client['name'] === $clientName) {
            return $client;
        } elseif (isset($client['sub_clients'])) {
            $result = searchClient($clientName, $client['sub_clients']);
            if ($result) {
                return $result;
            }
        }
    }
    return null;
}

$clients = [
    ['name' => 'Client A', 'sub_clients' => [['name' => 'Sub-client A1'], ['name' => 'Sub-client A2']]],
    ['name' => 'Client B', 'sub_clients' => [['name' => 'Sub-client B1']]],
];

print_r(searchClient('Sub-client A1', $clients));

