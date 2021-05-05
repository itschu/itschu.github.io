
const pagination = () => {
    const prodContainer = document.querySelector('.product-layout');
    const eachItem = document.querySelectorAll('.product');
    prodContainer.innerHTML = "";
    displayItems(eachItem, prodContainer);
}

const displayItems = (array, container, page=1, resPerPage=10) =>{
    const start = (page-1)* resPerPage;
    const end = page * resPerPage;
    Array.from(array).slice(start, end).forEach((el)=>{
        
        const prodId = el.children[2].value;
        let href = el.children[0].attributes[0].nodeValue;
        const percent = el.children[0].children[0].innerText;
        const thisPrice = el.children[1].children[2].children[2].value;
        const thisTitle = el.children[1].children[1].innerText;
        const thisOldPrice = el.children[1].children[2].children[1].value;
        const imgSrc = el.children[0].children[0].children[1].attributes[0].nodeValue;

        href = href.replace('./productDetails.php?prod=','');
        const mockUp = `
            <div class="product">
                <a href="./productDetails.php?prod=${href}">
                    <div class="img-container">
                         ${(parseInt(thisOldPrice)) ? `<div class="tag _dsct">${percent}</div>` : `<div class="tag _dsct" style="display: none">${percent}</div>` }
                            <img src="${imgSrc}" alt="" />
                        <div class="addCart addNow">
                            <i class="fas fa-shopping-cart addNow"></i>
                        </div>
        
                        <ul class="side-icons">
                            <span><i class="far fa-heart"></i></span>
                            <span><i class="fas fa-sliders-h"></i></span>
                        </ul>
                    </div>

                    <div class="bottom">
                        <a href="">${thisTitle}</a>
                        <div class="price">
                            <span>₦${thisPrice}</span>
                            <input type="hidden" value="${thisOldPrice}" name="old price">
                            <input type="hidden" value="${thisPrice}" name="new price">
                            ${(parseInt(thisOldPrice)) ? `<span class='cancel'> ₦${thisOldPrice} </span>` : ``}
                        </div>
                    </div>
                    <input type='hidden' value="${prodId}" />
                </a>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', mockUp);

    });

    const productRendered = document.getElementsByClassName("product");

    Array.from(productRendered).forEach((singleProduct)=>{
        ["click"].forEach((e)=>{
            singleProduct.addEventListener(e, (event)=>{
                addToCart(event, singleProduct);
            }, {active : true});
        });
    });

}


pagination();