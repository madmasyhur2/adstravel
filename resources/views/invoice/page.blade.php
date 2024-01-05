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
                    <div class="grid gap-x-40 gap-y-8 grid-cols-3 grid-rows-2 m-4">
                        <div class="ml-8">
                            <p class="text-left text-gray-600">Departure</p>
                            <p class="text-left text-xl font-semibold">{{ date('j F Y', strtotime($travel->departure_time)) }}</p>
                        </div>
                        <div>
                            <p class="text-left text-gray-600">Arrival</p>
                            <p class="text-left text-xl font-semibold">{{ date('j F Y', strtotime($travel->arrival_time)) }}</p>
                        </div>
                        <div>
                            <p class="text-left text-gray-600">Location</p>
                            <p class="text-left text-xl font-semibold">{{$travel->location}}</p>
                        </div>
                        <div class="ml-8">
                            <p class="text-left text-gray-600">Departure Time</p>
                            <p class="text-left text-xl font-semibold">{{ date('H:i', strtotime($travel->departure_time)) }}</p>
                        </div>
                        <div>
                            <p class="text-left text-gray-600">Arrival Time</p>
                            <p class="text-left text-xl font-semibold">{{ date('H:i', strtotime($travel->arrival_time)) }}</p>
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
                <div class="grid gap-x-16 gap-y-2 grid-cols-1 grid-rows-1">
                    <div class="flex items-center justify-center flex-col">
                        <div class="grid gap-x-40 gap-y-8 grid-cols-2 grid-rows-2 m-8">
                            <div>
                                <p class="text-left text-gray-600">Name</p>
                                <p class="text-left text-xl font-semibold">{{ $transaction->name }}</p>
                            </div>
                            <div>
                                <p class="text-left text-gray-600">Total Pax</p>
                                <p class="text-left text-xl font-semibold">{{ $transaction->quantity }}</p>
                            </div>
                            <div>
                                <p class="text-left text-gray-600">Phone Number</p>
                                <p class="text-left text-xl font-semibold">{{ $transaction->phone_number }}</p>
                            </div>
                            <div>
                                <p class="text-left text-gray-600">City</p>
                                <p class="text-left text-xl font-semibold">{{ $transaction->city }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Aside --}}
    <div class="float-right ml-3 w-3/12">
        <div class="flex flex-col justify-center items-center sticky top-5 w-full" id="aside">
            <div class="bg-white rounded shadow p-6 m-4 w-full">
                <h1 class="text-2xl font-bold mb-1 text-blue-900">Book Summary</h1>
                <div class="divide-y-2 divide-neutral-950">
                    <div>
                        <div class="grid gap-x-auto gap-y-3 grid-cols-2 grid-rows-3 my-6">
                            <p class="text-sm text-left">Book Price ({{ $result['pax'] }} Pax)</p>
                            <p class="text-sm text-right">Rp {{ number_format($result['totalPayment'], 0, ',', '.') }}</p>
                            <p class="text-sm text-left">Tax</p>
                            <p class="text-sm text-right">Rp 0</p>
                            <p class="text-sm text-left">Service fee</p>
                            <p class="text-sm text-right">Rp {{ number_format($result['totalPayment']/100, 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <div>
                        <div class="grid gap-x-auto gap-y-auto grid-cols-2 grid-rows-1 my-6 text-blue-900">
                            <p class="text-sm font-bold text-left">Total</p>
                            <p class="text-sm font-bold text-right">Rp {{ number_format($transaction->total_price, 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <a href="/profile">
                        <button type="submit" class="flex py-3 pl-6 pr-4 justify-center items-center gap-2 bg-blue-600 rounded-lg w-full">
                            <h3 class="text-base font-sans font-semibold text-white">Pay Now</h3>
                            <img src="assets/logo/ArrowRight.svg" alt="">
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection