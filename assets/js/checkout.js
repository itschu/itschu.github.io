const cartNumber = document.querySelector('.badge');
const last_price = document.querySelector('.last_price');
const cartSpace = document.querySelector('.insert-cart');

(function (){
    cartNumber.innerText = localStorage.getItem("cartNum");
    let storeItem = JSON.parse(localStorage.getItem("allItems"));
    let n = 0;
    storeItem.forEach(element => {
        n += parseFloat(element.price) * element.quantity
        let mock = `
            <li class="pad list-group-item d-flex justify-content-between lh-sm">
                <div>
                    <h6 class="my-0 itm">${element.name}</h6>
                    <small class="text-muted qty">Quantity : ${element.quantity}</small>
                </div>
                <span class="text-muted pri">$${(parseFloat(element.price) * element.quantity).toFixed(2)}</span>
            </li>
        `;
        cartSpace.insertAdjacentHTML('beforebegin', mock);
    });
last_price.innerText = `₦${(n+50).toFixed(2)}`
})()