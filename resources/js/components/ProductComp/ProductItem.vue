<template>
<div class="col-lg-3 col-sm-6 mb-4">
    <div class="pizza">
        <div class="pizza__img position-relative">
            <div class="pizza__logo">
                <img :src="imgProduct" class="pizza__photo" alt="" />
                <div class="pizza__description__product p-1">
                    <h5 class="pizza__name">{{nameProduct}}</h5>
                    <div class="pizza__ingredient">
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
                    </div>
                </div>
                <div class="overlow"></div>
            </div>
        </div>
        <div class="pizza__description d-flex flex-column justify-content-between text-center">
            <div class="d-flex flex-column justify-content-between text-center">
                <h4 class="pizza__name__product pt-2 text-dark">{{nameProduct}}</h4>
                <div class="pizza__price pt-2 pb-2">
                    <div v-if="extraProduct">
                        <span class="price">{{priceProduct + priceMin}}đ</span>
                        -
                        <span class="price">{{priceProduct + priceMax}}đ</span>
                    </div>
                    <div v-else>
                        <span class="price">{{priceProduct}}đ</span>
                    </div>
                </div>
            </div>
            <form @submit.prevent="submitOrder">
                <div class="pizza__option mb-2">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <input type="hidden" name="name_product" :value="nameProduct">
                        <div v-if="extraProduct" class="pizza__choose-size d-flex my-2 mx-auto">
                            <div class="" v-for="(scale) in dataPriceScale" :key="scale.id">
                                <input 
                                    type="radio" 
                                    v-model="scaleProduct" 
                                    :id="scale.name + 
                                    scale.product_id" 
                                    :value="scale.id" 
                                />
                                <label :for="scale.name + scale.product_id">
                                    <span>{{scale.name}}</span>
                                </label>
                            </div>
                        </div>
                        <div class="pizza__quantity d-flex justify-content-center my-2 mx-auto">
                            <button class="btn-quantity" type="button" @click="minusQuantity">-</button>
                            <input type="number" min="0" max="100" v-model="quantity" name="quantity">
                            <button class="btn-quantity" type="button" @click="plusQuantity">+</button>
                        </div>
                    </div>
                </div>
                <button class="pizza__btn-submit p-2 mb-2" type="submit">Mua hàng</button>
            </form>

        </div>
    </div>
</div>
</template>

<script>
import axios from 'axios';
import {
    mapActions
} from 'vuex';
import Notify from 'simple-notify'

export default {
    created() {
        axios.get(`/get_price_scale?id=${this.idProduct}`)
            .then(response => {
                this.dataPriceScale = response.data;
                if (this.extraProduct) {
                    this.priceMin = parseInt(response.data[0].extra);
                    this.priceMax = parseInt(response.data[response.data.length - 1].extra);
                }
            })
            .catch(e => {
                console.error(e);
            })
    },
    data() {
        return {
            dataPriceScale: [],
            priceMin: null,
            priceMax: null,
            scaleProduct: null,
            quantity: 1,
        }
    },
    props: {
        idProduct: Number,
        imgProduct: String,
        nameProduct: String,
        priceProduct: Number,
        extraProduct: Number,
    },
    methods: {
        ...mapActions(['ADD_ITEM']),
        minusQuantity() {
            this.quantity--
            if (this.quantity < 1) {
                this.quantity = 1
            }
        },
        plusQuantity() {
            this.quantity++
            if (this.quantity > 100) {
                this.quantity = 100
            }
        },
        submitOrder() {
            const _this = this;

            const productOder = {
                id: _this.idProduct,
                name: _this.nameProduct,
                price: _this.priceProduct,
                quantity: _this.quantity,
            }

            if (_this.extraProduct) {
                const [{...scale}] = _this.dataPriceScale.filter(function(item) {
                    return item.id == _this.scaleProduct;
                });
                productOder.scale = scale;
            }

            _this.ADD_ITEM(productOder);
            // console.log(productOder);

            new Notify({
                status: 'success',
                title: 'Add to cart',
                text: `${productOder.name} x ${productOder.quantity}`,
                autoclose: true,
            })
        }
    },
    beforeUpdate() {

    }
}
</script>

<style>

</style>
