
/*
=============
Product Details Left
=============
 */
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
const navList = document.querySelector(".content");
const priceOfItem = document.querySelector(".item_price");
const products = document.getElementsByClassName("product");
const picProds = document.getElementsByClassName("picture");
const defaultSrc = changePic.src;
let input = document.querySelector(".counter-btn");

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