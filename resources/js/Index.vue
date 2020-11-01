<template>
    <div>
        <nav class="navbar bg-dark text-light border-bottom">
            
            <router-link class="nabvar-brand mr-auto" :to="{name:'Home'}">LaraBnB</router-link>
            <router-link class="btn nav-button text-light" :to="{name:'About'}">About</router-link>
        </nav>

       

        <div class="container my-4 px-4">

            <router-view></router-view>
        </div>

        
    </div>
</template>