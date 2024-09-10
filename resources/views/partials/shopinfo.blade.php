  <div class="infoshop">
      <ul>
          @foreach ($infos_shop as $info)
              <li><a href="#"><img src="{{ $info['link'] }}"></a><span>{{ $info['text'] }}</span>
              </li>
          @endforeach

      </ul>
  </div>
