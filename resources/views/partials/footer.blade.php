 <div class="back">
     <div class="list-box">
         <div v-for="shoparea in shopAreas">
             <h4>{{ shoparea . area }}</h4>
             <ul>
                 <li v-for="link in shoparea.links"><a :href="link.url">{{ link . text }}</a></li>
             </ul>
         </div>
     </div>
 </div>
 <footer>
     <section>
         <button>Sing-up Now</button>
         <div>
             <h3>Follow us</h3>
             <ul>
                 <li v-for="social in socials"><a :href="social.url"><img :src="getImagePath(`${social.logo}`)"
                             :alt="social.title"></a>
                 </li>

             </ul>
         </div>
     </section>
 </footer>
