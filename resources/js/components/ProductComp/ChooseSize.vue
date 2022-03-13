<template>
<div class="pizza__choose-size d-flex my-2 mx-auto">
    <div class="" v-for="(ps, index) in priceScale" :key="ps.ps_id">
        <input type="radio" :id="ps.ps_name + ps.prodc_id" name="size" :checked="index == 0 ? true : false" >
        <label :for="ps.ps_name + ps.prodc_id">
            <span>{{ps.ps_name}}</span>
        </label>
    </div>
</div>
</template>

<script>
export default {
    props: {
        priceScale: [Array, Object],
    },
}
</script>

<style>

</style>
