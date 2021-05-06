
/*
=============
Product Details Left
=============
 */

class Item {
    constructor(name, price, quantity, url, id){
        this.name = name;
        this.price = price;
        this.quantity = quantity;
        this.url = url;
        this.id = id;
    }
} 

const lisFoods = { 

    fBeef : `../assets/images/pp.png`,
    fChicken : `../assets/images/prod4.png`,
    fFish : `../assets/images/prod2.png`,
    mFFoods : `../assets/images/pp.png`,
    vegTomato : `../assets/images/grid_3.jpg`,
    vegPepper : `../assets/images/grid_3.jpg`,
    vegLeaves : `../assets/images/pp.png`,
    vegOther : `../assets/images/pp.png`,
    grainRice : `../assets/images/prod3.png`,
    grainGarri : `../assets/images/grid_1.jpg`,
    grainBbean : `../assets/images/prod1.png`,

}

const pic1 = document.getElementById("pic1");
const pic2 = document.getElementById("pic2");
const pic3 = document.getElementById("pic3");
const pic4 = document.getElementById("pic4");
const pic5 = document.getElementById("pic5");
const subTotal = document.getElementById("sub-total");
const changePic = document.getElementById("list-display-pic");
const picContainer = document.querySelector(".product__pictures");
const zoom = document.getElementById("zoom");
const pic = document.getElementById("pic");
const cart = document.querySelector(".cart-items");
const navList = document.querySelector(".content");
const addToCartButton = document.querySelector(".add");
const priceOfItem = document.querySelector(".item_price");
const products = document.getElementsByClassName("product");
const picProds = document.getElementsByClassName("picture");
const defaultSrc = changePic.src;
let input = document.querySelector(".counter-btn");
let storage = 0; 
let cartArray = []; 
let thisItem = '';
let dontAdd = false;
let localStore = localStorage.getItem('allItems');
// Picture List 

const picList = [pic1, pic2, pic3, pic4, pic5];

// Active Picture
let picActive = 1; 

["mouseover", "touchstart"].forEach(event => {
    if (picContainer) {
        picContainer.addEventListener(event, e => {
            const target = e.target.closest("img");
            if (!target) return;
            const id = target.id.slice(3);
            const src = target.src
            changeImage(`${src}`, id);
        }, {passive : true});
    }

    if(navList){
        navList.addEventListener(event, e => {
            let listTarget = e.target.closest('li');
            let theID = listTarget.id;
            lisFoods[theID] ? changePic.src = lisFoods[theID] : changePic.src = defaultSrc;
        }, {passive : true});
    }
});

// change active image
const changeImage = (imgSrc, n) => {
  // change the main image
  pic.src = imgSrc;
  // change the background-image
  zoom.style.backgroundImage = `url(${imgSrc})`;
  //   remove the border from the previous active side image
  picList[picActive - 1].classList.remove("img-active");
  // add to the active image
  picList[n - 1].classList.add("img-active");
  //   update the active side picture
  picActive = n;
};

/*

/*
=============
Product Details Bottom
=============
 */

const btns = document.querySelectorAll(".detail-btn");
const detail = document.querySelector(".product-detail__bottom");
const contents = document.querySelectorAll(".content");


if (detail) {
    detail.addEventListener("click", e => {
    const target = e.target.closest(".detail-btn");
    if (!target) return;

    const id = target.dataset.id;
    if (id) {
      Array.from(btns).forEach(btn => {
        // remove active from all btn
        btn.classList.remove("active");
        e.target.closest(".detail-btn").classList.add("active");
      });
      // hide other active
      Array.from(contents).forEach(content => {
        content.classList.remove("active");
      });
      const element = document.getElementById(id);
      element.classList.add("active");
    }
  });
}

(function(){
    //localStorage.clear()
    //setting the cart 
    if(localStorage.getItem('cartNum')){
        storage = localStorage.getItem('cartNum');
    }
    cart.innerText = storage;

    if(!localStorage.getItem('allItems')){
        localStorage.setItem('allItems', cartArray);
    }

    if(!localStorage.getItem('userId')){
        localStorage.setItem('userId', 0);
    }

    const plus = document.querySelector(".plus-btn");
    const minus = document.querySelector(".minus-btn");

    if(plus || minus){
        const callFUnc = e => {
            let inputVal =  parseInt(input.value);
            let condition, newVal;
            if(e === 'max'){
                condition =  inputVal < parseInt(input[e]);
                newVal = inputVal + 1;
            }else{
                condition =  inputVal > parseInt(input[e]);
                newVal = inputVal - 1;
            }
            if(condition){
                newPrice(e);
                input.value = newVal;
            }
        };
        
        plus.addEventListener('click', () => { callFUnc('max'); });
        minus.addEventListener('click', () => { callFUnc('min'); });
    };
    

})();

const discount = () => {   
    if(products){ 
        Array.from(products).forEach((singleProduct)=>{

            ["click"].forEach((e)=>{
                singleProduct.addEventListener(e, (event)=>{
                    addToCart(event, singleProduct);
                }, {active : true});
            });

            const dicountTag = singleProduct.children[0].children[0].children[0];
            const oldPrice = parseInt(singleProduct.children[1].children[2].children[1].value);
            const newPrice = parseInt(singleProduct.children[1].children[2].children[2].value);

            if(oldPrice > newPrice){
                const percent = ((oldPrice-newPrice) * 100) / oldPrice;
                dicountTag.innerHTML = "-"+Math.round(percent)+"%";
            }else{
                dicountTag.style.display = "none";
            }
        });
    }
};

discount();

const newPrice = (logic) => {
    if(priceOfItem){
        if(logic === 'max'){
            let newPriceVal = parseFloat(priceOfItem.value) + parseFloat(subTotal.innerText)
            subTotal.innerText = newPriceVal.toFixed(2);
        }

        if(logic === 'min'){
            let newPriceVal = parseFloat(subTotal.innerText) - parseFloat(priceOfItem.value);
            subTotal.innerText = newPriceVal.toFixed(2);
        }
    }
};

const addToCart = (e, el, amount=1) => {
    if(e.target.closest(".addNow")){
        e.preventDefault();
        let prodId = el.children[1].children[1].innerText;
        let prodPrice = el.children[1].children[2].children[2].value;
        let url = el.children[0].children[0].children[1].attributes[0].nodeValue;
        thisItem = new Item(prodId, prodPrice, amount, url, el.children[2].value);
        setValues();
    }
}

const addToCart2 = () =>{
    e.preventDefault()
}

const setValues = () =>{
    if(localStorage.getItem('cartNum')){
        storage = parseInt(localStorage.getItem('cartNum'));

        //getting data from local storage
        cartArray = JSON.parse(localStorage.getItem('allItems'))

        cartArray.forEach( i => {
            if(thisItem.id == i.id){
                //thisItem.id += 1;
                dontAdd = true;
            }
        });

        if(dontAdd){
            dontAdd = false;
            cartArray = cartArray.map( i => {
                if(thisItem.id == i.id){
                    i.quantity += parseInt(thisItem.quantity);
                }
                return i;
            });
            showMessage('Item quantity has been updated in cart successfully!');
        }else{
            storage += 1;
            localStorage.setItem('cartNum', storage);
            cart.innerText = storage;
            cartArray.push(thisItem);
            showMessage('Item has been added to cart successfully!');

        }
        dontAdd = false;

    }else{
        localStorage.setItem('cartNum', 1);
        cart.innerText = 1;
        cartArray.push(thisItem);
        showMessage('Item has been added to cart successfully!');
    }

    //updating local storage
    localStorage.setItem('allItems', JSON.stringify(cartArray));
}

if(addToCartButton){
    addToCartButton.addEventListener("click", e => {
        e.preventDefault();
        const title = document.querySelector('#product-title').innerText;
        const priceItem = document.querySelector('.item_price').value;
        const quantityofItem = document.querySelector('.counter-btn').value;
        const getId = document.querySelector('.prod-id').value;

        thisItem = new Item(title, priceItem, parseInt(quantityofItem), pic.attributes[0].nodeValue, getId);

        setValues();
    });
};

const showCartItemOnUI = () =>{
    if(localStore){
       let allData = JSON.parse(localStore);
       const cartContainer = document.querySelector('.cart');
        let newMockUp;
       let totalPrice = 0; 
        cartContainer.innerHTML = `
            <table class="cart-table">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>

            </table>

            <div class="total-price">
                <table>
                    <tr>
                    <td>Subtotal</td>
                    <td class="sub-price"></td>
                    </tr>
                    <tr>
                    <td>Tax</td>
                    <td>₦50</td>
                    </tr>
                    <tr>
                    <td>Total</td>
                    <td class="final-price"> </td>
                    </tr>
                </table>
                <a href="moveToCart.php" class="checkout btn">Proceed To Checkout</a>
            </div>
        `;
        const tableContainer = document.querySelector('.cart-table');
        const finPrice = document.querySelector('.final-price');
        const subPrice = document.querySelector('.sub-price');
        let subPrices = [];
        allData.forEach(el => {
            const thisTotal = (parseFloat(el.price) * parseInt(el.quantity));
            totalPrice += parseFloat(thisTotal);
            newMockUp = `
                    <tr >
                        <td>
                        <div class="cart-info">
                            <img src="${el.url}" alt="" />
                            <div>
                            <p>${el.name}</p>
                            <span>Price: ₦${el.price}</span>
                            <br />
                            <a href="#" class="removeItem" id="${el.id}">remove</a>
                            </div>
                        </div>
                        </td>
                        <td><input type="number" value="${el.quantity}" min="1" class="adjust-quantity"/></td>
                        <td class="this-price">₦${thisTotal.toFixed(2)}</td>
                    </tr>
            `
            tableContainer.insertAdjacentHTML("beforeend", newMockUp);
            subPrices.push(thisTotal);
        });

        subPrice.innerText = "₦"+subPrices.reduce(reducer, 0).toFixed(2);
        finPrice.innerText = "₦"+(subPrices.reduce(reducer, 0) + 50).toFixed(2);
        const removeBtn = document.querySelectorAll('.removeItem');
        const chngQty = document.querySelectorAll('.adjust-quantity');

        Array.from(removeBtn).forEach( i => {
            i.addEventListener('click',(ev)=>{
                ev.preventDefault();
                removeFromCart(ev.target);
            });
        });

        Array.from(chngQty).forEach( i => {
            i.addEventListener('change',(ev)=>{
                const priceNode = i.parentNode.parentNode.children[2];
                const priceNowNode = i.parentNode.parentNode.children[0].children[0].children[1].children[1];
                if(i.value){
                    changeQuantity(i.value, priceNode, priceNowNode);
                }
            });
        });

    }
}

const showMessage = (message) => {
    const showMes = document.querySelector('.alertMessage');
    showMes.innerHTML = `
        <div class="alert alert-success" role="alert">
            <span class="closebtn">&times;</span>
            ${message}
        </div>
    `;
    const close = document.getElementsByClassName("closebtn");
    let i;
    
    for (i = 0; i < close.length; i++) {
        close[i].onclick = function(){
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function(){ div.style.display = "none"; }, 600);
        }
    }
    setTimeout(() => {
        const close = document.querySelector('.closebtn');
        close.click();
    }, 1100);
}

const removeFromCart = (d) => {
    const id = d.id;
    let parentEl = d.parentElement.parentElement.parentElement.parentElement;
    parentEl.parentElement.removeChild(parentEl);
    let itemNum = parseInt(localStorage.getItem('cartNum'));
    itemNum -= 1;
    let store = JSON.parse(localStorage.getItem('allItems'));
    let newStore = [];
    store.forEach( (i) => {
        if(id !== i.id){
            newStore.push(i);
        }else{
           calculateSubTotal(i.price, i.quantity)
        }
    });
    showMessage('Item has been removed from cart successfully!');
    localStorage.setItem('allItems', JSON.stringify(newStore));
    localStorage.setItem('cartNum', itemNum);
}

const calculateSubTotal = (amount, quantity, type=true) => {
    
    let multi = amount * quantity;
    
    const chngFinPrice = document.querySelector('.final-price');
    const chngSubPrice = document.querySelector('.sub-price');
    const checkOut = document.querySelector('.checkout');
    let newTot = chngFinPrice.innerText.replace("₦",'');
    let newSub = chngSubPrice.innerText.replace("₦",'');
    
    if(type){
        chngFinPrice.innerText = "₦"+((parseFloat(newTot) - multi).toFixed(2));
        chngSubPrice.innerText = "₦"+((parseFloat(newSub) - multi).toFixed(2));
    }else{
        chngFinPrice.innerText = "₦"+((parseFloat(newTot) + multi).toFixed(2));
        chngSubPrice.innerText = "₦"+((parseFloat(newSub) + multi).toFixed(2));
    }
    let checkOutLimit = parseInt(newSub-multi) ; 
    if(checkOutLimit < 1){
        checkOut.setAttribute("href", "./");
    }
}

const reducer = (accumulator, currentValue) => accumulator + currentValue;

const changeQuantity = (val, nod, thisPrice) => {
    let prevPrice = nod.innerText;
    prevPrice = prevPrice.replace("₦", '');
    prevPrice = parseFloat(prevPrice);

    innerPrice = thisPrice.innerText.replace("Price: ₦",'');
    innerPrice = parseFloat(innerPrice);

    let setToThis = innerPrice * parseFloat(val);
    
    let subPrice = setToThis - prevPrice;

    nod.innerText = setToThis.toFixed(2);
    calculateSubTotal(subPrice,1,false);
}