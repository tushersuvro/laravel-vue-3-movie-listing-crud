<template>
    <div class="app-body">
        <main class="main">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
                    <div class="container" >
                    <ul class="navbar-nav">
                        <li class="nav-item" active-class="active">
                            <a class="nav-link" href="">Home</a>
                        </li>
                        <li class="nav-item" active-class="active">
                            <router-link :to="{ name: 'movies.index' }" class="nav-link" href="#">Movies</router-link>
                        </li>
                        <li class="nav-item" active-class="active">
                            <router-link :to="{ name: 'movies.create' }" class="nav-link" href="#">Create Movie</router-link>
                        </li>
                    </ul>
                    </div>
                </nav>
            <div class="container" >
                <router-view></router-view>
            </div>
        </main>
    </div>
</template>
