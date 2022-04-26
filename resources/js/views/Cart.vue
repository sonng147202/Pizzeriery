<template>
<div class="container">
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
