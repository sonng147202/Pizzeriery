<template>
	<div>
		<swiper
			:slides-per-view="3"
			:space-between="30"
			:loop="false"
			:pagination="true"
			:navigation="true"
		>
			<swiper-slide
				v-for="n in 5"
				:key="n"
				class="test"
				:class="{ test_2: true }"
			>
				<img
					:src="getImageUrl(34 + n)"
					width="600"
					height="400"
					class="img-fluid w-100 mx-auto"
					blank="true"
				/>
			</swiper-slide>
		</swiper>
	</div>
</template>

<script>
import { Navigation, Pagination } from "swiper";

import { SwiperCore, Swiper, SwiperSlide } from "swiper-vue2";

// Import Swiper styles
import "swiper/swiper-bundle.css";

SwiperCore.use([Navigation, Pagination]);

export default {
	components: {
		Swiper,
		SwiperSlide,
	},
	methods: {
		getImageUrl(imageId) {
			return `https://picsum.photos/600/400/?image=${imageId}`;
		},
	},
};
</script>

<style>
/* .img-fluid {
	max-width: 100%;
	height: auto;
}
.w-100 {
	width: 100%;
}
.ml-auto,
.mx-auto {
	margin-left: auto;
}
.mr-auto,
.mx-auto {
	margin-right: auto;
} */
.swiper-container {
  width: 100%;
  padding-top: 50px;
  padding-bottom: 50px;
}
</style>