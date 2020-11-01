<template>
    <div class="col-md-4">
           <div class="card card-default">
               <div class="card-header">
                   <h2>{{itemTitle}}</h2>
               </div>
               <div class="card-body">
                   <p class="lead">
                       {{itemContent}}
                    </p>
                    <p>
                        <span class="font-weight-bold">{{price}}</span>
                    </p>
               </div>
            </div> 
    </div>
</template>

<script>
export default {
    props:{
        'itemTitle':String,
        'itemContent':String,
        'price':Number
    }
}
</script>