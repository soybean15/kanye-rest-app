<div>

    <div class="flex flex-col items-center justify-center mx-10 mt-10 space-y-10 md:mx-40">
        <div >

            <div class="flex justify-between my-2 ">
                <div class="text-lg font-bold">Your Api token</div>

                <button  class="btn btn-ghost btn-sm" wire:click='generateToken'>Generate Token</button>
            </div>
            <div class="md:min-w-[700px]  px-5 mockup-code md:max-w-[700px] max-w-xs">
                <pre ><code>{{ $token ?? 'No Api Token, Click Generate'}}</code></pre>
            </div>
        </div>


        <div>
            <div class="my-2 text-lg font-bold">Api url</div>
            <div class="px-5 mockup-code min-w-full md:min-w-[700px]  md:max-w-[700px] overflow-x-auto whitespace-nowrap max-w-xs">
                <pre data-prefix="GET:"><code>{{ $api_url }}</code></pre>
            </div>
        </div>




        <div >
            <div class="flex justify-between my-2">
                <div class="text-lg font-bold">Sample Response</div>
            </div>
            <div class="md:min-w-[700px] max-w-xs  px-5 mockup-code md:max-w-[700px]">
                <pre data-prefix="1"><code>[</code></pre>
                <pre data-prefix="2"><code>{</code></pre>
                <pre data-prefix="3"><code>"quote": "Shut the fuck up I will fucking laser you with alien fucking eyes and explode your fucking head"</code></pre>
                <pre data-prefix="4"><code>},</code></pre>
                <pre data-prefix="5"><code>{</code></pre>
                <pre data-prefix="6"><code>"quote": "I'm going to personally see to it that Taylor Swift gets her masters back. Scooter is a close family friend"</code></pre>
                <pre data-prefix="7"><code>},</code></pre>
                <pre data-prefix="8"><code>{</code></pre>
                <pre data-prefix="9"><code>"quote": "I'll say things that are serious and put them in a joke form so people can enjoy them. We laugh to keep from crying."</code></pre>
                <pre data-prefix="10"><code>},</code></pre>
                <pre data-prefix="11"><code>{</code></pre>
                <pre data-prefix="12"><code>"quote": "Culture is the most powerful force in humanity under God"</code></pre>
                <pre data-prefix="13"><code>},</code></pre>
                <pre data-prefix="14"><code>{</code></pre>
                <pre data-prefix="15"><code>"quote": "Believe in your flyness...conquer your shyness."</code></pre>
                <pre data-prefix="16"><code>}</code></pre>
                <pre data-prefix="17"><code>]</code></pre>
            </div>

        </div>

    </div>
</div>
