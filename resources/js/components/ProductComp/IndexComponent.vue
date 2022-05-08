<template>
<div class="container">
    <div class="row">
        <!-- tab -->
        <nav class="nav nav-pills justify-content-center w-100">
            <div class="nav nav-tabs" role="tablist">
                <button 
                    type="button" 
                    class="nav-link d-flex justify-content-center flex-column" 
                    data-bs-toggle="tab" role="tab" aria-selected="true" 
                    v-for="(cat, index) in dataCats" 
                    :key="cat.id" 
                    :class="{ 'active': index == 0 }" 
                    :data-bs-target="'#cat' + cat.id" 
                    :aria-controls="'cat' + cat.id"
                >
                    <!-- icon tab -->
                    <img :src="cat.img" class="nav-imgs m-0 m-auto" alt="" />
                    <!-- name tab -->
                    <span class="name">
                        {{ cat.name }}
                    </span>
                </button>
            </div>
        </nav>
    </div>
    <!-- tab content -->
    <div class="tab-content">
        <!-- tab pane -->
        <div 
            class="tab-pane fade container pt-4" 
            v-for="(cat_products, index) in dataProducts" 
            :key="index" 
            :class="{ 'show active': index == 1 }" 
            :id="'cat' + index" role="tabpanel" 
            :aria-labelledby="'cat' + index + '-tab'"
        >
            <div class="tab row align-items-stretch">
                <ProductItem 
                    v-for="product in cat_products" 
                    :key="product.id" 
                    :idProduct="parseInt(product.id)"
                    :imgProduct="product.img" 
                    :nameProduct="product.title" 
                    :priceProduct="parseInt(product.price)"
                    :extraProduct="parseInt(product.scale)"
                />
            </div>
        </div>
    </div>
</div>
</template>

<script>
import axios from 'axios';

import '../../../css/product.css';

import ProductItem from './ProductItem.vue';

export default {
    name: "MenuComponents",
    data() {
        return {
            dataCats: [],
            dataProducts: [],
        };
    },
    components: {
        ProductItem
    },
    created() {
        axios.get(`/get_products`)
            .then(response => {
                this.dataCats = response.data.cats;
                this.dataProducts = response.data.products;
            })
            .catch(e => {
                console.error(e);
            })
    }
};
</script>
