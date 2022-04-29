<template>
<div class="container my-5">
    <div class="row">
        <h1 class="col">Cart</h1>
    </div>
    <div class="row">
        <div id="cart" class="col d-flex flex-column">
            <CartItem />
            <CartItem />
        </div>
    </div>
    <div class="row">
        <h1 class="col">Payment</h1>
        <div class="border-top pt-3">
            <div class="d-flex justify-content-between">
                <h1 class="fs-5">Tổng tiền:</h1>
                <span>99999đ</span>
            </div>
        </div>
        <button class="btn btn-danger w-25 ms-auto">Submit</button>
    </div>
</div>
</template>

<script>
import CartItem from '../components/CartComp/CartItem.vue';
export default {
    components: {
        CartItem,
    }
}
</script>

<style>

</style>
