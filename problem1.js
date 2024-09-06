
function totalQuantity(productName, products) {
    for (let product of products) {
        if (product.product_name.toLowercase() === productName.toLowercase()) {
            return product.quantity;
        }
    }
    return 0; // Product not found
}


function addStock(productName, quantity, products) {
    for (let product of products) {
        if (product.product_name.toLowercase() === productName.toLowercase()) {
            product.quantity += quantity;
            return;
        }
    }
    // If product doesn't exist, add a new one
    products.push({ product_name: productName, quantity: quantity });
}

let products = [
    { product_name: 'Apple', quantity: 50 },
    { product_name: 'Banana', quantity: 30 }
];

console.log(totalQuantity('Apple', products));
addStock('Orange', 20, products);
addStock('Apple', 10, products);
console.log(products);
