
@extends("invoice.layout.main")

@section("content")

<div class="flex justify-center">
    <div class="mr-3 w-7/12">
        <div class="flex flex-col justify-start">
            {{-- Title --}}
            <div class="bg-white rounded-md p-6 m-8 shadow-lg">
                <div class="text-left">
                    <h1 class="text-4xl font-bold mb-1 text-blue-900">Invoice</h1>
                    <p class="text-gray-600 mt-0 mb-2">Please check again your data</p>
                </div>
            </div>
            {{-- Booking information --}}
            <div class="bg-zinc-50 m-4">
                <div class="text-center">
                    <h1 class="text-2xl font-bold text-blue-700">Booking Information</h1>
                </div>
            </div>
            {{-- Booking information detail --}}
            <div class="bg-white rounded-md p-6 m-4 shadow-lg">
                <div class="m-8 flex justify-center items-center">
                    <img src="{{ asset('assets/image/product-detail-'.$travel->id.'-1.jpg') }}" alt="" class="w-367 h-287 aspect-video object-cover object-center rounded-md">
                </div>
                <div class="">
                    <h1 class="text-center text-2xl font-bold m-4">{{$travel->title}}</h1>
                    <div class="grid gap-x-40 gap-y-8 grid-cols-2 grid-rows-2 m-4">
                        <div class="ml-8">
                            <p class="text-left text-gray-600">Departure</p>
                            <p class="text-left text-xl font-semibold">{{ date('j F Y', strtotime($travel->departure_time)) }}</p>
                        </div>
                        <div>
                            <p class="text-left text-gray-600">Arrival</p>
                            <p class="text-left text-xl font-semibold">{{ date('j F Y', strtotime($travel->arrival_time)) }}</p>
                        </div>
                        <div class="ml-8">
                            <p class="text-left text-gray-600">Location</p>
                            <p class="text-left text-xl font-semibold">{{$travel->location}}</p>
                        </div>
                        <div>
                            <p class="text-left text-gray-600">Price</p>
                            <p class="text-left text-xl font-semibold">Rp {{number_format(($travel->price), 0, ',', '.')}}/pax</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Customer information --}}
            <div class="bg-zinc-50 m-4">
                <div class="text-center">
                    <h1 class="text-2xl font-bold text-blue-700">Customer Information</h1>
                </div>
            </div>
            {{-- customer information detail --}}
            <div class="bg-white rounded-md p-6 m-4 shadow-lg">            
                <div class="grid gap-x-16 gap-y-2 grid-cols-1 grid-rows-2 divide-y-2">
                    <div class="flex items-center justify-center flex-col">
                        <div class="grid gap-x-40 gap-y-8 grid-cols-2 grid-rows-2 m-8">
                            <div>
                                <p class="text-left text-gray-600">Name</p>
                                <p class="text-left text-xl font-semibold">{{ $transaction->name }}</p>
                            </div>
                            <div>
                                <p class="text-left text-gray-600">Total Pax</p>
                                <p class="text-left text-xl font-semibold">{{ $transaction->pax }}</p>
                            </div>
                            <div>
                                <p class="text-left text-gray-600">Phone Number</p>
                                <p class="text-left text-xl font-semibold">{{ $transaction->phone_number }}</p>
                            </div>
                        </div>
                    </div>
                    {{-- rental information detail --}}
                    {{-- <div class="flex items-center justify-center flex-col">
                        <h1 class="text-center text-2xl font-bold m-4 text-blue-900">Rental</h1>
                        <div class="grid gap-x-40 gap-y-8 grid-cols-3 grid-rows-2 m-8">
                            <div>
                                <p class="text-left text-gray-600">Pick Up Date</p>
                                <p class="text-left text-xl font-semibold">{{ $result['pickUp']->format('jS F Y')}}</p>
                            </div>
                            <div>
                                <p class="text-left text-gray-600">Pick Up Location</p>
                                <p class="text-left text-xl font-semibold">{{ $transaction->pick_up_location }}</p>
                            </div>
                            <div>
                                <p class="text-left text-gray-600">Rent Time</p>
                                <p class="text-left text-xl font-semibold">{{ $result['period'] }} Days</p>
                            </div>
                            <div>
                                <p class="text-left text-gray-600">Drop Off Date</p>
                                <p class="text-left text-xl font-semibold">{{ $result['dropOff']->format('jS F Y')}}</p>
                            </div>
                            <div>
                                <p class="text-left text-gray-600">Drop Off Location</p>
                                <p class="text-left text-xl font-semibold">{{ $transaction->drop_off_location }}</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- Aside --}}
    {{-- <div class="float-right ml-3 w-3/12">
        <div class="flex flex-col justify-center items-center sticky top-5 w-full" id="aside">
            <div class="bg-white rounded shadow p-6 m-4 w-full">
                <h1 class="text-2xl font-bold mb-1 text-blue-900">Rent Summary</h1>
                <div class="divide-y-2 divide-neutral-950">
                    <div>
                        <div class="grid gap-x-auto gap-y-3 grid-cols-2 grid-rows-3 my-6">
                            <p class="text-sm text-left">Rent Price ({{ $result['period'] }} Day)</p>
                            <p class="text-sm text-right">Rp {{ number_format($result['totalPrice'], 0, ',', '.') }}</p>
                            <p class="text-sm text-left">Tax</p>
                            <p class="text-sm text-right">Rp 0</p>
                            <p class="text-sm text-left">Service fee</p>
                            <p class="text-sm text-right">Rp {{ number_format($result['totalPrice']/100, 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <div>
                        <div class="grid gap-x-auto gap-y-auto grid-cols-2 grid-rows-1 my-6 text-blue-900">
                            <p class="text-sm font-bold text-left">Total</p>
                            <p class="text-sm font-bold text-right">Rp {{ number_format($transaction->total_price, 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <a>
                        <button type="button" id="pay-button"
                            class="flex py-3 pl-6 pr-4 justify-center items-center gap-2 bg-blue-600 rounded-lg w-full">
                            <h3 class="text-base font-sans font-semibold text-white">Pay Now</h3>
                            <img src="assets/ArrowRight.svg" alt="">
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
</div>



{{-- <div class="flex flex-col justify-center items-center" id="Transaction-info">
    <div class="bg-white rounded shadow p-6 m-4">
        <div class="grid gap-x-12 gap-y-3 grid-cols-2 grid-rows-2">
            <h1>{{ $transaction->total_payment }}</h1>
            <div>
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                <input disabled value="{{ $transaction->name }}" type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="name">
            </div>
            <div>
                <label for="phone_number" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
                <input disabled value="{{ $transaction->phone_number }}" type="text" name="phone_number" id="phone_number" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="08XXXXXXXXX">
            </div>
            <div>
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                <input disabled value="{{ $transaction->address }}" type="text" name="address" id="address" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Your Address">
            </div>
            <div>
                <label for="City" class="block text-sm font-medium leading-6 text-gray-900">City</label>
                <input disabled value="{{ $transaction->city }}" type="text" name="city" id="city" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="City">
            </div>
        </div>
    </div>
</div> --}}
{{-- Rental Info --}} 
{{--<div class="flex flex-col justify-center items-center" id="Rental-info">
    <div class="bg-white rounded shadow p-6 m-4">
        <h1 class="text-2xl font-bold my-8">Pick Up Info</h1>
        <div class="grid gap-x-12 gap-y-3 grid-cols-2 grid-rows-2">
            <div>
                <label for="pick_up_date" class="block text-sm font-medium leading-6 text-gray-900">Pick Up Date</label>
                <input disabled value="{{ $transaction->pick_up_date}}" type="date" name="pick_up_date" id="pick_up_date" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Date">
            </div>
            <div>
                <label for="pick_up_location" class="block text-sm font-medium leading-6 text-gray-900">Pick Up Location</label>
                <input disabled value="{{ $transaction->pick_up_location }}" type="text"  name="pick_up_location" id="pick_up_location" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Location">
            </div>
            <div>
                <label for="pick_up_time" class="block text-sm font-medium leading-6 text-gray-900">Time</label>
                <input disabled value="{{ $transaction->pick_up_time }}" type="time" name="pick_up_time" id="pick_up_time" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Time">
            </div>
        </div>
        <h1 class="text-2xl font-bold my-8">Drop Off Info</h1>
        <div class="grid gap-x-12 gap-y-3 grid-cols-2 grid-rows-2">
            <div>
                <label for="drop_off_date" class="block text-sm font-medium leading-6 text-gray-900">Drop off Date</label>
                <input disabled value="{{ $transaction->drop_off_date }}" type="date" name="drop_off_date" id="drop_off_date" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Date">
            </div>
            <div>
                <label for="Drop off Location" class="block text-sm font-medium leading-6 text-gray-900">Drop off Location</label>
                <input disabled value="{{ $transaction->drop_off_location }}" type="text" name="drop_off_location" id="drop_off_location" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Location">
            </div>
            <div>
                <label for="drop_off_time" class="block text-sm font-medium leading-6 text-gray-900">Time</label>
                <input disabled value="{{ $transaction->drop_off_time }}" type="time" name="drop_off_time" id="drop_off_time" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Time">
            </div>
        </div>
    </div>
</div>
<button id="pay-button" class="flex bg-indigo-600 hover:bg-indigo-700 text-white font-bold ml-4 mt-2 mb-8 py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
    Pay Now
    <div class="ml-2">
        <img src="../assets/ArrowRight.svg" alt="">
    </div>
</button> --}}
{{-- <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        let payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
          // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token.
          // Also, use the embedId that you defined in the div above, here.
        window.snap.pay('{{ $snapToken }}', {
        onSuccess: function(result){
          /* You may add your own implementation here */
        alert("payment success!"); console.log(result);
        },
        onPending: function(result){
          /* You may add your own implementation here */
        alert("wating your payment!"); console.log(result);
        },
        onError: function(result){
          /* You may add your own implementation here */
        alert("payment failed!"); console.log(result);
        },
        onClose: function(){
          /* You may add your own implementation here */
        alert('you closed the popup without finishing the payment');
        }
        });
        });
</script> --}}

@endsection