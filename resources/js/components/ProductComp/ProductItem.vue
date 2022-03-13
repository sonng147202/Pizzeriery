<template>
<div class="col-lg-3 col-sm-6 mb-3">
    <div class="pizza">
        <div class="pizza__img position-relative">
            <div class="pizza__logo">
                <img :src="imgProduct" class="pizza__photo" alt="" />
                <div class="pizza__description__product p-1">
                    <h5 class="pizza__name">{{nameProduct}}</h5>
                    <!-- <div class="pizza__ingredient">
                        <strong class="pizza__ingredient_name">
                            Thành phần
                        </strong>
                        <p class="pizza__ingredient_description">
                            Thịt bò xay, ngô, sốt BBQ, pho mai.
                        </p>
                    </div>
                    <div class="pizza__price__size">
                        <strong>Kích cỡ / giá</strong>
                        <p class="price__size">Size S / 20cm / 90.000đ</p>
                        <p class="price__size">Size M / 24cm / 120.000đ</p>
                        <p class="price__size">Size L / 29cm / 150.000đ</p>
                    </div> -->
                </div>
                <div class="overlow"></div>
            </div>
        </div>
        <div class="pizza__description d-flex flex-column justify-content-between text-center">
            <div class="d-flex flex-column justify-content-between text-center">
                <h4 class="pizza__name__product pt-2 text-dark">{{nameProduct}}</h4>
                <div class="pizza__price pt-2 pb-2">
                    <span class="price">90.000 - </span>
                    <span class="price">120.000</span>
                </div>
            </div>
            <form>
                <div class="pizza__option mb-2">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <ChooseSize  v-if="extraProduct" :priceScale="dataPriceScale" />
                        <QuantityOrder />
                    </div>
                </div>
                <button class="pizza__btn-submit p-2 mb-2" type="submit" @click.prevent="submitOrder">Mua hàng</button>
            </form>

        </div>
    </div>
</div>
</template>

<script>
import axios from 'axios';
import Notify from 'simple-notify'
import ChooseSize from './ChooseSize.vue';
import QuantityOrder from './QuantityOrder.vue';

export default {
    created() {
        axios.get(`/get_price_scale?id=${this.idProduct}`)
        .then(response => {
            this.dataPriceScale = response.data;
        })
        .catch(e => {
            console.error(e);
        })
    },
    components: {
        ChooseSize,
        QuantityOrder,
    },
    data() {
        return {
            dataPriceScale: [],
        }
    },
    props: {
        idProduct: Number,
        imgProduct: String,
        nameProduct: String,
        priceProduct: String,
        extraProduct: Number,
    },
    methods: {
        submitOrder() {
            console.log('đc');
            new Notify({
                status: 'success',
                title: 'Notify Title',
                text: 'Notify text lorem ipsum',
                effect: 'fade',
                speed: 300,
                showCloseButton: true,
                autoclose: true,
                autotimeout: 3000,
                gap: 20,
                distance: 20,
                type: 1,
                position: 'right top'
            })
        }
    }
}
</script>

<style>

</style>
