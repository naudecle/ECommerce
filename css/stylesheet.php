<style>
    :root{
    --primaryColor: #f1f1f1;
    --yellow: #ffcc00;
    --black: #222;
    --grey: #666;
    --black1: #000;
    --SecondaryColor: #2b1f4d;
    --bleu: #0ff;
    --red: #f00;

    }


    *,*::before, ::after
    {
    box-sizing: inherit;
    margin: 0;
    padding: 0;
    }
    html{
        font-size: 62.5%;
        box-sizing: border-box;
    }

    body,
    input{
        font-size: 1.6cm;
        font-weight: 400;
        font-family: 'Archivo', sans-serif;
        color: var(--black);
        top:0%;
    }
    span,p{
        
            font-size: .6cm;
            font-weight: 400;
            font-family: 'Archivo', sans-serif;
            color: var(--black);
        
    }
    a{
        text-decoration: none;
    }

    ul{
        list-style: none;
    }
    img{
        max-width: 100%;
        
    }
    h3,h4{
        font-weight: 500;
    }

    /*
    ======DEBUT DU CSS DU HEADER=====
    */
    .header{
        position: relative;
        background-color: var(--yellow);
    }
    .container{
        width: 100%;
        max-width: 117rem;
        margin: 0 auto;
        padding: 0 1.6rem;
    }

    /*
    =====NAVIGATION=====
    */

    .navigation{
        position: relative;
        height: 7rem;
        box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
    }
    .nav{
        display:flex;
        align-items: center;
        justify-content: space-between;
        height: 7rem;
        width: 100%;
        padding: 0 1rem;
    }
    .nav_logo{
        display: flex;
    }
    .nav_logo a{
        display: flex;
        font-size: 2.5rem;
        color: var(--black);
        padding-right: 1.6rem;
        font-weight: 700;
        
    }
    .nav_logo img{
        width: 30px;
    }


    li.dropdown{
        margin-right: 2.5rem;
    
    }

    .dropdown_content{
        display: none;
        position: absolute;
        background-color: var(--primaryColor);
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        
    
    }
    .dropdown_content a{
        font-size: .4cm;
        font-weight: 400;
        font-family: 'Archivo', sans-serif;
        text-decoration: none;
        display: block;
        padding: 12px 16px;
    }

    .dropdown:hover .dropdown_content{
        display: inline-block;
        
    }



    .dropdown_content a:hover {
        background-color: var(--yellow);
    
    }


    .nav_list{
        display: flex;
        align-items: center;
        height: 100%;
        width: 50%;
        
    }
    .nav_item:not(:last-child){
        margin-right: 1.6rem;
    }
    .nav_list .nav_link:link,
    .nav_list .nav_link :visited{
        display: flex;
        font-size: 1.5rem;
        text-transform: uppercase;
        color: var(--black);
        transition: color .3s ease-in-out;

    }
    .nav_list .nav_link:hover{
        color: var(--bleu);
    }

    .nav_icons{
        display: flex;
        position: relative;
    }

    .nav_icons .icon_item svg{
        width: 1.6rem;
        height: 1.6rem;
    }
    .nav_icons .icon_item{
        display:flex;
        justify-content: center;
        align-items: center;
        padding: .7rem;
        border: 1px solid var(--black);
        border-radius: 53%;
        transition: color .3s ease-in-out;
        
    }
    
    button.icon_item
    {
        background: none;
        cursor: pointer;
    }
    .nav_icons .icon_item:link,
    .nav_icons .icon_item:visited{
        color: var(--yellow);
    }
    .nav_icons .icon_item:hover{
        background-color: var(--red);
        border: 1px solid var(--black);
    }

    .nav_icons .icon_item:hover .dropdown_content{
        display: inline-block;
        top: 100%;
    }
    .nav_icons .icon_item:not(:last-child){
        margin-right: 1.6rem;
    }
    .nav_icons #cart_total{
        font-size: 1rem;
        position: absolute;
        top: 2px;
        right: -6px;
        background-color: coral;
        padding: .2rem .4rem;
        border-radius: 100%;
        color: var(--primaryColor);
    }
    .nav_icons #cart-item{
        font-size: 1rem;
        position: absolute;
        top: 2px;
        right: -6px;
        background-color: coral;
        padding: .2rem .4rem;
        border-radius: 100%;
        color: var(--primaryColor);
    }
    .dropdown-item{
        display: none;
    }


    /*
    ===Navigation Media===
    */

    @media only screen and (max-width: 768px) {


        .nav_logo {
            width: 50%;
        }
    
        .nav_list {
            flex-direction: column;
            align-items: start;
            padding: 1.6rem 1rem;
        }
        .nav_item:not(:last-child) {
            margin-right: 0;
        }
        .nav_item {
            width: 100%;
        }
        .nav_list .nav_link:link,
        .nav_list .nav_link:visited {
            padding: 1.6rem 0;
            width: 100%;
            color: grey;
        }
        body.active::before {
            content: "";
            position :fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 110%;
            background: var(--black) none no-repeat 0 0;
            opacity: .7;
            z-index: 999;
            transition: .8s;

        }
    }
    @media only screen and (max-width: 568px) {

        .nav_icons .icon_item svg{
            width: 1.4rem;
            height: 1.4rem;
        }
        .nav_icons .icon_item{
            padding: 0.4rem;
        }
        
    }

    /*
    ======Slide CSS=====
    */

    .slide_area, 
    .slide_area .glide__slides{
        background-color: #fff;
        position: relative;
        width: 100%;
        height: 100vh;
    
    }
    .slide_area .glide__bullet{
        background-color: var(--black);
        width: 1.2rem;
        height: 1.2rem;
    }

    .slide_area .glide__arrow{
        padding: 1.5rem 1.7rem;
        opacity: 0;
        border: none;
        background-color: var(--grey);
        transition: all .5s ease-in-out .2s;
    }
    .glide__arrow:hover{
        background-color: var(--black);
    }
    .glide__arrow--left{
        left: 20rem;
    }
    .glide__arrow--right{
        position: absolute;
        right: 20rem;
    }

    .slide_area:hover .glide__arrow{
        opacity: 1;
    }
    .slide_area:hover .glide__arrow--left{
        left: 23rem;
    }
    .slide_area:hover .glide__arrow--right{
        right: 23rem;
    }
    .slide_area .glide__arrow svg{
        height: 1.8rem;
        width: 1.8rem;
        fill: var(--primaryColor);
    }
    .slide_area .glide__arrow{
        border-radius: 50%;
    }
    .slide_center{
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        max-width: 114rem;
        margin: 0 auto;
        height: 100%;
        padding-top: 3rem;
    }
    .slide_left{
        padding: 0 3rem;
        flex: 0 0 50%;
    }
    .slide_btn{
        display: inline-block;
        font-weight: 700;
        font-size: 1.4rem;
        background-color: black;
        color: var(--primaryColor);
        cursor: pointer;
        margin-top: 1rem;
        padding: 1.5rem 4rem;
        border: 1px solid var(--black1);
        transition: all 0.3s ease-in-out;
    }
    .slide_btn:focus{
        outline: none;
    }
    .slide_left .slide_btn:hover{
        font-weight: 700;
        background-color: transparent;
        color: var(--black1);
    }
    .slide_left h1 {
        margin: 1rem 0;
        font-size: 2.5rem;
    }
    .slide_left p {
        margin-bottom: 1rem;
    }
    .slide_right{
        flex: 0 0 50%;
        position: relative;
        text-align: center;
    }
    .slide_right img.banner_2{
        width: 50%;
    }

    /*==SLIDE media*/
    @media only screen and (max-width: 999px) {
        .slide_center{
            flex-direction: column;
            
            text-align: center;
        }
        .slide_right{
            top: 45%;
            position: absolute;
        
        }
        .slide_left{
            position: absolute;
            padding: 0 1rem;
            top: 5%;
        }
        .slide_right img{
            width: 55%;
        }
        .slide_btn{
            padding: 1.1rem 2.8rem;
        }
        .slide_area .glide__arrows{
            display: none;
        }
        .slide_area .glide__bullet{
            width: 1.2rem;
            height: 1.2rem;
            top: 10%;
            position:initial;
        
        }
        
    }
    /*
    ======FIN DU CSS DU HEADER=====
    */


    /*
    =====DEBUT DU CSS DE MAIN====
    */

    /*
    ===DEBUT PROMOTION===
    */
    section{
        padding: 10rem 0 5rem 0; 
        
    }
    section .title_prom{
        text-align: center;
        margin-bottom: 5rem;
        background-image: url('<?php echo 'css/back.jpg'; ?>');
        background-size: auto;
        
    
        
    }
    .title_prom h2{
        font-size: 8rem;
        font-weight: 300;
        margin-bottom: .5rem;
    }
    .title_prom span{
        color: var(--black);
    }
    .promotion_container{
        display:grid ;
        grid-template-columns: repeat(3, 1fr);
        text-align: center;
        gap: 4rem;
    }
    .promotion_item{
        overflow: hidden;
        position: relative;
        z-index: 0;
    }
    .promotion_item img{
        object-fit: contain;
        height: 50%;
        width: 50%;
        transition: all 500ms ease-in-out;
    }
    .promotion_content{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: var(--primaryColor);
        text-align: center;
        z-index: 3;
    }
    .promotion_content h3{
        background-color: rgba(0, 0, 0, .8);
        border-radius: 5rem;
        padding: 0.7rem 1.4rem;
        font-size: 1.7rem;
        font-weight: inherit;
        margin-bottom: 1 rem;
        transition: all 300ms ease-in-out;
    }
    .promotion_content a{
        transition: all 300ms ease-in-out;
        font-size: 1.4rem;
        font-weight: 700;
    }

    .promotion_content a:hover{
        color:var(--bleu);
    }
    .promotion_item:hover .promotion_content h3{
        background-color: var(--primaryColor);
        color: var(--black);
    }
    .promotion_item:hover img{
        transform: scale(1.1);
    }
    .promotion_item::after{
        content: "";
        position: absolute;
        top: 0;
        left: 10%;
        z-index: 1;
        width: 80%;
        height: 80%;
        background-color: rgba(0, 0, 0, .4);
        opacity: 0;
        visibility: hidden;
        transition: all 500ms ease-in-out;
    }
    .promotion_item:hover::after{
        visibility: visible;
        opacity: 1;
    }
    /*===Promotion mobile===*/
    @media only screen and (max-width: 1200px) {
        .promotion_content h3{
            background-color: rgba(0, 0, 0, .8);
            border-radius: 5rem;
            padding: 0.7rem 1.4rem;
            font-size: 1.6rem;
        }
    }

    @media only screen and (max-width: 996px){
        .promotion_container{
            grid-template-columns: repeat(2,1fr);
        }
        
    }
    @media only screen and (max-width: 768px) {
        .promotion_container{
            grid-template-columns: 1fr;
        }
        
    }
    /*
    ==FIN DE PROMOTION==*/
    /*

    /*
    ===DEBUT LATEST===
    */

    .title_container{
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 6rem;
        padding: 2rem 0;
        background-image: url('<?php echo 'css/back.jpg'; ?>');
        background-size: auto;
    }
    .section_title:not(:last-child){
        margin-right: 1.5rem;
    }
    .section_title{
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        
    }
    .section_title h1{
        font-size: 8rem;
        font-weight: inherit;

    }
    .section_title:hover .primary_title,
    .section_title:hover span.dot,
    .section_title:hover span.dot::before{
        opacity: 1;
    }
    .section_title .primary_title{
        opacity: 0.6;
        padding-left: 0.5rem;
        transition: opacity 0.3s ease-in-out;
    }

    span.dot{
        opacity: .6;
        padding: .45rem;
        position: relative;
        border: 5px solid var(--grey);
        cursor: pointer;
        transition: opacity .3 ease-in-out;
    }
    span.dot::before{
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border: 1px solid var(--grey);
        background-color: var(--grey);
        margin: 1px;
        opacity: .6;
    }
    .section_title.active span.dot::before{
        opacity: 1;
    }
    .section_title.active .primary_title{
        opacity: 1;
    }
    .product {
        position: relative;
        text-align: center;
    }
    .product ul svg{
        width: 1.7rem;
        height: 1.7rem;
        fill: var(--SecondaryColor);
        
    }
    .product ul{
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        top: 35%;
        left: 50%;
        width: 17rem;
        height: 5rem;
        opacity: 0;
        visibility: hidden;
        transform: translate(-50%, -50%) scale(0.7);
        transition: all 0.5 ease-in-out;
        background-color: rgba(153, 136, 136, 0.4);
    
    }
    .product:hover ul {
        opacity: 1;
        visibility: visible;
        transform: translate(-50%, -50%) scale(1);
    }
    .product ul li:not(:last-child){
        margin-right: 1.6rem;
    }
    .product ul a{
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: var(--yellow);
        width: 3.5rem;
        height: 3.5rem;
        cursor: pointer;
        transition: .5s;
        margin-right: .6rem;
    }
    .product ul a:hover{
        background-color: var(--primaryColor);

    }
    .product ul a::before{
        content: "";
        position: absolute;
        top: -.6rem;
        left: -0.6rem;
        height: 0;
        width: 0;
        border-top: 3px solid var(--black);
        border-left: 3px solid var(--black);
        transition: 0.5 ease-in-out;
        opacity: 0;
        z-index: 1;
    }
    .product ul a::after{
        content: "";
        position: absolute;
        bottom: -.6rem;
        right: -.6rem;
        height: 0;
        width: 0;
        border-bottom: 3px solid var(--black);
        border-right: 3px solid var(--black);
        transition: 0.5s ease-in-out;
        opacity: 0;
        z-index: 1;
    }
    .product ul a:hover::before{
        width: 126%;
        height: 126%;
        border-top: 3px solid var(--red);
        border-left: 3px solid var(--red);
        opacity: 1;
    
    }
    .product ul a:hover::after{
        width: 126%;
        height: 126%;
        border-bottom: 3px solid var(--red);
        border-right: 3px solid var(--red);
        opacity: 1;
    
    }
    @media only screen and (max-width:568px) {
        .title_container{
            flex-direction: column;
        }
        .section_title:not(:last-child){
            margin: 0 0 1.3rem;
        }
    }
    .product{
        display: flex;
        flex-direction: column;
        text-align: center;
        width: 25rem;

    }
    .product_header{
        height: 25rem;
        padding: .5rem 0;
        text-align: center;

    }
    .product_header img{
        max-width: 100%;
        max-height: 100%;
    }
    .product_footer{
        padding: 1rem 0;
    }
    .product_footer .product_price{
        padding-bottom: 1rem;
    }
    .product_footer h3{
        padding: 1rem 0;
        font-weight: 700;
        font-size: medium;
    }
    .product_price h4{
        padding: 1rem 0;
        font-weight: 700;
        font-size: medium;
    }
    .rating svg{
        width: 1.6rem;
        height: 1.6rem;
        fill: var(--yellow);
    }
    .product_btn{
        display: inline-block;
        font-weight: 700;
        text-transform: uppercase;
        width: 100%;
        padding: 1.4rem 0;
        border: 1px solid var(--black1);
        color: var(--black);
        cursor: pointer;
        

    }
    .product_btn:focus{
        outline:none;
    }
    .product_btn:hover{
        background-color: var(--black);
        color: var(--primaryColor);
    }

    .section_latest .glide__arrow
    {
        background-color: transparent;
        border: 1px solid var(--primaryColor);
        outline: none;
        border-radius: 0;
        box-shadow: 0 0.25em 0.5em rgba(0, 0, 0, 0);
        top: -7%;
        left: 80%;
    }
    .section_latest .glide__arrow:hover{
        background-color: var(--yellow);
        border: 1px solid var(--primaryColor);

    }
    .section_latest .glide__arrow--left{
        left: 5%;
    }
    .section_latest .glide__arrow--right{
        right: 5%;
    }
    .section_latest .glide__arrow svg{
        width:1.5rem;
        height: 1.5rem;
        fill: var(--grey);
    }
    /*
    ===LATEST MEDIA QUERY===
    */
    @media only screen and (max-width:999px){
        .product_header{
            height: 25rem;
        }
        .product{
            width: 70%;
            margin: 0 auto;
        }
        .section_latest .glide__arrow--left{
            left: 7%;
            
        }
        .section_latest .glide__arrow--right{
            right: 7%;
        }
    }
    @media only screen and (max-width:768px){
        .section_latest .glide__arrow--left{
            left: 70%;
            
        }
    }
    @media only screen and (max-width:568px){
        .product_header{
            height: 20rem;
        }
        .product_header img{
            width: 50%;
        }
        .product_footer h3{
            font-size: 1.4rem;
        }
        .product_btn{
            width: 100%;
            font-size: 1rem;
            padding: .8rem 0;
            border: 1px solid var(--black);
        }
        .product ul a{
            width: 2.7rem;
            height: 2.7rem;
        }
        .product ul{
            top: 25%;
            left: 50%;
            width: 16rem;
            height: 4rem;
        }
        .rating svg{
            width: 1.3rem;
            height: 1.3rem;
        }
        .section_latest .glide__arrow--left{
            left: 66%;
        }
        .section_latest .glide__arrow--right{
            left: 85%;
        }
    }
    @media only screen and (max-width:460px){
        .product_header{
            height: 12rem;
        }
        .product_footer{
            font-size: 1.2rem;
        }
    }
    /*===FIN DU CSS DE LATEST===
    */
    /*
    =====Fin DU CSS DE MAIN====
    */

    /*===DEBUT DU CSS DE CATEGORY===
    */
    .category_section{
        background-color: #fff;
        position: relative;
        width: 100%;
        height: 100vh;
    }
    .section_titles:not(:last-child){
        margin-right: 3rem;
    }

    .section_title_cat{
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        
    }
    .section_titles .section_title_cat h1{
        font-size: 2.2rem;
        font-weight: 550;
        text-transform: uppercase;

    }
    .section_titles .alert-message{
        font-size: 2.2rem;
        font-weight: 550;
        text-transform: uppercase;
        background-color: var(--blue);
        z-index:2;

    }
    .section_title_cat:hover .primary_title,
    .section_title_cat:hover span.dot_cat,
    .section_title_cat:hover span.dot_cat::before{
        opacity: 1;
    }
    .section_title_cat .primary_title{
        opacity: 0.5;
        padding-left: 0.5rem;
        transition: opacity 0.3s ease-in-out;
    }

    span.dot_cat{
        opacity: .6;
        padding: .45rem;
        position: relative;
        border: 2px solid var(--grey);
        cursor: pointer;
        transition: opacity .3 ease-in-out;
    }
    span.dot_cat::before{
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border: 1px solid var(--black);
        background-color: var(--black);
        margin: 1px;
        opacity: .6;
    }
    .section_title_cat.active span.dot_cat::before{
        opacity: 1;
    }
    .section_title_cat.active .primary_title{
        opacity: 1;
    }

    .category_center{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 3rem 2rem;
    }

    /*===CATEGORY Query MEDIA===
    */
    @media only screen and (max-width: 999px){
        .category_center{
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }
        .category_product .product_header{
            height: 10rem;
        }
        .category_product .product_header img{
            object-fit: contain;
        }
    }
    @media only screen and (max-width:568px) {
        .tabs{
            flex-direction: column;
        }
        .section_title_cat:not(:last-child){
            margin: 0 0 1.3rem;
        }
    }


    /*===FIN DU CSS DE CATEGORY===
    */
    /*===DEBUT DU CSS DE POPUP===
    */
    .popup{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background-color: rgba(0, 0, 0, .3);
        z-index: 9999;
        transition: 0.3s;
        
    
    }

    .popup_content{
        position: absolute;
        top: 50%;
        left: 50%;
        width: 75%;
        margin: 0 auto;
        height: 70rem;
        transform: translate(-50%, -50%);
        padding: 1.6rem;
        display: table;
        overflow: hidden;
        background-color: var(--primaryColor);
        border-radius: 1rem;
        
    }


    .popup_close{
        display: inline-flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 1.5rem;
        right: 2rem;
        padding: 1.5rem;
        background-color: var(--primaryColor);
        border-radius: 50%;
        cursor: pointer;
    }
    .popup_close svg{
        width: 1.7rem;
        height: 1.7rem;
    }

    .popup_left{
        display: table;
        width: 50%;
        vertical-align: middle;
        height: 100%;
        
        
    }

    .popup_right{
        display: table-cell;
        width: 50%;
        vertical-align: middle;
        padding: 3rem 5rem;
        
    }
    .left_content{
        text-align: left;
        width: 80%;
        
    }
    .right_content{
        text-align: left;
        width: 50%;
        top:10%;
        
        
    }
    .right_content h1,
    .left_content h1{
        font-size: 3rem;
        color: #000;
        top: 5rem;
    }

    .popup_label{
        font-size: 1.9rem;
        color: #000;
        text-transform: uppercase;
    }
    .popup_form{
        width: 50%;
        text-indent: 1rem;
        background-color: var(--primaryColor);
    }
    .popup_form:focus{
        outline: none;
    }
    input[type="text"]{
        font-size: 2.6rem;
        font-weight: 100;
        color: #000;
        width: 200%;
    }
    input[type="email"]{
        font-size: 2.6rem;
        font-weight: 100;
        color: #000;
        width: 200%;
    }
    input[type="password"]{
        font-size: 2.6rem;
        font-weight: 100;
        color: #000;
        width: 200%;
    }
    input[type="submit"]{
        font-size: 2.5rem;
        color: #000;
        border: 2px solid var(--black);
        text-transform: uppercase;
    }
    input[type="submit"]:hover{
        background-color: var(--yellow);
    }



    .hidden_popup{ 
        transform: scale(0.2);
        opacity: 0;
        visibility: hidden;
    }
    /* =POPUP MEDIA QUERY = */
    @media only screen and (max-width: 1200px) {
        .right_content{
            width: 50%;
        }
    
    }

    @media only screen and (max-width: 999px){
        .popup_right{
            width: 50%;
        }
    }
    @media only screen and (max-width: 768px){
        .popup_form{
            width: 50%;
            margin: 0 auto;
            padding: 1.8rem 0;
            margin-bottom: 1.5rem;
        }

    }
    @media only screen and (max-width: 568px){
        .popup_right{
            padding: 0 1.6rem;
        }
        .right_content{
            width: 50%;
        }
        .popup_content{
            height: 35rem;
            width: 90%;
            margin: 0 auto;
        }
        .right_content p{
            font-size: 1.4rem;
        }
        .popup_form{
            width: 50%;
            padding: 1.5rem 0;
            margin-bottom: 1.3rem;
        }

        .popup_close{
            top: 1rem;
            right: 1rem;
            padding: 1.3rem;
        }
        .popup_close svg{
            width: 1.4rem;
            height: 1.4rem;
        }

    }
    /*
    ===FIN DU CSS DE POPUP===
    */

    /*
    ===DEBUT DU CSS DE GO TOP===
    */
    .go_top:link,
    .go_top:visited{
        position: fixed;
        right: 2%;
        bottom: 10%;
        padding: .8rem 1.4rem;
        border-radius: 4rem;
        visibility: hidden;
        background-color: var(--yellow);
        cursor: pointer;
        transition: 0.3s;
        animation: bounce 2s ease-in-out infinite ;

    }
    @keyframes bounce {
        0%{
            transform: scale(0.5);
        }
        50%{
            transform: scale(1.5);
        }
        0%{
            transform: scale(1);
        }
    }
    .go_top svg{
        width: 4rem;
        height: 4rem;
        fill: white;
        
    }
    .go_top:hover{
        background-color: var(--black);
    }
    .footer {
        background-color: var(--black3);
        padding: 6rem 1rem;
        line-height: 3rem;
    }

    .footer-top__box span svg {
        width: 1.6rem;
        height: 1.6rem;
        fill: var(--grey3);
    }

    .footer-top__box span {
        margin-right: 1rem;
    }

    .footer__top {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        color: var(--grey3);
    }

    .footer-top__box a:link,
    .footer-top__box a:visited {
        display: block;
        color: var(--grey);
        font-size: 1.4rem;
        transition: 0.6s;
    }

    .footer-top__box a:hover {
    color: var(--orange);
    }

    .footer-top__box div {
        color: var(--grey);
        font-size: 1.4rem;
    }

    .footer-top__box h3 {
        font-size: 1.8rem;
        font-weight: 400;
        margin-bottom: 1rem;
    }

    @media only screen and (max-width: 998px) {
        .footer__top {
            grid-template-columns: repeat(2, 1fr);
            row-gap: 2rem;
        }
    }

    @media only screen and (max-width: 768px) {
        .footer__top {
            grid-template-columns: 1fr;
            row-gap: 2rem;
        }
    }
      


</style>
