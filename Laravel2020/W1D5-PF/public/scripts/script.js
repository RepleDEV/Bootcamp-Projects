const productList = document.getElementById("listBarang");

var cart = 0;

const btns = document.getElementsByClassName("btn");
const searchForm = document.getElementById("formItem");

function updateCart() {
    cart++;
    var split = btns[1].innerHTML.split("");
    while(split[split.length-1] != "(")split.pop();
    split.push(cart.toString(),")");
    btns[1].innerHTML = split.join("");
}

var items = [
    {productName:"Genius Mouse",productDesc:"Great mouse for its price!",productPrice:"92,000"},
    {productName:"Generic Mouse",productDesc:"The Generic Mouse is great for everyone!",productPrice:"79,000"},
    {productName:"Generic Keyboard",productDesc:"The Generic Keyboard is also great for everyone!",productPrice:"220,000"},
    {productName:"Gaming Keyboard",productDesc:"The Gaming Keyboard will definitely help all of your battles!",productPrice:"1,259,000"},
];

function updateProductPage(i,name,desc,price){
    productList.innerHTML += `
        <div class="card" style="width: 18rem;">
        <img src="public/img/product-img${i+1}.jpg" class="card-img-top" alt="productImg${i+1}">
        <div class="card-body">
            <h5 class="card-title" id="itemName">${name}</h5>
            <p class="card-text" id="itemDesc">${desc}</p>
            <p class="card-text">Rp ${price}</p>
            <a href="#" class="btn btn-primary" id="addCart">Tambahkan ke keranjang</a>
        </div>
        </div>`;
}

for(var i = 0;i < items.length;i++){
var {productName,productDesc,productPrice} = items[i];
updateProductPage(i,productName,productDesc,productPrice);
}
for(var i = 2;i<btns.length;i++){
    btns[i].addEventListener("click",updateCart)
}

searchForm.onsubmit = () => {
    let keyword = document.getElementById("keyword").value;
    productList.innerHTML = '';
    for(var i = 0;i < items.length;i++){
        var {productName,productDesc,productPrice} = items[i];
        if (productName.indexOf(keyword)<0)continue;
        updateProductPage(i,productName,productDesc,productPrice);
    }
}