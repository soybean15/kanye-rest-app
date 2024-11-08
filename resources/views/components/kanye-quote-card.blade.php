<div>


    <div class="w-full shadow-md card bg-base-200 min-w-80">
        <div class="card-body">
          {{-- <h2 class="card-title">Card title!</h2> --}}
          <p>
            @foreach ($item as $key =>$value )

                <div> "{{ $value}}"</div>

            @endforeach
          </p>
          <div class="justify-end card-actions">
            - Kanye West

          </div>
        </div>
    </div>
</div>
