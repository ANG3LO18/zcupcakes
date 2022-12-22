window.onload = () => {
    if(!sessionStorage.user){
        location.replace('/login');
    }
}

const placeOrderBtn = document.querySelector('.place-order-btn');
placeOrderBtn.addEventListener('click', () => {
    let address = getAddress();

    if(address){
        fetch('/order', {
            method: 'post',
            headers: new Headers ({'Content-Type': 'application/json'}),
            body: JSON.stringify({
                order: JSON.parse(localStorage.cart),
                email: JSON.parse(localStorage.user).email,
                add: JSON.parse(localStorage.user).email,
            })
        }).then(res => res.json())
        .then(data => {
            alert(data);
        })
    }
})

const getAddress = () => {
    //validation
    let address = document.querySelector('#address').value;
    let street = document.querySelector('#street').value;
    let city = document.querySelector('#city').value;
    let state = document.querySelector('#state').value;
    let zipcode = document.querySelector('#zipcode').value;
    let landmark = document.querySelector('#landmark').value;

    if(!address.length || !street.length || !city.length || !state.length || !zipcode.length || !landmark.length){
        return showAlert('fill all the inputs first');
    } else{
        return { address, street, city, state, zipcode, landmark };
    }
}