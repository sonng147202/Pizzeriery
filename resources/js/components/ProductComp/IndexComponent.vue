<template>
<div class="menu">
    <div class="container">
        <div class="title__menu d-flex justify-content-center align-items-center">
            <div class="title__img pr-5">
                <img :src="img.default" />
            </div>
            <h3 class="title">Thực đơn</h3>
            <div class="title__img pl-5">
                <img :src="img.default" />
            </div>
        </div>
        <div class="row">
            <!-- tab -->
            <ul class="nav nav-pills justify-content-center w-100 menu">
                <li class="nav-item" v-for="menu in imgmenu" :key="menu.id">
                    <a :href="menu.id" data-toggle="tab" class="nav-link d-flex justify-content-center flex-column" :class="menu.classname">
                        <img :src="menu.image.default" class="nav-imgs m-0 m-auto" alt="" />
                        <span class="name">
                            {{ menu.name }}
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Nội dung -->
        <div class="tab-content">
            <div class="tab-pane container active pt-5" id="tab1">
                <div class="tab">
                    <ProductItem imgProduct="" nameProduct="" />
                </div>
            </div>
            <div class="tab-pane container fade pt-5" id="tab2">
                <div class="tab">
                    <ProductItem imgProduct="" nameProduct="" />
                </div>
            </div>
            <div class="tab-pane container fade pt-5" id="tab3">
                <div class="tab">
                    <ProductItem imgProduct="" nameProduct="" />
                </div>
            </div>
            <div class="tab-pane container fade pt-5" id="tab4">
                <div class="tab">
                    <ProductItem imgProduct="" nameProduct="" />
                </div>
            </div>
            <div class="tab-pane container fade pt-5" id="tab5">
                <div class="tab">
                    <ProductItem imgProduct="" nameProduct="" />
                </div>
            </div>
            <div class="tab-pane container fade pt-5" id="tab6">
                <div class="tab">
                    <ProductItem imgProduct="" nameProduct="" />
                </div>
            </div>
            <div class="tab-pane container fade pt-5" id="tab7">
                <div class="tab">
                    <ProductItem imgProduct="" nameProduct="" />
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import '../../../css/product.css';

import ProductItem from './ProductItem.vue';

import AppPrice from "./Price.vue";

export default {
    name: "MenuComponents",
    data() {
        return {
            img: require("../../../img/products/line_title.png"),
            imgmenu: [{
                    image: require("../../../img/products/icon_pizza_active.png"),
                    name: "Pizza",
                    id: "#tab1",
                    classname: "active",
                },
                {
                    image: require("../../../img/products/icon_myi_active.png"),
                    name: "Sường BBQ",
                    id: "#tab2",
                },
                {
                    image: require("../../../img/products/274461488_1093357781487953_4983080642726196018_n.png"),
                    name: "Mỳ Ý",
                    id: "#tab3",
                },
                {
                    image: require("../../../img/products/260107730_347824307269608_7658823837718512825_n.png"),
                    name: "Salad",
                    id: "#tab4",
                },
                {
                    image: require("../../../img/products/icon_douong_active.png"),
                    name: "Đồ Uống",
                    id: "#tab5",
                },
                {
                    image: require("../../../img/products/icon_combo_active.png"),
                    name: "Combo",
                    id: "#tab6",
                },
                {
                    image: require("../../../img/products/icon-phomai-hover.png"),
                    name: "Khác",
                    id: "#tab7",
                },
            ],
        };
    },
    components: {
        AppPrice,
        ProductItem
    },
};
</script>
