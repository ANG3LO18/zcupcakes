let carts = document.querySelectorAll('.add-cart');

let products = [
    {
        name: 'Money Cake 1',
        tag: 'moneycake1',
        price: 2500,
        inCart: 0
    },
    {
        name: 'Money Cake 2',
        tag: 'moneycake2',
        price: 3500,
        inCart: 0
    },
    {
        name: 'Money Cake 3',
        tag: 'moneycake2',
        price: 4500,
        inCart: 0
    },
    {
        name: 'Roblox',
        tag: 'roblox',
        price: 5500,
        inCart: 0
    },
    {
        name: 'Friday Night',
        tag: 'fridaynight',
        price: 2500,
        inCart: 0
    },
    {
        name: 'Avengers',
        tag: 'fridaynight',
        price: 2500,
        inCart: 0
    },
    {
        name: 'Rapunzel',
        tag: 'rapunzel',
        price: 2500,
        inCart: 0
    },
    {
        name: 'Pinoy Fiesta',
        tag: 'pinoyfiesta',
        price: 2500,
        inCart: 0
    },
    {
        name: 'IronMan',
        tag: 'ironman',
        price: 2500,
        inCart: 0
    },
    {
        name: 'Sesame Street',
        tag: 'sesamestreet',
        price: 2500,
        inCart: 0
    },
    {
        name: 'Minimalist',
        tag: 'minimalist',
        price: 2500,
        inCart: 0
    },
    {
        name: 'Dinosaur',
        tag: 'dinosaur',
        price: 2500,
        inCart: 0
    },
    {
        name: 'Naked',
        tag: 'naked',
        price: 2500,
        inCart: 0
    },
    {
        name: 'Blackpink',
        tag: 'blackpink',
        price: 2500,
        inCart: 0
    },
    {
        name: 'Friends',
        tag: 'friends',
        price: 2500,
        inCart: 0
    },
    {
        name: 'Beer',
        tag: 'beer',
        price: 2500,
        inCart: 0
    },
    {
        name: 'Octonauts',
        tag: 'octonauts',
        price: 2500,
        inCart: 0
    },
    {
        name: 'Cocomelon',
        tag: 'cocomelon',
        price: 2500,
        inCart: 0
    },
    {
        name: 'Basketball Theme',
        tag: 'basketballtheme',
        price: 2500,
        inCart: 0
    },
    {
        name: 'Little Mermaid',
        tag: 'littlemermaid',
        price: 2500,
        inCart: 0
    },
    {
        name: 'Grandpa',
        tag: 'grandpa',
        price: 2500,
        inCart: 0
    },
    {
        name: 'Moana Theme',
        tag: 'moanatheme',
        price: 2500,
        inCart: 0
    },
    {
        name: 'Superhero',
        tag: 'superhero',
        price: 2500,
        inCart: 0
    },
    {
        name: 'My Little Pony',
        tag: 'mylittlePony',
        price: 2500,
        inCart: 0
    },
]

for (let  i=0; i < carts.length; i++) {
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i])
    })
}

function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');

    if(productNumbers) {
        document.querySelector('.cart span').textContent = productNumbers;
    }
}

function cartNumbers(products) {

    let productNumbers = localStorage.getItem('cartNumbers');

    productNumbers = parseInt(productNumbers);

    if( productNumbers ) {
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.cart span').textContent = productNumbers + 1;
    }  else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.cart span').textContent = 1;
    }

    setItems(product);
}

function setItems(product) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if(cartItems != null) {

        if(cartItems[product.tag] != undefined) {
            cartItems = {
                ...cartItems,
                [product.tag]: product
            }
        }
        cartItems[product.tag].inCart += 1;
    } else {
        product.inCart = 1;
        cartItems = {
            [product.tag]: product
        }
    }
    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalCost(product) {
    // console.log("The product price is", prodoct.price);
    let cartCost = localStorage.getItem('totalCost');

    console.log("My cartCost is", cartCost);
    console.log(typeof cartCost );

    if(cartCost != null) {
        cartCost = parseInt(cartCost);
        localStorage.setItem("totalCost", cartCost + product.price);
    } else {
        localStorage.setItem("totalCost", product.price);
    }
}

function displayCart() {
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector(".products");
    let cartCost = localStorage.getItem('totalCost');
    
    if(cartItems && productContainer) {
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
            <div class="products">
                <ion-icon name="close-circle-outline"></ion-icon>
                <img src="./images2/${item.tag}.jpg">
                <span>${item.name}M/span
            </div>
            <div class="price">$${item.price},00</div>
            <div class="quantity">
                <ion-icon class"decrease" name="caret-back-circle"></ion-icon>
                <span>${item.incart}</span>
                <ion-icon class"increase" name="caret-forward-circle"></ion-icon>
            </div>
            <div class="total">
                ${item.incart * item.price},00
            </div>
            `
        });

        productContainer.innerHTML += `
            <div class="basketTotalContainer">
                <h4 clss="basketTotalTitle">
                    Cart Total
                </h4>
                <h4 class="">
                    $${cartCost},00
                </h4>
            </div>    
        `

    }
}

onLoadCartNumbers();
displayCart();