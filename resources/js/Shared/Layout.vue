<template>
<nav class="navbar navbar-expand-lg navbar-dark opacity-75">
  <div class="container">
    <a class="navbar-brand" href="#">DJ CONTROLLER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <Link class="nav-link"  :class="{'selected': $page.component=='Home'}" href="/">Home</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component=='About'}" href="/about">About</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component=='Pioneer'}" href="/pioneer">Pioneer</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link " :class="{'selected': $page.component=='Services'}" href="/services">Services</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link " :class="{'selected': $page.component=='Contact'}" href="/contact">Contact</Link>
        </li>
      </ul>
    </div>
  </div>
</nav>

 <section class="container bg-white p-3 rounded-2 mt-5 bg-opacity-50">
    <slot />
    <footer class="text-center mt-5">
    Copyright &copy; @2022. All rghts Reserved.
</footer>
 </section>


</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'

</script>

<style scoped>
.selected {
    color: rgb(255, 0, 85);
    font-weight: bolder;
}
 .navbar {
     background: #000000
 }

 .nav-item::after {
     content: '';
     display: block;
     width: 0px;
     height: 2px;
     background: #ff006a;
     transition: 0.4s
 }

 .nav-item:hover::after {
     width: 100%
 }

 .navbar-dark .navbar-nav .active>.nav-link,
 .navbar-dark .navbar-nav .nav-link.active,
 .navbar-dark .navbar-nav .nav-link.show,
 .navbar-dark .navbar-nav .show>.nav-link,
 .navbar-dark .navbar-nav .nav-link:focus,
 .navbar-dark .navbar-nav .nav-link:hover {
     color: #fe0061
 }
 
 footer{
    background: rgb(255, 0, 106);
    padding: 10px 23px;
    color: rgb(255, 255, 255);
    text-align: center;
    border-radius: 10px ;
}
footer span a{
    color: crimson;
    text-decoration: none;
}
footer span a:hover{
    text-decoration: underline;
}
 
</style>
