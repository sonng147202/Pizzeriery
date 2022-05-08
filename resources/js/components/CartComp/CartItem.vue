<template></template>
<div class="product mb-3 d-flex">
    <div class="content d-flex flex-column justify-content-between w-25 h-100">
        <div class="">
            <img src="https://cdn.tgdd.vn/2020/09/CookProduct/1200bzhspm-1200x676.jpg" alt="">
        </div>
        <div class="d-flex align-items-stretch">
            <span class="qt-minus" @click="quantity--">-</span>
            <input type="text" class="qt" v-model="quantity">
            <span class="qt-plus" @click="quantity++">+</span>
        </div>
    </div>

    <div class="content">
        <div class="ps-3">
            <h1>{{name}}</h1>
            <p>
                <!-- {{description}} -->
            </p>
            <div class="close" @click="REMOVE_ITEM(index)">
                <i class='bx bx-x'></i>
            </div>
        </div>

        <h2 class="size">
            {{size}}
        </h2>

        <h2 class="full-price">
            {{fullPrice}}đ
        </h2>

        <h2 class="price">
            {{price}}đ
        </h2>
    </div>
</div>
</template>

<script>
import { mapActions } from 'vuex';

export default {
    props: {
        index: Number,
        name: String,
        quantity: Number,
        price: Number,
        size: String,
        // description: String,
    },
    data() {
        return {
            
        }
    },
    computed: {
        fullPrice() {
            return this.price * this.quantity;
        }
    },
    methods: {
        ...mapActions(['REMOVE_ITEM', 'UPDATE_ITEM'])
    },
    beforeUpdate() {
        if(this.quantity < 1) {
            this.quantity = 1;
        }
        this.UPDATE_ITEM(this.index, this.quantity);
    },
}
</script>

<style>

</style>
