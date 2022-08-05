<template>
<section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, My Name is</div>
                <div class="text-2">Louei Genita</div>
                <div class="text-3">And I'm a <span>BSIT-3 STUDENT</span></div>
                <a href="/contact">Contact Me</a>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref } from 'vue'
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout
}
</script>
<style>
.home{
    display: flex;
    min-height: 350px;
    background-size: cover;
    background-attachment: fixed;
}
.home .max-width{
  width: 100%;
  display: flex;
}
.home .max-width .row{
  margin-right: 0;
}
.home .home-content .text-1{
    font-size: 27px;
}
.home .home-content .text-2{
    font-size: 75px;
    font-weight: 600;
    margin-left: -3px;
}
.home .home-content .text-3{
    font-size: 40px;
    margin: 5px 0;
}
.home .home-content .text-3 span{
    color: crimson;
    font-weight: 500;
}
.home .home-content a{
    display: inline-block;
    background: crimson;
    color: #fff;
    font-size: 25px;
    padding: 12px 36px;
    margin-top: 20px;
    font-weight: 400;
    border-radius: 6px;
    border: 2px solid crimson;
    transition: all 0.3s ease;
}
.home .home-content a:hover{
    color: crimson;
    background: none;
}





</style>