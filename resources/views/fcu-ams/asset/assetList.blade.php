@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="{{ asset('css/asset.css') }}">

<div class="grid grid-cols-6">
    @include('layouts.sidebar')
    <div class="content min-h-screen bg-slate-100 col-span-5">
        <nav class="bg-white flex justify-between py-3 px-4 m-3 shadow-md rounded-md">
            <div></div>
            <h1 class="my-auto text-3xl">Asset</h1>
            <a href="" class="flex space-x-1" style="min-width:100px;">
                <svg class="h-10 w-10 my-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                <p class="my-auto">Lighttt</p>
            </a>
        </nav>
        <div class="m-3 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex align-items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mr-2" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                            clip-rule="evenodd" />
                    </svg>
                    <h3 class="text-lg font-semibold my-auto">Total Asset</h3>
                </div>
                <p class="text-3xl font-bold">{{ $totalAssets }}</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex align-items-center mb-2">
                    <svg class="h-10 w-10 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="text-lg font-semibold my-auto">Total Cost</h3>
                </div>
                <p class="text-3xl font-bold">₱{{ number_format($totalCost, 2) }}</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex align-items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="h-10 w-10 mr-2" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 17.25 12 21m0 0-3.75-3.75M12 21V3" />
                    </svg>
                    <h3 class="text-lg font-semibold my-auto">Low Asset Value</h3>
                </div>
                <p class="text-3xl font-bold">{{ $lowValueAssets }}</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex align-items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 6.75 12 3m0 0 3.75 3.75M12 3v18" />
                    </svg>
                    <h3 class="text-lg font-semibold my-auto">High Asset Value</h3>
                </div>
                <p class="text-3xl font-bold">{{ $highValueAssets }}</p>
            </div>
        </div>
        <div class="mb-1 flex justify-between m-3 rounded-md">
                <a href="{{ route('asset.export') }}"
                    class="rounded-md shadow-md px-5 py-2 bg-orange-600 hover:shadow-md hover:bg-orange-500 transition-all duration-200 hover:scale-105 ease-in hover:shadow-inner text-white">Export
                    to Excel</a>
            <!-- <div class="flex">
                <a href=""
                    class="mr-3 rounded-md shadow-md px-5 py-2 bg-green-600 hover:shadow-md hover:bg-green-500 transition-all duration-200 hover:scale-105 ease-in hover:shadow-inner text-white">Stock
                    In</a>
                <a href="#"
                    class="mr-3 rounded-md shadow-md px-5 py-2 bg-red-600 hover:shadow-md hover:bg-red-500 transition-all duration-200 hover:scale-105 ease-in hover:shadow-inner text-white">Stock
                    Out</a>
                <a href="#"
                    class="mr-3 rounded-md shadow-md px-5 py-2 bg-blue-600 hover:shadow-md hover:bg-blue-500 transition-all duration-200 hover:scale-105 ease-in hover:shadow-inner text-white">Create
                    Purchase Order</a>
            </div> -->
            <div class="pagination-here flex justify-between align-items-center">
                <div class="flex align-items-center">
                    <ul class="pagination my-auto flex">
                        <li class="page-item p-1 my-auto">
                            <a class="page-link my-auto" href="{{ $assets->url(1) }}">
                                <svg class="w-5 h-5 my-auto" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="previous">
                                        <g id="previous_2">
                                            <path id="Combined Shape" fill-rule="evenodd" clip-rule="evenodd"
                                                d="M28.9682 15.5438L39.257 8.52571C41.2485 7.16707 43.9486 8.59383 43.9486 11.0038V36.9158C43.9486 39.3272 41.249 40.7548 39.257 39.3958L20.2635 26.4382C18.5169 25.2492 18.5171 22.6726 20.2631 21.4817L26.9682 16.908V11.0064C26.9682 10.2023 26.0683 9.7271 25.4042 10.1802L6.43638 23.134C5.85532 23.5311 5.85532 24.3887 6.43618 24.7866L25.4038 37.7403C26.0683 38.1936 26.9682 37.7185 26.9682 36.9144V35.9744C26.9682 35.4221 27.4159 34.9744 27.9682 34.9744C28.5205 34.9744 28.9682 35.4221 28.9682 35.9744V36.9144C28.9682 39.3259 26.2685 40.7513 24.2762 39.3922L5.30706 26.4374C3.56509 25.2441 3.56509 22.6737 5.30824 21.4826L24.2766 8.52831C26.2685 7.16942 28.9682 8.59489 28.9682 11.0064V15.5438ZM26.9682 19.329V23.0024C26.9682 23.5547 27.4159 24.0024 27.9682 24.0024C28.5205 24.0024 28.9682 23.5547 28.9682 23.0024V17.9648L40.3841 10.1779C41.048 9.72496 41.9486 10.2009 41.9486 11.0038V36.9158C41.9486 37.7205 41.0482 38.1967 40.3842 37.7437L21.3892 24.785C20.8083 24.3898 20.8083 23.5308 21.3901 23.1339L26.9682 19.329Z"
                                                fill="#000000" />
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li class="page-item p-1 my-auto">
                            <a class="page-link my-auto" href="{{ $assets->previousPageUrl() }}">
                                <svg fill="#000000" class="w-5 h-5 my-auto" viewBox="0 0 24 24" id="previous"
                                    data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color">
                                    <path id="primary" d="M17,3V21L5,12Z"
                                        style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                                    </path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="text-center my-auto pr-4 pl-4 font_bold">
                    Showing {{ $assets->firstItem() }} to {{ $assets->lastItem() }} of
                    {{ $assets->total() }} items
                </div>
                <div class="flex align-items-center">
                    <ul class="pagination my-auto flex">
                        <li class="page-item p-1">
                            <a class="page-link" href="{{ $assets->nextPageUrl() }}">
                                <svg fill="#000000" class="w-5 h-5 my-auto" viewBox="0 0 24 24" id="next"
                                    data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color">
                                    <path id="primary" d="M17,12,5,21V3Z"
                                        style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li class="page-item p-1 my-auto">
                            <a class="page-link" href="{{ $assets->url($assets->lastPage()) }}">
                                <svg class="w-5 h-5 my-auto" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="next">
                                        <g id="next_2">
                                            <path id="Combined Shape" fill-rule="evenodd" clip-rule="evenodd"
                                                d="M18.9792 32.3759L8.69035 39.3951C6.69889 40.7537 3.99878 39.3269 3.99878 36.917V11.005C3.99878 8.59361 6.69843 7.166 8.69028 8.52489L27.6843 21.4809C29.4304 22.672 29.4304 25.249 27.6843 26.4371L20.9792 31.0114V36.9144C20.9792 37.7185 21.8791 38.1937 22.5432 37.7406L41.5107 24.787C42.0938 24.3882 42.0938 23.5316 41.5112 23.1342L22.5436 10.1805C21.8791 9.72714 20.9792 10.2023 20.9792 11.0064V11.9464C20.9792 12.4987 20.5315 12.9464 19.9792 12.9464C19.4269 12.9464 18.9792 12.4987 18.9792 11.9464V11.0064C18.9792 8.59492 21.6789 7.16945 23.6711 8.52861L42.6387 21.4823C44.3845 22.6732 44.3845 25.2446 42.6391 26.4382L23.6707 39.3925C21.6789 40.7514 18.9792 39.3259 18.9792 36.9144V32.3759ZM18.9792 29.9548L7.56322 37.7429C6.89939 38.1958 5.99878 37.7199 5.99878 36.917V11.005C5.99878 10.2003 6.89924 9.72409 7.56321 10.1771L26.5573 23.1331C27.1391 23.53 27.1391 24.389 26.5582 24.7842L20.9792 28.5904V24.9184C20.9792 24.3661 20.5315 23.9184 19.9792 23.9184C19.4269 23.9184 18.9792 24.3661 18.9792 24.9184V29.9548Z"
                                                fill="#000000" />
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-white p-5 shadow-md m-3 rounded-md">
            <div class="flex justify-between mb-3">
                <h2 class="text-2xl font-bold my-auto">Asset List</h2>
                <div class="searchBox">
                    <form action="{{ route('asset.list') }}" method="GET" class=" flex gap-1">
                        <input type="text" name="search" placeholder="Search for assets..."
                            class="py-2 px-3 border rounded-md border-red-950 w-96 text-sm text-gray-700 my-auto">
                        <div class="flex align-items-center gap-1">
                            <button type="submit" style="padding: 0.35rem 0.75rem;"
                                class=" border border-green-600 text-green-600 hover:bg-green-600 hover:text-white transition-all duration-200 ease-in rounded-md">
                                Search
                            </button>
                            <button type="submit" style="padding: 0.35rem 0.75rem;" name="clear" value="true"
                                class="border border-amber-600 hover:text-white text-amber-600 hover:bg-amber-600 transition-all duration-200 ease-in rounded-md">
                                Clear
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="overflow-x-auto overflow-y-auto">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-left bg-slate-100 border border-slate-400">
                                <div class="flex">
                                    <a class="my-auto"
                                        href="{{ route('asset.list', ['sort' => 'id', 'direction' => ($direction == 'asc' && $sort == 'id') ? 'desc' : 'asc']) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 7.5 7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
                                        </svg>
                                    </a>
                                    <span class="mx-2">ID</span>
                                </div>
                            </th>
                            <!-- <th class="px-4 py-2 bg-slate-100 border border-slate-400 text-center">Asset Image -->
                            </th>
                            <th class="px-4 py-2 text-left bg-slate-100 border border-slate-400">
                                <div class="flex">
                                    <a class="my-auto"
                                        href="{{ route('asset.list', ['sort' => 'asset_tag', 'direction' => ($direction == 'asc' && $sort == 'asset_tag') ? 'desc' : 'asc']) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 7.5 7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
                                        </svg>
                                    </a>
                                    <span class="mx-2">Asset Tag</span>
                                </div>
                            </th>
                            <th class="px-4 py-2 text-left bg-slate-100 border border-slate-400">
                                <div class="flex">
                                    <a class="my-auto"
                                        href="{{ route('asset.list', ['sort' => 'cost', 'direction' => ($direction == 'asc' && $sort == 'cost') ? 'desc' : 'asc']) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 7.5 7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
                                        </svg>
                                    </a>
                                    <span class="mx-2">Cost</span>
                                </div>
                            </th>
                            <th class="px-4 py-2 text-left bg-slate-100 border border-slate-400">
                                <div class="flex">
                                    <a class="my-auto"
                                        href="{{ route('asset.list', ['sort' => 'supplier_name', 'direction' => ($direction == 'asc' && $sort == 'supplier_name') ? 'desc' : 'asc']) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 7.5 7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
                                        </svg>
                                    </a>
                                    <span class="mx-2">Supplier</span>
                                </div>
                            </th>
                            <th class="px-4 py-2 text-left bg-slate-100 border border-slate-400">
                                <div class="flex">
                                    <a class="my-auto"
                                        href="{{ route('asset.list', ['sort' => 'site_name', 'direction' => ($direction == 'asc' && $sort == 'site_name') ? 'desc' : 'asc']) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 7.5 7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
                                        </svg>
                                    </a>
                                    <span class="mx-2">Site</span>
                                </div>
                            </th>
                            <th class="px-4 py-2 text-left bg-slate-100 border border-slate-400">
                                <div class="flex">
                                    <a class="my-auto"
                                        href="{{ route('asset.list', ['sort' => 'category_name', 'direction' => ($direction == 'asc' && $sort == 'category_name') ? 'desc' : 'asc']) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 7.5 7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
                                        </svg>
                                    </a>
                                    <span class="mx-2">Category</span>
                                </div>
                            </th>
                            <th class="px-4 py-2 text-left bg-slate-100 border border-slate-400">
                                <div class="flex">
                                    <a class="my-auto"
                                        href="{{ route('asset.list', ['sort' => 'department_name', 'direction' => ($direction == 'asc' && $sort == 'department_name') ? 'desc' : 'asc']) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 7.5 7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
                                        </svg>
                                    </a>
                                    <span class="mx-2">Condition</span>
                                </div>
                            </th>
                            <th class="px-4 py-2 text-left bg-slate-100 border border-slate-400 text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($assets as $asset)
                            <tr>
                                <td class="border border-slate-300 px-4 py-2">{{ $asset->id }}</td>
                                <!-- <td class="border border-slate-300 px-4 py-2" style="min-width:100px;">
@if($asset->asset_image)
                                        <img src="{{ asset($asset->asset_image) }}" alt="Asset Image"
                                            class="mx-auto rounded-full" style="width:2.7rem;height:2.7rem;">
@else
                                        <img src="{{ asset('profile/default.png') }}"
                                            alt="Default Image" class="w-14 h-14 rounded-full mx-auto">
@endif
                                </td> -->
                                <td class="border border-slate-300 px-4 py-2">{{ $asset->asset_tag }}</td>
                                <td class="border border-slate-300 px-4 py-2">{{ $asset->cost }}</td>
                                <td class="border border-slate-300 px-4 py-2">{{ $asset->supplier_name }}</td>
                                <td class="border border-slate-300 px-4 py-2">{{ $asset->site_name }}</td>
                                <td class="border border-slate-300 px-4 py-2">{{ $asset->category_name }}</td>
                                <td class="border border-slate-300 px-4 py-2">{{ $asset->condition }}
                                </td>
                                <td class="border border-slate-300 px-4 py-2">
                                    <div class="mx-auto flex justify-center space-x-2">
                                        <a href="{{ route('asset.view', ['id' => $asset->id]) }}"
                                            class="text-green-600 hover:text-green-900">View</a>
                                        <a href="{{ route('asset.edit', ['id' => $asset->id]) }}"
                                            class="text-blue-600 hover:text-blue-900">Edit</a>
                                        <button type="button" class="text-red-600 hover:text-red-900"
                                            onclick="confirmDelete({{ $asset->id }})">
                                            Delete
                                        </button>
                                        <form
                                            action="{{ route('asset.delete', ['id' => $asset->id]) }}"
                                            method="POST" id="delete-form-{{ $asset->id }}">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<script src="{{ asset('js/chart.js') }}"></script>
<script>
    function confirmLogout() {
        if (confirm('Are you sure you want to logout?')) {
            document.getElementById('logout-form').submit();
        }
    }

</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get the current URL
        var currentUrl = window.location.href;
        // Get all dropdown buttons
        var dropdownButtons = document.querySelectorAll('.relative button');
        // Loop through each dropdown button
        dropdownButtons.forEach(function (button) {
            // Get the dropdown links
            var dropdownLinks = button.nextElementSibling.querySelectorAll('a');
            // Loop through each dropdown link
            dropdownLinks.forEach(function (link) {
                // Check if the current URL matches the link's href
                if (currentUrl === link.href) {
                    // Open the dropdown
                    button.click();
                }
            });
        });
    });

</script>
<script>
    function confirmDelete(id) {
        if (confirm('Are you sure you want to delete this asset?')) {
            document.getElementById('delete-form-' + id).submit();
        }
    }

</script>
<script>
    function clearSearch() {
        document.querySelector('input[name="search"]').value = '';
        document.querySelector('form').submit();
    }

</script>

@endsection
