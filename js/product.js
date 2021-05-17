//Get Products
const getProducts = async()=>{
    try{
        const results = await fetch("./data/product.json");
        const data = await results.json();
        const products = data.products;
        return products;
    }catch(err){
        console.log(err);
    }
};



//Load Products
window.addEventListener("DOMContentLoaded", async()=>{
    const products = await getProducts();
    displayProductItems(products);
});

const categoryCenter = document.querySelector(".category_center")

//Display Product

const displayProductItems= items =>{
    let displayProduct = items.map(product=>`
        <div class="product category_product">
            <div class="product_header">
                <img src=${product.image} alt="">
            </div>
            <div class="product_footer">
                <h3>${product.title}</h3>
                <div class="rating">
                    <svg>
                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                    </svg>
                    <svg>
                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                    </svg>
                    <svg>
                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                    </svg>
                    <svg>
                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                    </svg>
                    <svg>
                        <use xlink:href="./image/sprite.svg#icon-star-empty"></use>
                    </svg>
                </div>
                <div class="product_price">
                    <h4>Rs${product.price}</h4>
                    <a href="#"><button type="button" class="product_btn">
                        Add to cart
                    </button></a>
                </div>
                <ul>   
                    <a href="#" >
                        <svg>
                            <use xlink:href="./image/sprite.svg#icon-eye"></use>
                        </svg>
                    </a>
                    <a href="#" >
                        <svg>
                            <use xlink:href="./image/sprite.svg#icon-heart-o"></use>
                        </svg>
                    </a> 
                    <a href="#" >
                        <svg>
                            <use xlink:href="./image/sprite.svg#icon-loop2"></use>
                        </svg>
                    </a>
                </ul>
            </div>
        </div>
    `);
    displayProduct = displayProduct.join("");
     if(categoryCenter){
        categoryCenter.innerHTML = displayProduct;
     }   
};

//Fitering product

const filterBtn = document.querySelectorAll(".filter_btn");
const categoryContainer = document.getElementById("category");

if(categoryContainer){
    categoryContainer.addEventListener("click", async e=>{
        const target = e.target.closest(".section_title_cat")
        if(!target){
            return ;
        }
        const id = target.dataset.id;
        const products = await getProducts();
        if(id){
            //remove active from buttons
            Array.from(filterBtn).forEach(btn=>
            {
                btn.classList.remove("active");
            })
            target.classList.add("active");

            //Load Products
            let menuCategory = products.filter(product =>{
                if(product.category === id){
                    return product;
                   
                }
            });

            console.log(id);

            if(id === "All Products"){
                displayProductItems(products);
            }
            else{
                displayProductItems(menuCategory);
                
            }
        }
    });

}


