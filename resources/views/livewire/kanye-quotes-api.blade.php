<div>

    <div class="flex flex-col items-center justify-center mx-10 mt-10 space-y-10 md:mx-40">

        <div>
            <div class="my-2 text-lg font-bold">Api url</div>
            <div class="px-5 mockup-code min-w-[700px] md:max-w-[700px]">
                <pre data-prefix="GET:"><code>{{ $api_url }}</code></pre>
            </div>
        </div>


        <div >

            <div class="flex justify-between my-2">
                <div class="text-lg font-bold">Your Api token</div>

                <button  class="btn btn-ghost btn-sm" wire:click='generateToken'>Generate Token</button>
            </div>
            <div class="min-w-[700px] m px-5 mockup-code">
                <pre ><code>{{ $token ?? 'No Api Token, Click Generate'}}</code></pre>
            </div>
        </div>

    </div>
</div>
