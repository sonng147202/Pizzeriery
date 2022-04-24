<template>
<div class="">
    <div id="cart" class="d-flex flex-column">
        <CartItem />
        <CartItem />
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
