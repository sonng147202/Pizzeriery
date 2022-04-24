<template>
<div class="product">
    <div class="content d-flex align-items-stretch">
        <div class="">
            <img src="https://cdn.tgdd.vn/2020/09/CookProduct/1200bzhspm-1200x676.jpg" alt="">
        </div>
        <div class="">
            <h1>Lorem ipsum</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, numquam quis perspiciatis ea ad omnis provident laborum dolore in atque.
            </p>
            <div class="type small">XXL</div>
        </div>
    </div>

    <div class="content">
        <span class="qt-minus">-</span>
        <span class="qt">{{quantity}}</span>
        <span class="qt-plus">+</span>

        <h2 class="full-price">
            29.98€
        </h2>

        <h2 class="price">
            14.99€
        </h2>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            quantity: 0,
        }
    }
}
</script>

<style>

</style>
