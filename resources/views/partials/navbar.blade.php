<header>
    <div>
        <img src="../assets/dc-logo.png" alt="">
        <nav>
            <ul>
                <li v-for="link in links" :class="link.state === true ? 'active' : ''">
                    <a :href="link.url">{{ link . text }}</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
