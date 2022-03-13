<template>
<div class="pizza__quantity d-flex justify-content-center my-2 mx-auto">
    <button class="btn-quantity" type="button" @click="minusQuantity">-</button>
    <input type="number" min="0" max="100" v-model="quantity" name="quantity">
    <button class="btn-quantity" type="button" @click="plusQuantity">+</button>
</div>
</template>

<script>
export default {
    data() {
        return {
            quantity: 0,
        }
    },
    methods: {
        minusQuantity() {
            this.quantity--
            if (this.quantity < 0) {
                this.quantity = 0
            }
        },
        plusQuantity() {
            this.quantity++
            if (this.quantity > 100) {
                this.quantity = 100
            }
        }
    }
}
</script>

<style>

</style>
