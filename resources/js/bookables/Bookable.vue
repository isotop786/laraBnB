<template>
    <div>
        <book-list></book-list>
    </div>
</template>

<script>
import BookableListItem from "./BookableListItem"
export default {
    components:{
       "book-list" : BookableListItem
    }
}
</script>