// App.vue

<template>
    <div class="container">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                <router-link to="/" class="nav-link">Home</router-link>
                </li>
                <li class="nav-item">
                <router-link to="/hotel" class="nav-link">Hotel</router-link>
                </li>
                <li class="nav-item">
                <router-link to="/room" class="nav-link">Room</router-link>
                </li>
                <li class="nav-item">
                <router-link to="/price" class="nav-link">Price</router-link>
                </li>
            </ul>
        </nav><br />
        <div>
            <transition name="fade">
                <router-view></router-view>
            </transition>
        </div>
    </div>
</template>

<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity .5s
    }
    .fade-enter, .fade-leave-active {
      opacity: 0
    }
</style>

<script>

    export default{
    }
</script>