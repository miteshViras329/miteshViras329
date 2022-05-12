<div class="w-full">
    <div class="w-full pt-12 pb-4 lg:flex lg:space-x-6 space-y-4">
        <div class="lg:w-1/2 w-full text-center border-2 border-white rounded">
            <h1 class="lg:text-4xl text-2xl py-2 font-kaushanScript text-purple-200">Specialty Drinks</h1>
            <hr class="border border-double">
            <ul class="space-y-2">
                @for ($i = 0; $i < 10; $i++)
                    <li class="py-1 border-b mr-1 ml-2">
                        <div class="flex justify-between text-xl font-robotoMono font-bold pr-2">
                            <h1>Charcuterie Board</h1>
                            <span>Price</span>
                        </div>
                        <p class="text-left">Mauris at est et est accumsan sodales eu ac ligula.</p>
                        <x-add-cart />
                    </li>
                @endfor
            </ul>
        </div>
    </div>
</div>
