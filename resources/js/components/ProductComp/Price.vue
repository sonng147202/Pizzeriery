<template>
<div class="pizza__size__none">
    <div class="pizza__price pt-2 pb-2">
        <span class="price">{{ price }}</span>
    </div>
    <div class="pizza__option d-flex align-items-center">
        <div class="pizza__size d-flex align-items-center">
            <span class="size text-left pl-2">size</span>
            <div class="size__option">
                <span class="sizs" @click="optionsize('m')">M</span>
                <span class="sizs" @click="optionsize('s')">S</span>
                <span class="sizs" @click="optionsize('l')">L</span>
            </div>
        </div>
        <div class="pizza__number d-flex align-items-center">
            <div class="number">Số lượng</div>
            <counter />
        </div>
    </div>
</div>
</template>

<script>
import Counter from "./Counter.vue";

export default {
    data() {
        return {
            prices: 90.0,
            pricel: 80.0,
            pricem: 120.0,
            price: "90000-12000",
        };
    },
    methods: {
        optionsize(e) {
            // eslint-disable-next-line no-undef
            if (e == "s") {
                this.price = this.prices;
            }
            // eslint-disable-next-line no-undef
            else if (e == "m") {
                this.price = this.pricem;
            }
            // eslint-disable-next-line no-undef
            else if (e == "l") {
                this.price = this.pricel;
            }
        },
    },
    components: {
        Counter
    },
};
</script>
