 <div class="back">
     <div class="list-box">
         @foreach ($links as $key => $value)
             <div>
                 <h4>{{ $key == 'shop_Areas' ? 'Dc Comics' : $key }}</h4>
                 <ul>
                     @foreach ($value as $element)
                         <li><a href="#">{{ $element['text'] }}</a></li>
                     @endforeach
                 </ul>
             </div>
         @endforeach

     </div>
 </div>
 <footer>
     <section>
         <button>Sing-up Now</button>
         <div>
             <h3>Follow us</h3>
             @foreach ($logo_links as $logo)
                 <li><a :href="social.url"><img src="{{ $logo['logo'] }}" :alt="social.title"></a>
                 </li>
             @endforeach

         </div>
     </section>
 </footer>
