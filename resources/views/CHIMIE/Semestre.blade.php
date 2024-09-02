
<link href="../assets/css/semstre.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@section('content1')
<body>

      <div class="ag-format-container">

        <div class="ag-courses_box">
            @foreach($Filiere->semestres as $sem)
            <div class="ag-courses_item" >
                <a href={{route('indexuser' ,['id'=>$sem->id]    )}} class="ag-courses-item_link">
                  <div class="ag-courses-item_bg"></div>

                  <div class="ag-courses-item_title">
                    {{ $sem->nom }}
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
           </div>
            </a>
          </div>

        

</body>
