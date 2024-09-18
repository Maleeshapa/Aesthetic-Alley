// Function to add item to cart
function addToCart(itemId, itemName, itemPrice) {
    let cart = JSON.parse(sessionStorage.getItem('cart')) || [];
    cart.push({ id: itemId, name: itemName, price: itemPrice });
    sessionStorage.setItem('cart', JSON.stringify(cart));
    updateCart();
}

// Function to remove item from cart
function removeFromCart(itemId) {
    let cart = JSON.parse(sessionStorage.getItem('cart')) || [];
    cart = cart.filter(item => item.id !== itemId);
    sessionStorage.setItem('cart', JSON.stringify(cart));
    updateCart();
}

// Function to update cart
function updateCart() {
    let cart = JSON.parse(sessionStorage.getItem('cart')) || [];
    let cartItemsList = document.getElementById('cartItems');
    let totalPrice = 0;
    cartItemsList.innerHTML = ''; // Clear the cart items list
    cart.forEach(item => {
        let itemName = item.name;
        let itemPrice = item.price;
        totalPrice += itemPrice;
        // Append each cart item to the cartItemsList
        cartItemsList.innerHTML += `<li class="list-group-item d-flex justify-content-between lh-condensed">
                                        <div>
                                            <h6 class="my-0">${itemName}</h6>
                                        </div>
                                        <span class="text-muted">Rs.${itemPrice}</span>
                                        <button class='btn btn-danger ml-2' onclick="removeFromCart('${item.id}')">-</button>
                                    </li>`;
    });
    // Append the total price line at the end
    cartItemsList.innerHTML += `<li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Total:</h6>
                                    </div>
                                    <span class="text-muted">Rs.${totalPrice}</span>
                                </li>`;
}

// Function to handle checkout
function checkout() {
    let cart = JSON.parse(sessionStorage.getItem('cart')) || [];
    let orders = cart.map(item => item.name);
    let ordersString = orders.join(", ");

    // Create the data object to send
    let data = {
        orders: ordersString
    };

    // Send the data to the server using fetch
    fetch('checkout.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(result => {
        console.log('Success:', result);
        // Clear the cart after successful submission
        sessionStorage.removeItem('cart');
        updateCart();
        alert('Order placed successfully!');
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while placing the order.');
    });
}

// Initialize cart
updateCart();
