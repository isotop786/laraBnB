<template>
    <div class="row">
        <book-item itemTitle="Cheap Villa" itemContent="A very cheap nesty villa"
        v-bind:price='3000'></book-item>

        <book-item item-title="Cheep Villa" item-content="A very creepy villa" v-bind:price="3900"></book-item>

    </div>
</template>

<script>
import Book from "./Book";
export default {
    components:{
        'book-item':Book,
    }
}
</script>