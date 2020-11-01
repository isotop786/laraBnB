<template>
    <div class="col-md-4 mt-3">
    <div class="card card-default">
        <div class="card-header">
            <strong>{{title}}</strong>
        </div>
        <div class="card-body">
            <p class="lead">
                {{content}}
            </p>
            <h2 class="font-weight-bold">Price: <em>${{price}}</em></h2>
        </div>
    </div>
    </div>
</template>

<script>
export default {
    props:{
        'title':String,
        'content':String,
        'price':Number
    }


   
}
</script>