function searchClient(clientName, clients) {
    for (const client of clients) {
        if (client.name === clientName) {
            return client;
        } else if (client.sub_clients && Array.isArray(client.sub_clients)) {
            const result = searchClient(clientName, client.sub_clients);
            if (result) {
                return result;
            }
        }
    }
    return null;
}

const clients = [
    { name: 'Client A', sub_clients: [{ name: 'Sub-client A1' }, { name: 'Sub-client A2' }] },
    { name: 'Client B', sub_clients: [{ name: 'Sub-client B1' }] },
];

console.log(searchClient('Sub-client A1', clients));
