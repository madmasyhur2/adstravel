@extends("transaction.layout.main")

@section('content')

<div class="flex justify-center" id="container">
    <div class="mr-12">
        {{-- Transaction Info --}}
        <form action="/product/transaction" method="post">
            @csrf
            <div class="flex flex-col justify-center items-center" id="Transaction-info">
                <div class="bg-white rounded shadow p-6 m-4">
                    <div class="text-left">
                        <h1 class="text-2xl font-bold mb-1">Transaction Info</h1>
                        <p class="text-gray-600 mt-0 mb-8">Please enter yout transaction info</p>
                    </div>
                    <div class="grid gap-x-12 gap-y-3 grid-cols-2 grid-rows-2">
                        <div>
                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                            <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" placeholder="Your Name" required>
                        </div>
                        <div>
                            <label for="phone_number" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
                            <input type="text" name="phone_number" id="phone_number" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" placeholder="08XXXXXXXXX" required>
                        </div>
                        <div>
                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Pax</label>
                            <input type="number" name="pax" id="pax" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" placeholder="Total Pax" required>
                        </div>
                        <div>
                            <label for="City" class="block text-sm font-medium leading-6 text-gray-900">City</label>
                            <input type="text" name="city" id="city" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" placeholder="Your City" required>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            <input type="hidden" name="travel_id" value="{{ $travels->id }}">
            <input type="hidden" name="total_price" value="{{ $travels->price }}">
            <div class="flex justify-start flex-row-reverse p-4">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold ml-4 mt-2 mb-8 py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                Next
                <div class="ml-2">
                    <img src="../assets/logo/ArrowRight.svg" alt="">
                </div>
            </button>
        </form>
            <a href="/product" class="bg-red-600 hover:bg-red-700 text-white font-bold ml-4 mt-2 mb-8 py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                Cancel
                <div class="ml-2">
                    <img src="../assets/logo/ArrowRight.svg" alt="">
                </div>
            </a>
        </div>
    </div>
</div>

@endsection