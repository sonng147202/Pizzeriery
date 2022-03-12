<template>
<div class="menu">
    <div class="container">
        <div class="row">
            <!-- tab -->
            <ul class="nav nav-pills justify-content-center w-100 menu">
                <li class="nav-item" v-for="cat in dataCats" :key="cat.cat_id">
                    <a :href="'#cat' + cat.cat_id" data-toggle="tab" class="nav-link d-flex justify-content-center flex-column" :class="cat.cat_name">
                        <img :src="cat.cat_img" class="nav-imgs m-0 m-auto" alt="" />
                        <span class="name">
                            {{ cat.cat_name }}
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Nội dung -->
        <div class="tab-content">
            <div 
                class="tab-pane container pt-5" 
                v-for="(cat_products, index) in dataProducts" 
                :key="index" 
                :class="{ 'active': index == 1 }"
                :id="'cat' + index"
            >
                <div class="tab">
                    <ProductItem 
                        v-for="product in cat_products"
                        :key="product.prodc_id" 
                        :imgProduct="product.prodc_img" 
                        :nameProduct="product.prodc_title" 
                    />
                </div>
            </div>
            <!-- <div class="tab-pane container active pt-5" id="tab1">
                <div class="tab">
                    <ProductItem imgProduct="" nameProduct="" />
                </div>
            </div> -->
            
        </div>
    </div>
</div>
</template>

<script>
import axios from 'axios';

import '../../../css/product.css';

import ProductItem from './ProductItem.vue';

import AppPrice from "./Price.vue";

export default {
    name: "MenuComponents",
    data() {
        return {
            dataCats: [],
            dataProducts: [],
        };
    },
    components: {
        AppPrice,
        ProductItem
    },
    created() {
        axios.get(`/get_products`)
        .then(response => {
            this.dataCats = response.data.cats;
            this.dataProducts = response.data.products;
            console.log(this.dataProducts);
        })
        .catch(e => {
            console.error(e);
        })
    }
};
</script>
