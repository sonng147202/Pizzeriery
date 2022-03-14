<template>
<div class="col-lg-3 col-sm-6 mb-4">
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
            <form ref="orderForm">
                <div class="pizza__option mb-2">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <input type="hidden" name="name_product" :value="nameProduct">
                        <ChooseSize  v-if="extraProduct" :priceScale="dataPriceScale" />
                        <QuantityOrder />
                    </div>
                </div>
                <button class="pizza__btn-submit p-2 mb-2" type="submit" @click.prevent="submitOrder($event, $refs.orderForm)">Mua hàng</button>
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
        submitOrder: async (event, orderForm) => {
            const orderFormData = new FormData(orderForm);

            try {
				const response = await axios({
					method: "post",
					url: "/order_product",
					data: orderFormData,
					headers: { "Content-Type": "multipart/form-data" },
				});

                console.log(event);

                new Notify({
                    status: 'success',
                    title: 'Add to cart',
                    text: `${response.data.name_product}`,
                    autoclose: true,
                })
			} catch(error) {
				console.error(error)
			}
            
        }
    }
}
</script>

<style>

</style>
