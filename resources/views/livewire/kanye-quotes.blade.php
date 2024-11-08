<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}



    <div class="flex flex-col items-center justify-center mx-5 mt-10 md:mx-40">

        <div class="w-full p-5 bg-emerald-200 max-w-[900px] rounded-lg grid  md:flex justify-between my-5 items-center">

            <div>

                <span>Kanye quotes grabbed from </span>  <a class="text-blue-600" href="https://api.kanye.rest" target="_blank">https://api.kanye.rest</a>

            </div>
            <div wire:poll='updateTimer' class="flex items-center space-x-2">

                <span class="text-gray-600">
                    Refresh in: {{ $timer }}
                </span>

                <button class="btn btn-ghost" wire:click='refreshContent'>
                   Refresh
                  </button>


            </div>
        </div>
        <div class="flex flex-wrap gap-3 max-w-[900px]" >


        @foreach ($this->kanyeQuotes as $item )

            <x-kanye-quote-card :item="$item"/>
        @endforeach
        </div>

    </div>



</div>
