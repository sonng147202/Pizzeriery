<template>
<div class="product mb-3 d-flex" @click="getItemCart(index)">
    <div class="content d-flex flex-column justify-content-between w-25 h-100">
        <div class="">
            <img src="https://cdn.tgdd.vn/2020/09/CookProduct/1200bzhspm-1200x676.jpg" alt="">
        </div>
        <div class="d-flex align-items-stretch">
            <span class="qt-minus" @click="getItemCart(index).quantity--">-</span>
            <input type="text" class="qt" v-model="getItemCart(index).quantity">
            <span class="qt-plus" @click="getItemCart(index).quantity++">+</span>
        </div>
    </div>

    <div class="content">
        <div class="ps-3">
            <h1>{{getItemCart(index).name}}</h1>
            <p>
            </p>
            <div class="close" @click="REMOVE_ITEM(index)">
                <i class='bx bx-x'></i>
            </div>
        </div>

        <h2 class="size">
            {{getItemCart(index).size}}
        </h2>

        <h2 class="full-price">
            {{getItemCart(index).price * getItemCart(index).quantity}}đ
        </h2>

        <h2 class="price">
            {{getItemCart(index).price}}đ
        </h2>
    </div>
</div>
</template>

<script>
import { mapActions, mapGetters } from 'vuex';

export default {
    props: {
        index: Number,
        id: Number
    },
    data() {
        return {
            
        }
    },
    computed: {
        ...mapGetters(['getItemCart']),
    },
    methods: {
        ...mapActions(['REMOVE_ITEM', 'UPDATE_ITEM']),
    },
    beforeUpdate() {
        // if(this.quantity < 1) {
        //     this.quantity = 1;
        // }
        this.UPDATE_ITEM({
            index: this.index, 
            quantity: this.getItemCart(this.index).quantity
        });
    },
}
</script>

<style>

</style>
