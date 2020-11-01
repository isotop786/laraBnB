<template>
    <div class="container">
      
        <div class="row">
            <template v-if="loading" >
                <p class="lead">Data loading...</p>
            </template>
                
                <template v-else>
                <booking  :title="b.title" :content="b.content" :price="b.price"
                v-for="(b,k) in bookable"
                 :key="k"
                 >
                </booking>
                </template>
              
        
        </div>
    </div>
</template>

<script>
import booking from "./booking";
export default {

    components:{
        booking,
    },

    data(){
        return{
            time:2000,
            bookable: null,
            loading:false,
            col: 3,
        };
    },

    computed:{
        rows(){
            return this.bookable == null ? 0
            : Math.ceil(this.bookable.length / this.col)
        }
    },

        created(){
            this.loading = true;
            setTimeout(()=>{
                this.bookable = [
            {
                title:'Cheap villa',
                content: "A very cheap villa",
                price:550
            }
            , 
            {
                 title:'Very Expensive Villa ',
                 content: 'Extremly Expensive villa',
                 price:2390
            }
             , 
            {
                 title:'Very Expensive Villa ',
                 content: 'Extremly Expensive villa',
                 price:2390
            }
             , 
            {
                 title:'Very Expensive Villa ',
                 content: 'Extremly Expensive villa',
                 price:2390
            }
             , 
            {
                 title:'Very Expensive Villa ',
                 content: 'Extremly Expensive villa',
                 price:2390
            }
             , 
            {
                 title:'Very Expensive Villa ',
                 content: 'Extremly Expensive villa',
                 price:2390
            }
             , 
            {
                 title:'Very Expensive Villa ',
                 content: 'Extremly Expensive villa',
                 price:2390
            }
             , 
            {
                 title:'Very Expensive Villa ',
                 content: 'Extremly Expensive villa',
                 price:2390
            }
             , 
            {
                 title:'Very Expensive Villa ',
                 content: 'Extremly Expensive villa',
                 price:2390
            }
             , 
            {
                 title:'Very Expensive Villa ',
                 content: 'Extremly Expensive villa',
                 price:2390
            }
            , 
            {
                 title:'Very Expensive Villa ',
                 content: 'Extremly Expensive villa',
                 price:2390
            }
            , 
            {
                 title:'Very Expensive Villa ',
                 content: 'Extremly Expensive villa',
                 price:2390
            }
            , 
            {
                 title:'Very Expensive Villa ',
                 content: 'Extremly Expensive villa',
                 price:2390
            }
            , 
            {
                 title:'Very Expensive Villa ',
                 content: 'Extremly Expensive villa',
                 price:2390
            }
            , 
            {
                 title:'Very Expensive Villa ',
                 content: 'Extremly Expensive villa',
                 price:2390
            }
            , 
            {
                 title:'Very Expensive Villa ',
                 content: 'Extremly Expensive villa',
                 price:2390
            }
            , 
            {
                 title:'Very Expensive Villa ',
                 content: 'Extremly Expensive villa',
                 price:2390
            }
            ];
            this.loading = false;
            },this.time);
        }
}
</script>