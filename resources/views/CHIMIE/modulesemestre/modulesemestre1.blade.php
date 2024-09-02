
<link href="../assets/css/semstre.css" rel="stylesheet">

@section('content1')
<body>

      <div class="ag-format-container">

        <div class="ag-courses_box">
            @foreach($sem->modules as $module)
            <div class="ag-courses_item">
                <a href="{{ route('PDCCHIMIE', ['id' => $module->id]) }}" class="ag-courses-item_link">

                  <div class="ag-courses-item_bg"></div>

                  <div class="ag-courses-item_title">
                    {{ $module->nom }}
                  </div>

                  <div class="ag-courses-item_date-box">
                    Start:
                    <span class="ag-courses-item_date">
                      04.11.2022
                    </span>
                  </div>
                </a>
              </div>
        @endforeach




          {{-- <div class="ag-courses_item">
            <a href="{{route('PDCCHIMIE')}}"  class="ag-courses-item_link">
              <div class="ag-courses-item_bg"></div>

              <div class="ag-courses-item_title">
                Module 2
              </div>

              <div class="ag-courses-item_date-box">
                Start:
                <span class="ag-courses-item_date">
                  04.11.2022
                </span>
              </div>
            </a>
          </div> --}}


{{--
          <div class="ag-courses_item">
            <a href="{{route('PDCCHIMIE')}}"  class="ag-courses-item_link">
              <div class="ag-courses-item_bg"></div>

              <div class="ag-courses-item_title">
             Module 3
              </div>

              <div class="ag-courses-item_date-box">
                Start:
                <span class="ag-courses-item_date">
                  04.11.2022
                </span>
              </div>
            </a>
          </div>




          <div class="ag-courses_item">
            <a href="{{route('PDCCHIMIE')}}" class="ag-courses-item_link">
              <div class="ag-courses-item_bg"></div>

              <div class="ag-courses-item_title">
              Module 4
              </div>

              <div class="ag-courses-item_date-box">
                Start:
                <span class="ag-courses-item_date">
                  04.11.2022
                </span>
              </div>
            </a>
          </div>



          <div class="ag-courses_item">
            <a href="{{route('PDCCHIMIE')}}"  class="ag-courses-item_link">
              <div class="ag-courses-item_bg"></div>

              <div class="ag-courses-item_title">
              Module 5
              </div>

              <div class="ag-courses-item_date-box">
                Start:
                <span class="ag-courses-item_date">
                  04.11.2022
                </span>
              </div>
            </a>
          </div>



          <div class="ag-courses_item">
            <a href="{{route('PDCCHIMIE')}}"  class="ag-courses-item_link">
              <div class="ag-courses-item_bg"></div>

              <div class="ag-courses-item_title">
               Module 6
              </div>

              <div class="ag-courses-item_date-box">
                Start:
                <span class="ag-courses-item_date">
                  04.11.2022
                </span>
              </div>
            </a>
          </div> --}}










        </div>
      </div>
</body>
