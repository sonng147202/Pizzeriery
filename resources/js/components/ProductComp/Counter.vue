<template>
<div class="">
    <form action="#" method="post" class="position-relative bg-white forms ml-2">
        <input type="button" name="apart_from" class="btn-aprat" value="-" @click="remove" />
        <input type="number" name="number" class="numbers" min="0" max="100" :value="setupcount" disabled />
        <input type="button" name="add" class="btn-add" value="+" @click="add" />
    </form>
</div>
</template>

<script>
export default {
    data() {
        return {
            setupcount: 1,
        };
    },
    methods: {
        add() {
            this.setupcount++;
        },
        remove() {
            if (this.setupcount > 1) {
                this.setupcount--;
            } else {
                alert("bắt buộc phải có 1 hàng");
            }
        },
    },
};
</script>
