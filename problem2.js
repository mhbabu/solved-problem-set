
function authenticate(username, password, users) {
    if (users[username] && users[username] === password) {
        return true;
    }
    return false;
}

let users = {
    'john_doe': 'password123',
    'jane_smith': 'securepass'
};

console.log(authenticate('john_doe', 'password123', users));
