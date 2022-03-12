<template>
<div class="pizza position-relative">
    <div class="pizza__img">
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
    <div class="pizza__description text-center">
        <h4 class="pizza__name__product pt-2 text-dark">{{nameProduct}}</h4>
        <div class="pizza__price pt-2 pb-2">
            <span class="price">90.000 - </span>
            <span class="price">120.000</span>
        </div>
        <div class="pizza__option d-flex align-items-center">
            <div class="pizza__size d-flex align-items-center">
                <span class="size text-left pl-2">size</span>
                <div class="size__option">
                    <span class="sizs">M</span>
                    <span class="sizs">S</span>
                    <span class="sizs">L</span>
                </div>
            </div>
            <div class="pizza__number d-flex align-items-center">
                <div class="number">Số lượng</div>
                <form action="#" method="post" class="position-relative bg-white forms ml-2">
                    <input type="button" name="apart_from" class="btn-aprat" value="-" />
                    <input type="number" name="number" class="numbers" min="0" max="100" value="1" disabled />
                    <input type="button" name="add" class="btn-add" value="+" />
                </form>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    props: {
        imgProduct: String,
        nameProduct: String
    }
}
</script>

<style>

</style>
